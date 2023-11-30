<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Syllable;

class SyllableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Syllable::factory()->count(5)->create(); // 5 Código para los fake
        Syllable::create([
            'idSyllable' => 1,
            'idCourse' => 101,
            'idPhase' => 3,
            'Texto' => 'Este es un texto de ejemplo.',
            'syllable' => json_encode([
                '1.1. Nombre de la asignatura' => 'Inteligencia Artificial',
                '1.2. Código de la asignatura' => '202W0705',
                '1.3. Tipo de asignatura' => 'Obligatoria',
                '1.4. Semestre académico' => '2023-2',
                '1.5. Malla' => 2018,
                '1.6. Ciclo' => 'VII',
                '1.7. Número de créditos' => 3,
                '1.8. Pre-requisitos' => '202W0606 Interacción Humano Computador',
                '1.9. Modalidad' => 'Presencial',
                '1.10. Número de horas' => 4,
                '1.11. Docentes' => 'Gamarra',
                '2. Sumilla' => 'Esta asignatura corresponde al área de estudios de especialidad, es de naturaleza teórico y práctico; tiene el propósito de desarrollar los fundamentos prácticos y teóricos para el desarrollo de sistemas de computación que presentan características inteligentes para lograr la competencia: “Implementa y mantiene software inteligente en base al conocimiento de métodos, técnicas y metodologías de la inteligencia artificial en equipos multidisciplinarios con una actitud ética, crítica e innovadora”. Los contenidos principales son: La Inteligencia Artificial, conceptos, paradigmas y aplicaciones en la industria y servicios. Representación del conocimiento. Representación de problemas de IA como búsqueda en el espacio de estado. Métodos de búsqueda ciegos e informados. Juegos inteligentes hombre-máquina. Sistemas expertos, arquitectura, taxonomía y aplicaciones. Motor de Inferencia. Ingeniería de conocimiento, conceptos, su evolución. Common KADS. Verificación y validación de sistemas expertos.',
                '3.1 Competencias generales' => json_encode([
                    'CG1' => 'Gestiona la información y la difusión de conocimientos con adecuada comunicación oral y escrita de la propia profesión, ejerciendo el derecho de libertad de pensamiento con responsabilidad.',
                    'CG2' => 'Capacidad de análisis y síntesis en la toma de decisiones con responsabilidad, sentido crítico y autocrítico.',
                    'CG3' => 'Desempeña su profesión con liderazgo, adecuándose a los cambios y a las nuevas tendencias, comprometido con la paz, medio ambiente, equidad de género, defensa de los derechos humanos y valores democráticos.',
                    'CG4' => 'Trabaja en equipo con una perspectiva transdisciplinar para comprender y transformar la realidad compleja.',
                    'CG5' => 'Genera nuevos conocimientos que aportan al desarrollo de la sociedad mediante la investigación, con sentido ético.',
                    'CG6' => 'Aplica conocimientos a la práctica para resolver problemas con compromiso ético.',
                ]),
                '3.2 Competencias específicas' => json_encode([
                    'CE1' => 'Desarrollo ético',
                    'CE2' => 'Capacidad de Análisis',
                    'CE3' => 'Pensamiento Crítico',
                    'CE4' => 'Comunicación oral y escrita',
                    'CE8' => 'Lidera y gestiona proyectos de desarrollo de software',
                    'CE9' => 'Desarrolla y mantiene soluciones de software con actitud innovadora',
                    'CE10' => 'Aplica metodologías, métodos, técnicas y herramientas de ingeniería de software',
                    'CE11' => 'Diseña, implementa, verifica y valida pruebas de las soluciones de software',
                    'CE13' => 'Aplica conocimiento de métodos, técnicas y metodologías de la Inteligencia artificial',
                    'CE15' => ' Desarrolla investigaciones científico-tecnológicas en el campo de la Ingeniería de software',
                    'CE16' => 'Aplica Ciencia de los Datos',
                ]),
                '4. Programación de contenidos' => json_encode([

                    'Contenido 1' => 'Introducción a la Inteligencia Artificial',
                    'Competencias 1' => 'CEC01',
                    'Actividades 1' => 'Lectura de documentos',
                    'Recursos 1' => 'Presentaciones',
                    
                    'Contenido 2' => 'Historia y evolución de la IA',
                    'Competencias 2' => 'CEC02',
                    'Actividades 2' => 'Ejercicios prácticos',
                    'Recursos 2' => 'Presentaciones',

                    'Contenido 3' => 'Álgebra lineal y cálculo para IA',
                    'Competencias 3' => 'CEC03',
                    'Actividades 3' => 'Ejercicios prácticos',
                    'Recursos 3' => 'Presentaciones',

                    'Contenido 4' => 'Estadísticas y probabilidad en el contexto de la IA',
                    'Competencias 4' => 'CEC03',
                    'Actividades 4' => 'Ejercicios prácticos',
                    'Recursos 4' => 'Presentaciones',

                    'Contenido 5' => 'Regresión y clasificación',
                    'Competencias 5' => 'CEC03',
                    'Actividades 5' => 'Lectura de documentos',
                    'Recursos 5' => 'Presentaciones',

                    'Contenido 6' => 'Algoritmos de aprendizaje supervisado',
                    'Competencias 6' => 'CEC01',
                    'Actividades 6' => 'Ejercicios prácticos',
                    'Recursos 6' => 'Presentaciones',

                    'Contenido 7' => 'Evaluación de modelos',
                    'Competencias 7' => 'CEC01',
                    'Actividades 7' => 'Ejercicios prácticos',
                    'Recursos 7' => 'Presentaciones',

                    'Contenido 8' => 'Examen Parcial',
                    'Competencias 8' => 'CEC01',
                    'Actividades 8' => 'Examen',
                    'Recursos 8' => 'Presentaciones',

                    'Contenido 9' => 'Agrupamiento y asociación',
                    'Competencias 9' => 'CEC01',
                    'Actividades 9' => 'Lectura de documentos',
                    'Recursos 9' => 'Presentaciones',

                    'Contenido 10' => 'Algoritmos de aprendizaje no supervisado',
                    'Competencias 10' => 'CEC01',
                    'Actividades 10' => 'Lectura de documentos',
                    'Recursos 10' => 'Presentaciones',

                    'Contenido 11' => 'Conceptos básicos de redes neuronales',
                    'Competencias 11' => 'CEC01',
                    'Actividades 11' => 'Lectura de documentos',
                    'Recursos 11' => 'Presentaciones',

                    'Contenido 12' => 'Arquitecturas de redes neuronales',
                    'Competencias 12' => 'CEC01',
                    'Actividades 12' => 'Lectura de documentos',
                    'Recursos 12' => 'Presentaciones',

                    'Contenido 13' => 'Entrenamiento de modelos de Deep Learning',
                    'Competencias 13' => 'CEC01',
                    'Actividades 13' => 'Lectura de documentos',
                    'Recursos 13' => 'Presentaciones',

                    'Contenido 14' => 'Consideraciones éticas en el diseño y aplicación de IA',
                    'Competencias 14' => 'CEC01',
                    'Actividades 14' => 'Lectura de documentos',
                    'Recursos 14' => 'Presentaciones',

                    'Contenido 15' => 'Impacto social y laboral de la IA',
                    'Competencias 15' => 'CEC01',
                    'Actividades 15' => 'Lectura de documentos',
                    'Recursos 15' => 'Presentaciones',

                    'Contenido 16' => 'Examen final',
                    'Competencias 16' => 'CEC01',
                    'Actividades 16' => 'Examen',
                    'Recursos 16' => 'Presentaciones',
                ]),
            ]),
        ]);


        Syllable::create([
            'idSyllable' => 2,
            'idCourse' => 102,
            'idPhase' => 4,
            'Texto' => 'Este es un texto de ejemplo',
            'syllable' => json_encode([
                '1.1. Nombre de la asignatura' => 'Experiencia de Usuario y Usabilidad',
                '1.2. Código de la asignatura' => '202W0706',
                '1.3. Tipo de asignatura' => 'Obligatoria',
                '1.4. Semestre académico' => '2023-2',
                '1.5. Malla' => 2018,
                '1.6. Ciclo' => 'VII',
                '1.7. Número de créditos' => 4,
                '1.8. Pre-requisitos' => 'Prerequisitos del curso',
                '1.9. Modalidad' => 'Presencial',
                '1.10. Número de horas' => 4,
                '1.11. Docentes' => ' PETRLIK AZABACHE, IVAN',
                '2. Sumilla' => 'El curso de Experiencia de Usuario y Usabilidad tiene como objetivo principal proporcionar a los estudiantes los conocimientos teóricos y prácticos necesarios para diseñar interfaces digitales centradas en el usuario. Se abordarán temas como principios de diseño centrado en el usuario, evaluación de la experiencia del usuario, colaboración en equipos multidisciplinarios, comunicación efectiva de conceptos de UX, ética en el diseño de interfaces, y la integración de feedback de usuarios para la mejora continua.
El contenido del curso incluye el diseño de interfaces intuitivas y atractivas, la realización de pruebas de usabilidad, la aplicación de metodologías de investigación de usuarios, el desarrollo de prototipos interactivos, el uso de herramientas y técnicas modernas en el diseño de interfaces, la gestión de proyectos de experiencia de usuario, la evaluación de la accesibilidad y la inclusión, y el mantenimiento actualizado de conocimientos en tendencias y tecnologías relacionadas con la experiencia de usuario.
Al finalizar el curso, los estudiantes estarán preparados para enfrentar los desafíos del diseño de interfaces digitales, contribuyendo al desarrollo de productos y servicios que satisfacen las necesidades y expectativas de los usuarios de manera efectiva y ética.',

                '3.1 Competencias generales' => json_encode([
                    'CG1' => 'Comprende y aplica los principios de diseño centrado en el usuario en el desarrollo de productos digitales.',
                    'CG2' => 'Analiza y evalúa la experiencia del usuario en diferentes interfaces y contextos.',
                    'CG3' => 'Colabora de manera efectiva en equipos multidisciplinarios para mejorar la usabilidad de sistemas informáticos.',
                    'CG4' => 'Comunica de manera clara y efectiva conceptos relacionados con la experiencia de usuario y usabilidad.',
                    'CG5' => 'Aplica principios éticos en el diseño de interfaces para garantizar la accesibilidad y la inclusión.',
                    'CG6' => 'Integra feedback de usuarios para iterar y mejorar continuamente la experiencia de usuario.',
                ]),
                '3.2 Competencias específicas' => json_encode([
                    'CE1' => 'Diseña interfaces intuitivas y atractivas.',
                    'CE2' => 'Realiza pruebas de usabilidad y analiza los resultados para realizar mejoras.',
                    'CE3' => 'Aplica metodologías de investigación de usuarios para comprender sus necesidades y expectativas.',
                    'CE4' => 'Desarrolla prototipos interactivos para validar y comunicar ideas de diseño.',
                    'CE5' => 'Utiliza herramientas y técnicas modernas en el diseño de interfaces de usuario.',
                    'CE6' => 'Gestiona proyectos de experiencia de usuario desde la concepción hasta la implementación.',
                    'CE7' => 'Evalúa la accesibilidad y la inclusión en el diseño de interfaces digitales.',
                    'CE8' => 'Mantiene actualizados sus conocimientos en tendencias y tecnologías relacionadas con la experiencia de usuario.',
                ]),
            ]),
        ]);
    }
}
