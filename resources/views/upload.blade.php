@extends('layouts.base')

@section('title', 'Subir sílabos')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/style_upload.css') }}" />
@endsection

@section('scripts')
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script src="{{ asset('assets/js/script_upload.js') }}"></script>
@endsection

@section('content')
  
  <form id="myForm" action="" method="post" autocomplete = "off">
    <h1 align=center>
      Registro
    </h1>
    <div style="text-align:center;">
      <span class="step" id = "step-1">1</span>
      <span class="step" id = "step-2">2</span>
      <span class="step" id = "step-3">3</span>
      <span class="step" id = "step-4">4</span>
      <span class="step" id = "step-5">5</span>
    </div>

    @component('components.upload_tab1')
    @endcomponent

    @component('components.upload_tab2')
    @endcomponent

    @component('components.upload_tab3')
    @endcomponent

    @component('components.upload_tab4')
    @endcomponent

    @component('components.upload_tab5')
    @endcomponent

  </form>
@endsection
