<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PdfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => 'Welcome to AmirRezaZare Resume',
            'date' => date('m/d/Y')
        ];
           
        $pdf = PDF::loadView('testPDF', $data);
     
        return $pdf->download('AmirRezaZare.pdf');
    }
}
