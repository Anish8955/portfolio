<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    
    public function downloadCV()
    {
        $filePath = public_path('uploads/cv/anishResume.pdf'); 
        $headers = ['Content-Type: application/pdf'];

        return Response::download($filePath, 'anishResume.pdf', $headers);
    }


}
