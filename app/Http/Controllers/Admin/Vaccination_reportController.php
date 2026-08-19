<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\User;
use App\Models\VaccinationRecord;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class Vaccination_reportController extends Controller
{
    // Show all vaccination records
    public function index()
    {
        // Get all vaccination records
        $records = VaccinationRecord::with('booking', 'administeredBy')
            ->latest()
            ->get();

        // Total records
        $totalCount = $records->count();

        // Completed records
        $completedCount = $records
            ->where('status', 'completed')
            ->count();

        // Records having side effects
        $reactionCount = $records
            ->whereNotNull('side_effects')
            ->where('side_effects', '!=', '')
            ->count();

        // Records having a next dose date
        $followUpDueCount = $records
            ->whereNotNull('next_dose_date')
            ->where('next_dose_date', '>=', now())
            ->count();

        // Send data to the view
        return view(
            'dashboard.vaccination_reports.index',
            compact(
                'records',
                'totalCount',
                'completedCount',
                'reactionCount',
                'followUpDueCount'
            )
        );
    }


    // Show add vaccination form
    public function create()
    {
        // Get bookings with child information
        $bookings = Booking::with('child')
            ->latest()
            ->get();

        // Get all users
        $users = User::all();

        // Open add page
        return view(
            'dashboard.vaccination_reports.add',
            compact('bookings', 'users')
        );
    }


    // Save new vaccination record
    public function store(Request $request)
    {
        // Validate form data
        $request->validate([
            'booking_id' => 'required|exists:bookings,id',
            'administered_by' => 'required|exists:users,id',
            'vaccination_date' => 'required|date',
            'dose_number' => 'required|integer|min:1',
            'next_dose_date' => 'nullable|date|after_or_equal:vaccination_date',
            'status' => 'required|in:completed,pending,cancelled',
            'side_effects' => 'nullable|string',
            'remarks' => 'nullable|string',
        ]);

        // Create vaccination record
        VaccinationRecord::create([
            'booking_id' => $request->booking_id,
            'administered_by' => $request->administered_by,
            'vaccination_date' => $request->vaccination_date,
            'dose_number' => $request->dose_number,
            'next_dose_date' => $request->next_dose_date,
            'status' => $request->status,
            'side_effects' => $request->side_effects,
            'remarks' => $request->remarks,
        ]);

        // Go back to vaccination report page
        return redirect()
            ->route('vaccin_report_index')
            ->with('success', 'Vaccination record added successfully.');
    }


    // Show edit form
    public function edit(VaccinationRecord $vaccinationRecord)
    {
        // Get bookings
        $bookings = Booking::with('child')
            ->latest()
            ->get();

        // Get users
        $users = User::all();

        // Open edit page
        return view(
            'dashboard.vaccination_reports.edit',
            compact(
                'vaccinationRecord',
                'bookings',
                'users'
            )
        );
    }


    // Update vaccination record
    public function update(
        Request $request,
        VaccinationRecord $vaccinationRecord
    ) {
        // Validate form data
        $request->validate([
            'booking_id' => 'required|exists:bookings,id',
            'administered_by' => 'required|exists:users,id',
            'vaccination_date' => 'required|date',
            'dose_number' => 'required|integer|min:1',
            'next_dose_date' => 'nullable|date|after_or_equal:vaccination_date',
            'status' => 'required|in:completed,pending,cancelled',
            'side_effects' => 'nullable|string',
            'remarks' => 'nullable|string',
        ]);

        // Update record
        $vaccinationRecord->update([
            'booking_id' => $request->booking_id,
            'administered_by' => $request->administered_by,
            'vaccination_date' => $request->vaccination_date,
            'dose_number' => $request->dose_number,
            'next_dose_date' => $request->next_dose_date,
            'status' => $request->status,
            'side_effects' => $request->side_effects,
            'remarks' => $request->remarks,
        ]);

        // Go back to report page
        return redirect()
            ->route('vaccin_report_index')
            ->with('success', 'Vaccination record updated successfully.');
    }


    // Delete vaccination record
    public function destroy(VaccinationRecord $vaccinationRecord)
    {
        // Delete record
        $vaccinationRecord->delete();

        // Go back to report page
        return redirect()
            ->route('vaccin_report_index')
            ->with('success', 'Vaccination record deleted successfully.');
    }


    // Download complete vaccination report as PDF
    public function exportPdf()
    {
        // Get all vaccination records
        $records = VaccinationRecord::with('booking', 'administeredBy')
            ->latest()
            ->get();

        // Count total records
        $totalCount = $records->count();

        // Count completed records
        $completedCount = $records
            ->where('status', 'completed')
            ->count();

        // Count records with side effects
        $reactionCount = $records
            ->whereNotNull('side_effects')
            ->where('side_effects', '!=', '')
            ->count();

        // Count records that have a future dose date
        $followUpDueCount = $records
            ->whereNotNull('next_dose_date')
            ->where('next_dose_date', '>=', now())
            ->count();

        // Create PDF
        $pdf = Pdf::loadView(
            'dashboard.vaccination_reports.report_pdf',
            compact(
                'records',
                'totalCount',
                'completedCount',
                'reactionCount',
                'followUpDueCount'
            )
        );

        // Set PDF page size and direction
        $pdf->setPaper('a4', 'landscape');

        // Download PDF
        return $pdf->download(
            'vaccination-report-' . now()->format('Y-m-d') . '.pdf'
        );
    }


    // Download one vaccination record as PDF
    public function exportSinglePdf(
        VaccinationRecord $vaccinationRecord
    ) {
        // Get related booking and admin information
        $vaccinationRecord->load(
            'booking',
            'administeredBy'
        );

        // Create PDF
        $pdf = Pdf::loadView(
            'dashboard.vaccination_reports.single_pdf',
            compact('vaccinationRecord')
        );

        // Set PDF page size
        $pdf->setPaper('a4', 'portrait');

        // Download PDF
        return $pdf->download(
            'vaccination-record-' . $vaccinationRecord->id . '.pdf'
        );
    }
}