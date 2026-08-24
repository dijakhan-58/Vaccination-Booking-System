<?php

namespace App\Http\Controllers\Hospital;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use App\Models\VaccinationRecord;

class HospitalCertificateController extends Controller
{
    public function index()
    {
        $certificates = Certificate::latest()->get();

        return view(
            'hospital.certificates.index',
            compact('certificates')
        );
    }

    public function generate(VaccinationRecord $vaccinationRecord)
    {
        $certificate = Certificate::create([
            'vaccination_id' => $vaccinationRecord->id,
            'certificate_number' => 'CERT-' . time(),
            'qr_code' => 'CERT-' . time(),
            'generated_at' => now(),
        ]);

        return redirect()
            ->route('hospital.certificates.show', $certificate);
    }

    public function show(Certificate $certificate)
    {
        return view(
            'hospital.certificates.show',
            compact('certificate')
        );
    } 
}