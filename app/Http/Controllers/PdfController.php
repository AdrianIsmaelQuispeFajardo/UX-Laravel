<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function download(){

        // Obtén los datos del controlador DataController
        $syllableController = new SyllableController();
        $datos = $syllableController->getData();
        $datosCurso = $syllableController->getCourseName(); //por el momento solo se obtiene el código del curso

        //$pdf = Pdf::loadView('pdf.silabo');
        //return $pdf->download('my-example.pdf');

        $pdf = \PDF::loadView('pdf.silabo', compact('datos'));
        return $pdf->stream('Sílabo '. $datosCurso . '.pdf');
    }
}
