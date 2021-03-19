<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\PersonasExport;
use App\Models\Persona;
use Barryvdh\DomPDF\Facade as PDF;

class PDFController extends Controller
{
    public function index()
    {
        $personas = Persona::all();
        return view('pdf.imprimirlista')->with('personas',$personas);
    }
    public function imprimir() {
        $personas = Persona::all();
        $pdf = PDF::loadView('pdf.imprimirlista', compact('personas'));
        return $pdf->download('persona.pdf');
    }
}
