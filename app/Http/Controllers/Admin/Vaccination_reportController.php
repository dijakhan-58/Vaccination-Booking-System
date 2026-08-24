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

    public function index()
    {
        
        $records = VaccinationRecord::with('booking', 'administeredBy')
            ->latest()
            ->get();

      
        $totalCount = $records->count();

     
        $completedCount = $records
            ->where('status', 'completed')
            ->count();

  
        $reactionCount = $records
            ->whereNotNull('side_effects')
            ->where('side_effects', '!=', '')
            ->count();

        $followUpDueCount = $records
            ->whereNotNull('next_dose_date')
            ->where('next_dose_date', '>=', now())
            ->count();

      
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


    public function create()
    {
        $bookings = Booking::with('child')
            ->latest()
            ->get();

        $users = User::all();

 
        return view(
            'dashboard.vaccination_reports.add',
            compact('bookings', 'users')
        );
    }


    public function store(Request $request)
    {
        
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

       
        return redirect()
            ->route('vaccin_report_index')
            ->with('success', 'Vaccination record added successfully.');
    }


   
    public function edit(VaccinationRecord $vaccinationRecord)
    {
       
        $bookings = Booking::with('child')
            ->latest()
            ->get();

       
        $users = User::all();

        return view(
            'dashboard.vaccination_reports.edit',
            compact(
                'vaccinationRecord',
                'bookings',
                'users'
            )
        );
    }



    public function update(
        Request $request,
        VaccinationRecord $vaccinationRecord
    ) {
    
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

    
        return redirect()
            ->route('vaccin_report_index')
            ->with('success', 'Vaccination record updated successfully.');
    }


    
    public function destroy(VaccinationRecord $vaccinationRecord)
    {
      
        $vaccinationRecord->delete();

      
        return redirect()
            ->route('vaccin_report_index')
            ->with('success', 'Vaccination record deleted successfully.');
    }


    public function exportPdf()
    {
       
        $records = VaccinationRecord::with('booking', 'administeredBy')
            ->latest()
            ->get();

     
        $totalCount = $records->count();

      
        $completedCount = $records
            ->where('status', 'completed')
            ->count();

    
        $reactionCount = $records
            ->whereNotNull('side_effects')
            ->where('side_effects', '!=', '')
            ->count();

       
        $followUpDueCount = $records
            ->whereNotNull('next_dose_date')
            ->where('next_dose_date', '>=', now())
            ->count();

  
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

     
        $pdf->setPaper('a4', 'landscape');

        return $pdf->download(
            'vaccination-report-' . now()->format('Y-m-d') . '.pdf'
        );
    }


  
    public function exportSinglePdf(
        VaccinationRecord $vaccinationRecord
    ) {
      
        $vaccinationRecord->load(
            'booking',
            'administeredBy'
        );


        $pdf = Pdf::loadView(
            'dashboard.vaccination_reports.single_pdf',
            compact('vaccinationRecord')
        );

    
        $pdf->setPaper('a4', 'portrait');

  
        return $pdf->download(
            'vaccination-record-' . $vaccinationRecord->id . '.pdf'
        );
    }
}