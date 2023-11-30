@extends('layouts.base')

@section('title', 'Buscar sílabos')

@section('styles')
  <link rel="stylesheet" href="{{ asset('assets/css/style_search.css') }}" />
@endsection

@section('scripts')
  <script>
    var downloadRoute = "{{ route('download') }}";
    var uploadRoute = "{{ route('upload') }}";
  </script>
  <script src="{{ asset('assets/js/script_search.js') }}"></script>
@endsection

@section('content')
  <body class="body bg-search">
    <div class="container">
      <div class="search-bar">
        <p class="buscar">Buscar:</p>
        <input type="text" class="form-control w-50 rounded-0" id="txtbusqueda" placeholder="Introducir búsqueda" onkeydown="handleKeyPress(event)">
        <input class="btn btn-info rounded-0" type="button" value="Ir" onclick="buscar()">
        
        <x-search_select class="search-field" name="search-field" id="search-field" default="Campos de búsqueda">
            <option value="option1">Nombre de curso</option>
            <option value="option2">Código de curso</option>
        </x-search_select>

        <x-search_select class="search-field" name="elegir-escuela" id="elegir-escuela" default="Elegir escuela">
            <option value="option1">Ingeniería de Software</option>
            <option value="option2">Ingeniería de Sistemas</option>
        </x-search_select>

      </div>

      <div class="results-head">
        <div class="row justify-content-around">
          <div class="col-6 bg-color">
            <div class="row justify-content-between" style="display: flex; align-items: center;">
              <div class="col"><strong>Resultados</strong></div>
              <div class="col" style="width: 500px; margin-left:50px;">
                <x-search_select class="filter-field" name="filtrar-busqueda" id="filtrar-busqueda" default="Filtrar búsqueda">
                  <option value="option1">Plan de estudios</option>
                  <option value="option2">Semestre académico</option>
                </x-search_select>
              </div>
            </div>
          </div>
          <div class="col-4 bg-color"><strong>Detalles</strong></div>
        </div>
      </div>

      <div class="results-body">
        <div class="row justify-content-around">
          <div class="col-6 bg-white" id="resultado" style="min-height: 100px; max-height: 150px">
            Mostrando 0 resultados - Introduzca una búsqueda
          </div>
          <div class="col-4 bg-white" id="detalles" style="min-height: 100px;  max-height: 430px">
            <div>No hay curso seleccionado</div>
            <div style="font-weight: bold;">
              Información del curso
            </div>
            <div style="font-weight: bold;">
              Sílabo
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
@endsection
