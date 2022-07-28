<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CertificateResource;
use App\Models\Certificate;
use Illuminate\Http\Request;

class CertificateController extends Controller
{
    public function show($certificateNo)
    {
        $certificate = Certificate::where('certificate_no',$certificateNo)->get();
        return CertificateResource::collection($certificate);
    }
}
