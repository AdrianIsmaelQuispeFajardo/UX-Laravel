<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Syllable;
use Illuminate\Support\Facades\Redirect;

class SyllableController extends Controller
{
    public function getCourseName() {
        $syllableData = Syllable::first();
        if($syllableData) {
            $datos = $syllableData->idCourse;
            return $datos;
        }
    }

    public function index() {
        /*$syllables = Syllable::all();
        return view('syllable.index', compact('syllables'));*/
        return Redirect::route('search');
    }

    public function create() {
        return view('upload');
    }

    public function store(Request $request) {
        $syllable = new Syllable();
        //$syllable->idSyllable = $request->idSyllable;
        //$syllable->idCourse = $request->idCourse;

        $jsonData = [
            '1.1. Nombre de la asignatura' =>  $request->_1_1_Nombre_de_la_asignatura,
            '1.2. Código de la asignatura' =>  $request->_1_2_Codigo_de_la_asignatura,
            '1.3. Tipo de asignatura' =>  $request->_1_3_Tipo_de_asignatura,
            '1.4. Semestre académico' =>  $request->_1_4_Semestre_academico,
            '1.5. Malla' =>  $request->_1_5_Malla,
            '1.6. Ciclo' =>  $request->_1_6_Ciclo,
            '1.7. Número de créditos' =>  $request->_1_7_Numero_de_creditos,
            '1.8. Pre-requisitos' =>  $request->_1_8_Pre_requisitos,
            '1.9. Modalidad' =>  $request->_1_9_Modalidad,
            '1.10. Número de horas' =>  $request->_1_10_Numero_de_horas,
            '1.11. Docentes' =>  $request->_1_11_Docentes,
            '2. Sumilla' =>  $request->_2_Sumilla,

        ];

        $additionalData = [
            'CG1' => $request->_1_1_Nombre_de_la_asignatura,
            'CG2' => $request->_2_Sumilla,
            'CG3' => $request->_1_3_Tipo_de_asignatura,
        ];

        $additionalDataJson = json_encode($additionalData);
        $jsonData['3.1 Competencias generales'] = $additionalDataJson;

        $additionalData3 = [
            'Contenido 1' => $request->Contenido_1,
            'Competencias 1' => $request->Competencias_1,
            'Actividades 1' => $request->Actividades_1,
            'Recursos 1' => $request->Recursos_1,
        
            'Contenido 2' => $request->Contenido_2,
            'Competencias 2' => $request->Competencias_2,
            'Actividades 2' => $request->Actividades_2,
            'Recursos 2' => $request->Recursos_2,
        
            'Contenido 3' => $request->Contenido_3,
            'Competencias 3' => $request->Competencias_3,
            'Actividades 3' => $request->Actividades_3,
            'Recursos 3' => $request->Recursos_3,
        
            'Contenido 4' => $request->Contenido_4,
            'Competencias 4' => $request->Competencias_4,
            'Actividades 4' => $request->Actividades_4,
            'Recursos 4' => $request->Recursos_4,
        
            'Contenido 5' => $request->Contenido_5,
            'Competencias 5' => $request->Competencias_5,
            'Actividades 5' => $request->Actividades_5,
            'Recursos 5' => $request->Recursos_5,
        
            'Contenido 6' => $request->Contenido_6,
            'Competencias 6' => $request->Competencias_6,
            'Actividades 6' => $request->Actividades_6,
            'Recursos 6' => $request->Recursos_6,
        
            'Contenido 7' => $request->Contenido_7,
            'Competencias 7' => $request->Competencias_7,
            'Actividades 7' => $request->Actividades_7,
            'Recursos 7' => $request->Recursos_7,
        
            'Contenido 8' => $request->Contenido_8,
            'Competencias 8' => $request->Competencias_8,
            'Actividades 8' => $request->Actividades_8,
            'Recursos 8' => $request->Recursos_8,
        
            'Contenido 9' => $request->Contenido_9,
            'Competencias 9' => $request->Competencias_9,
            'Actividades 9' => $request->Actividades_9,
            'Recursos 9' => $request->Recursos_9,
        
            'Contenido 10' => $request->Contenido_10,
            'Competencias 10' => $request->Competencias_10,
            'Actividades 10' => $request->Actividades_10,
            'Recursos 10' => $request->Recursos_10,
        
            'Contenido 11' => $request->Contenido_11,
            'Competencias 11' => $request->Competencias_11,
            'Actividades 11' => $request->Actividades_11,
            'Recursos 11' => $request->Recursos_11,
        
            'Contenido 12' => $request->Contenido_12,
            'Competencias 12' => $request->Competencias_12,
            'Actividades 12' => $request->Actividades_12,
            'Recursos 12' => $request->Recursos_12,
        
            'Contenido 13' => $request->Contenido_13,
            'Competencias 13' => $request->Competencias_13,
            'Actividades 13' => $request->Actividades_13,
            'Recursos 13' => $request->Recursos_13,
        
            'Contenido 14' => $request->Contenido_14,
            'Competencias 14' => $request->Competencias_14,
            'Actividades 14' => $request->Actividades_14,
            'Recursos 14' => $request->Recursos_14,
        
            'Contenido 15' => $request->Contenido_15,
            'Competencias 15' => $request->Competencias_15,
            'Actividades 15' => $request->Actividades_15,
            'Recursos 15' => $request->Recursos_15,
        
            'Contenido 16' => $request->Contenido_16,
            'Competencias 16' => $request->Competencias_16,
            'Actividades 16' => $request->Actividades_16,
            'Recursos 16' => $request->Recursos_16,
        ];
        

        $additionalDataJson3 = json_encode($additionalData3);
        $jsonData['4. Programación de contenidos'] = $additionalDataJson3;

        // Convertir el array a JSON y asignarlo a la propiedad correspondiente
        $syllable->syllable = json_encode($jsonData);

        $syllable->save();
        return redirect()->route('syllable.index');
    }

    public function getData() {

        $syllableData = Syllable::first();
        /*$syllableData = Syllable::where('idSyllable', 1)->first();
        _1_1_Nombre_de_la_asignatura*/
        //$syllableData = Syllable::whereJsonContains('syllable->_1_1_Nombre_de_la_asignatura', 'Paralela')->get();

        if ($syllableData) {
            // Decodificar la cadena JSON
            $datos = json_decode($syllableData->syllable, true);
            $datos['idSyllable'] = $syllableData->idSyllable;
            $datos['idCourse'] = $syllableData->idCourse;
            $datos['idPhase'] = $syllableData->idPhase;
            if (json_last_error() === JSON_ERROR_NONE) {

                $Competencias_generales = json_decode($datos['3.1 Competencias generales'], true);

                if (json_last_error() === JSON_ERROR_NONE) {
                    // La decodificación del JSON interno fue exitosa
                    $datos['3.1 Competencias generales'] = $Competencias_generales;
                } else {
                    // Manejar el error de decodificación del JSON interno
                    \dd("Error al decodificar el JSON interno");
                }
                if (json_last_error() === JSON_ERROR_NONE) {

                    $Competencias_especificas = json_decode($datos['3.2 Competencias específicas'], true);
    
                    if (json_last_error() === JSON_ERROR_NONE) {
                        // La decodificación del JSON interno fue exitosa
                        $datos['3.2 Competencias específicas'] = $Competencias_especificas;
                    } else {
                        // Manejar el error de decodificación del JSON interno
                        \dd("Error al decodificar el JSON interno");
                    }

                    } else {
                        // Manejar el error de decodificación
                        \dd("Error al decodificar JSON");
                    } if (json_last_error() === JSON_ERROR_NONE) {

                        $Contenidos = json_decode($datos['4. Programación de contenidos'], true);
        
                        if (json_last_error() === JSON_ERROR_NONE) {
                            // La decodificación del JSON interno fue exitosa
                            $datos['4. Programación de contenidos'] = $Contenidos;
                        } else {
                            // Manejar el error de decodificación del JSON interno
                            \dd("Error al decodificar el JSON interno de contenidos");
                        }
    
                    }
                        
                ksort($datos);
                
                // La decodificación fue exitosa, $datos ahora es un arreglo
                return $datos;
            } else {
                // Manejar el error de decodificación
                \dd("Error al decodificar JSON");
            }
        }
        //\dd("Hello World");
    }
}
