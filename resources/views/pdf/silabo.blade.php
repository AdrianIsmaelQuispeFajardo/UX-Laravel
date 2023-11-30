<!DOCTYPE html>
<html>
  <head>
    <title>Sílabo</title>
    <style>
      body {
        font-family: "Times New Roman", Times, serif;
        margin: 0 2.54cm; /* Establece un margen izquierdo y derecho de 2.54 cm (1 pulgada) */
        font-size: 14px; /* Cambia el tamaño de fuente del cuerpo del documento */
        /*background-color: #00ff95;*/
      }
      h1 {
        text-align: center;
          margin-bottom: 0%;
          margin-top: 0%;
      }
      h2 {
        font-size: 18px;
      }
      p {
        margin-left: 1.27cm;
      }
      ul {
        list-style-type: disc;
        margin: 0 0 0 1.27cm;
      }
      ol {
        list-style-type: decimal;
        margin: 0 0 0 0;
        /*margin: 0 0 0 1.27cm;*/
      }
      .tabla-con-bordes {
        /*width: 100%;*/
        border-collapse: collapse;
        margin: 10px 0;
      }
      .tabla-con-bordes th, .tabla-con-bordes td {
        border: 1px solid #000;
        padding: 8px;
        text-align: center;
      }
      .tabla-sin-bordes {
        width: 100%;
        margin: 0px 0;
      }
      .tabla-sin-bordes td,
      .tabla-sin-bordes tr {
      padding-top: 0px; /* Ajusta el espacio superior de las celdas */
      padding-bottom: 0px; /* Ajusta el espacio inferior de las celdas */
      }
      .tabla-sin-bordes td:nth-child(2) {
      width: 150px; /* Cambia 150px al ancho deseado */
      }
      .wider-column {
      width: 150px; /* Ancho deseado para la primera columna */
      }

      .narrow-column {
      width: 20px; /* Ancho deseado para la cuarta columna */
      }
      .center-content {
      text-align: center; /* Centra el texto horizontalmente */
      display: flex; /*inline-block;*/
      flex-direction: column;
      align-items: center; /* Centra el contenido verticalmente */
      }
      
      .imagen {
          position: absolute;
          top: 10%; /* Centra verticalmente */
          left: 52.3%; /* Mueve a la derecha */
          transform: translate(-50%, -50%); /* Centra exactamente */
      }

      .imagen-sello {
          position: absolute;
          top: 5%;
          left: 90%;
          transform: translate(-50%, -50%);
      }
    </style>
  </head>
  <body>
    <div class="center-content">
      <img src="{{ public_path() . '/assets/img/UNMSM_logo.svg'}}" style="height: 150px" class="imagen"/>
      <img src="{{ public_path() . '/assets/img/sello.jpg'}}" style="height: 100px" class="imagen-sello"/>
      <h1><br><br><br><br><br></h1>
      <strong style="font-size: 22px;">Universidad Nacional Mayor de San Marcos</strong>
      <br>
      <strong style="font-size: 22px;">Universidad del Perú. Decana de América.</strong>
      <br>
      <strong style="font-size: 22px;">Facultad de Ingeniería de Sistema e Informática</strong>
      <br>
      <strong style="font-size: 18px;">Escuela Profesional de Ingeniería de Software</strong>
      <br>
      <br>
      <strong>Sílabo</strong>
      <br>
      <strong>2023</strong>
    </div>
    <h2>
      1. Información General
    </h2>
  <table class="tabla-sin-bordes">
    @if($datos !== null)
    @component('components.silabo_1')
        @slot('subpunto', '1.1. Nombre de la asignatura')
        @slot('contenido', $datos['1.1. Nombre de la asignatura'] )
    @endcomponent
    @component('components.silabo_1')
        @slot('subpunto', '1.2. Código de la asignatura')
        @slot('contenido', $datos['1.2. Código de la asignatura'] )
    @endcomponent
    @component('components.silabo_1')
        @slot('subpunto', '1.3. Tipo de asignatura')
        @slot('contenido', $datos['1.3. Tipo de asignatura'] )
    @endcomponent
    @component('components.silabo_1')
        @slot('subpunto', '1.4. Semestre académico')
        @slot('contenido', $datos['1.4. Semestre académico'] )
    @endcomponent
    @component('components.silabo_1')
        @slot('subpunto', '1.5. Malla')
        @slot('contenido', $datos['1.5. Malla'] )
    @endcomponent
    @component('components.silabo_1')
        @slot('subpunto', '1.6. Ciclo')
        @slot('contenido', $datos['1.6. Ciclo'] )
    @endcomponent
    @component('components.silabo_1')
        @slot('subpunto', '1.7. Número de créditos')
        @slot('contenido', $datos['1.7. Número de créditos'] )
    @endcomponent
    @component('components.silabo_1')
        @slot('subpunto', '1.8. Pre-requisitos')
        @slot('contenido', $datos['1.8. Pre-requisitos'] )
    @endcomponent
    @component('components.silabo_1')
        @slot('subpunto', '1.9. Modalidad')
        @slot('contenido', $datos['1.9. Modalidad'] )
    @endcomponent
    @component('components.silabo_1')
        @slot('subpunto', '1.10. Número de horas')
        @slot('contenido', $datos['1.10. Número de horas'] )
    @endcomponent
    @component('components.silabo_1')
        @slot('subpunto', '1.11. Docentes')
        @slot('contenido', $datos['1.11. Docentes'] )
    @endcomponent
    @else
    <p>No hay datos disponibles.</p>
    @endif
  </table>

    <h2>2. Sumilla</h2>
    @if($datos['2. Sumilla'] !== null)
    <p>{{ $datos['2. Sumilla'] }} </p>
    @else
    <p>No hay datos disponibles para la sumilla.</p>
    @endif
    <h2>3. LOGROS DE APRENDIZAJE (Competencias de la asignatura)</h2>
    <h3>3.1. Competencias generales</h3>
    <p>La asignatura contribuye en las siguientes competencias generales del egresado:</p>
    @if(isset($datos['3.1 Competencias generales']) && is_array($datos['3.1 Competencias generales']))
        <ul>
          @php
            $i=1;
          @endphp
          @foreach($datos['3.1 Competencias generales'] as $index => $competencia_general)
          <li>{{ ($index) }}: {{ $competencia_general }}</li>
          @php
          // <li>CG{{ $i }}: {{ $competencia_general }}</li>
          // <li>{{ ($index) }}: {{ $competencia_general }}</li> //Esto también funciona // as $index => $competencia_general
            $i++;
          @endphp
      @endforeach
      
        </ul>
        <?php //dd($datos['3.1_Competencias_generales']); ?>

    @else
        <li>No hay competencia generales para esta asignatura.</li>
    @endif

    <h3>3.2. Competencias específicas</h3>

    <p>La asignatura contribuye en las siguientes competencias específicas del egresado:</p>
    @if(isset($datos['3.2 Competencias específicas']) && is_array($datos['3.2 Competencias específicas']))
    <ul>
      @php
        $i=1;
      @endphp
      @foreach($datos['3.2 Competencias específicas'] as $index => $competencia_especifica)
        <li>{{ ($index) }}: {{ $competencia_especifica }}</li>
        @php
          $i++;
        @endphp
      @endforeach
      </ul>
      <?php //dd($datos['3.2 Competencias especificas']); ?>
      @else
          <li>No hay competencia generales para esta asignatura.</li>
    @endif

    
    <h2>4. Programación de contenidos</h2>
    <table class="tabla-con-bordes">
      
      @component('components.silabo_4_1')
      @slot('contenido', 'UNIDAD I: INTRODUCCIÓN A LA INTELIGENCIA ARTIFICIAL')
      @endcomponent

      @component('components.silabo_4_2')
      @slot('col1', 'Competencias específicas')
      @slot('col2', 'CEC01: Comprende qué es la Inteligencia Artificial y la complejidad de sus
      problemas, reflexionando críticamente acerca de sus posibilidades reales, mitos
      y realidades.')
      @endcomponent


      @component('components.silabo_4_3')
      @slot('col1', 'Sesión')
      @slot('col2', 'Contenido')
      @slot('col3', 'Competencias')
      @slot('col4', 'Actividades')
      @slot('col5', 'Recursos')
      @endcomponent
      @component('components.silabo_4_3')
      @slot('col1', '1')
      @slot('col2', $datos['4. Programación de contenidos']['Contenido 1'])
      @slot('col3', $datos['4. Programación de contenidos']['Competencias 1'])
      @slot('col4', $datos['4. Programación de contenidos']['Actividades 1'])
      @slot('col5', $datos['4. Programación de contenidos']['Recursos 1'])
      @endcomponent
      @component('components.silabo_4_3')
      @slot('col1', '2')
      @slot('col2', $datos['4. Programación de contenidos']['Contenido 2'])
      @slot('col3', $datos['4. Programación de contenidos']['Competencias 2'])
      @slot('col4', $datos['4. Programación de contenidos']['Actividades 2'])
      @slot('col5', $datos['4. Programación de contenidos']['Recursos 2'])
      @endcomponent
      @component('components.silabo_4_3')
      @slot('col1', '3')
      @slot('col2', $datos['4. Programación de contenidos']['Contenido 3'])
      @slot('col3', $datos['4. Programación de contenidos']['Competencias 3'])
      @slot('col4', $datos['4. Programación de contenidos']['Actividades 3'])
      @slot('col5', $datos['4. Programación de contenidos']['Recursos 3'])
      @endcomponent
      @component('components.silabo_4_3')
      @slot('col1', '4')
      @slot('col2', $datos['4. Programación de contenidos']['Contenido 4'])
      @slot('col3', $datos['4. Programación de contenidos']['Competencias 4'])
      @slot('col4', $datos['4. Programación de contenidos']['Actividades 4'])
      @slot('col5', $datos['4. Programación de contenidos']['Recursos 4'])
      @endcomponent
      @component('components.silabo_4_3')
      @slot('col1', '5')
      @slot('col2', $datos['4. Programación de contenidos']['Contenido 5'])
      @slot('col3', $datos['4. Programación de contenidos']['Competencias 5'])
      @slot('col4', $datos['4. Programación de contenidos']['Actividades 5'])
      @slot('col5', $datos['4. Programación de contenidos']['Recursos 5'])
      @endcomponent
      @component('components.silabo_4_3')
      @slot('col1', '6')
      @slot('col2', $datos['4. Programación de contenidos']['Contenido 6'])
      @slot('col3', $datos['4. Programación de contenidos']['Competencias 6'])
      @slot('col4', $datos['4. Programación de contenidos']['Actividades 6'])
      @slot('col5', $datos['4. Programación de contenidos']['Recursos 6'])
      @endcomponent
      @component('components.silabo_4_3')
      @slot('col1', '7')
      @slot('col2', $datos['4. Programación de contenidos']['Contenido 7'])
      @slot('col3', $datos['4. Programación de contenidos']['Competencias 7'])
      @slot('col4', $datos['4. Programación de contenidos']['Actividades 7'])
      @slot('col5', $datos['4. Programación de contenidos']['Recursos 7'])
      @endcomponent
      @component('components.silabo_4_3')
      @slot('col1', '8')
      @slot('col2', $datos['4. Programación de contenidos']['Contenido 8'])
      @slot('col3', $datos['4. Programación de contenidos']['Competencias 8'])
      @slot('col4', $datos['4. Programación de contenidos']['Actividades 8'])
      @slot('col5', $datos['4. Programación de contenidos']['Recursos 8'])
      @endcomponent
      @component('components.silabo_4_3')
      @slot('col1', '9')
      @slot('col2', $datos['4. Programación de contenidos']['Contenido 9'])
      @slot('col3', $datos['4. Programación de contenidos']['Competencias 9'])
      @slot('col4', $datos['4. Programación de contenidos']['Actividades 9'])
      @slot('col5', $datos['4. Programación de contenidos']['Recursos 9'])
      @endcomponent
      @component('components.silabo_4_3')
      @slot('col1', '10')
      @slot('col2', $datos['4. Programación de contenidos']['Contenido 10'])
      @slot('col3', $datos['4. Programación de contenidos']['Competencias 10'])
      @slot('col4', $datos['4. Programación de contenidos']['Actividades 10'])
      @slot('col5', $datos['4. Programación de contenidos']['Recursos 10'])
      @endcomponent
      @component('components.silabo_4_3')
      @slot('col1', '11')
      @slot('col2', $datos['4. Programación de contenidos']['Contenido 11'])
      @slot('col3', $datos['4. Programación de contenidos']['Competencias 11'])
      @slot('col4', $datos['4. Programación de contenidos']['Actividades 11'])
      @slot('col5', $datos['4. Programación de contenidos']['Recursos 11'])
      @endcomponent
      @component('components.silabo_4_3')
      @slot('col1', '12')
      @slot('col2', $datos['4. Programación de contenidos']['Contenido 12'])
      @slot('col3', $datos['4. Programación de contenidos']['Competencias 12'])
      @slot('col4', $datos['4. Programación de contenidos']['Actividades 12'])
      @slot('col5', $datos['4. Programación de contenidos']['Recursos 12'])
      @endcomponent
      @component('components.silabo_4_3')
      @slot('col1', '13')
      @slot('col2', $datos['4. Programación de contenidos']['Contenido 13'])
      @slot('col3', $datos['4. Programación de contenidos']['Competencias 13'])
      @slot('col4', $datos['4. Programación de contenidos']['Actividades 13'])
      @slot('col5', $datos['4. Programación de contenidos']['Recursos 13'])
      @endcomponent
      @component('components.silabo_4_3')
      @slot('col1', '14')
      @slot('col2', $datos['4. Programación de contenidos']['Contenido 14'])
      @slot('col3', $datos['4. Programación de contenidos']['Competencias 14'])
      @slot('col4', $datos['4. Programación de contenidos']['Actividades 14'])
      @slot('col5', $datos['4. Programación de contenidos']['Recursos 14'])
      @endcomponent
      @component('components.silabo_4_3')
      @slot('col1', '15')
      @slot('col2', $datos['4. Programación de contenidos']['Contenido 15'])
      @slot('col3', $datos['4. Programación de contenidos']['Competencias 15'])
      @slot('col4', $datos['4. Programación de contenidos']['Actividades 15'])
      @slot('col5', $datos['4. Programación de contenidos']['Recursos 15'])
      @endcomponent
      @component('components.silabo_4_3')
      @slot('col1', '16')
      @slot('col2', $datos['4. Programación de contenidos']['Contenido 16'])
      @slot('col3', $datos['4. Programación de contenidos']['Competencias 16'])
      @slot('col4', $datos['4. Programación de contenidos']['Actividades 16'])
      @slot('col5', $datos['4. Programación de contenidos']['Recursos 16'])
      @endcomponent
     
    </table>
  </body>
</html>