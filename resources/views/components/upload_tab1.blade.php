<div class="tab active" id="tab-1">
  <div class="container containerRegister1">
    <h2>Información General</h2>
    <form method="POST" action="{{ route('upload') }}">
      @csrf
      <label>1.1. Nombre de la asignatura</label>
      <input type="text" name="_1_1_Nombre_de_la_asignatura">

      <label>1.2. Código de la asignatura</label>
      <input type="text" name="_1_2_Codigo_de_la_asignatura">

      <label>1.3. Tipo de asignatura</label>
      <input type="text" name="_1_3_Tipo_de_asignatura">

      <label>1.4. Semestre Académico</label>
      <input type="text" name="_1_4_Semestre_academico">

      <label>1.5. Malla Curricular</label>
      <input type="text" name="_1_5_Malla">

      <label>1.6. Ciclo Académico</label>
      <input type="text" name="_1_6_Ciclo">

      <label>1.7. Número de Créditos</label>
      <input type="text" name="_1_7_Numero_de_creditos">

      <label>1.8. Pre-requisitos</label>
      <input type="text" name="_1_8_Pre_requisitos">

      <label>1.9. Modalidad</label>
      <input type="text" name="_1_9_Modalidad">

      <label>1.10. Número de Horas</label>
      <input type="text" name="_1_10_Numero_de_horas">

      <label>1.11. Docente</label>
      <input type="text" name="_1_11_Docentes">

    <div class="index-btn-wrapper  justify-content-end">
        <div class="index-btn" onclick="run(1, 2);">Siguiente</div>
    </div>
  </div>
</div>