<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
//use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SyllableFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'idSyllable'=> \fake()->numberBetween(1,125),
            'idCourse'=> \fake()->numberBetween(1,125),
            'idPhase'=> \fake()->numberBetween(1,125),
            'Texto' => \fake()->paragraphs(1, true),
            'syllable' => json_encode([
                '1.1_Nombre_asignatura' => \fake()->words(5),
                '1.2_Codigo_asignatura' => \fake()->word(),
                '1.3_Tipo_asignatura' =>\fake()->word(),
                '1.4_Semestre_academico' => \fake()->word(),
                '1.5_Malla' => \fake()->numberBetween(2015,2023),
                '1.6_Ciclo' => \fake()->numberBetween(1,10),
                '1.7_Numero_creditos' => \fake()->numberBetween(1,4),
                '1.8_Pre-requisitos' => \fake()->words(5),
                '1.9_Modalidad' => \fake()->word(),
                '1.10_Numero_horas' => \fake()->numberBetween(1,125),
                '1.11_Docentes' => \fake()->lastName(),
                '2_Sumilla' => \fake()->paragraphs(1, true),
            ]),
        ];
    }
}
