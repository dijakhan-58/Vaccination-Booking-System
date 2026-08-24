<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use App\Models\VaccinationRecord;

class CertificateController extends Controller
{
    public function generate(VaccinationRecord $vaccinationRecord)
    {
        $certificate = Certificate::create([
            'vaccination_id' => $vaccinationRecord->id,
            'certificate_number' => 'CERT-' . time(),
            'qr_code' => 'CERT-' . time(),
            'generated_at' => now(),
        ]);

        return redirect()
            ->route('admin.certificates.show', $certificate)
            ->with('success', 'Certificate generated.');
    }

    public function show(Certificate $certificate)
    {
        return view('admin.certificates.show', compact('certificate'));
    }

    public function download(Certificate $certificate)
    {
        
        return view('admin.certificates.show', compact('certificate'));
    }
}