<div class="tab" id="tab-5">
  <div class="container containerRegister1">
      <h2 class="mb-4">Competencias Especificas</h2>
      <ul id="draggablePanelList-5" class="list-unstyled">
          <div class="card mb-3" name = "CE1">
              <div class="card-header" contenteditable="true">
                  Nueva Competencia Especifica
              </div>
              <div class="card-body">
                  <p class="card-text" contenteditable="true">
                      Descripción
                  </p>
              </div>
          </div>


      </ul>
      <div class="text-center">
          <button class="index-btn" onclick="agregarCuadro(5)">+</button>
          <button class="index-btn" onclick="quitarCuadro(5)">-</button>
      </div>

      <div class="index-btn-wrapper justify-content-end">
          <div class="index-btn bg-danger" onclick="run(5, 4);">Anterior</div>
          <button class = "index-btn" type="submit" name="submit" style = "background: blue;">Registrar</button>
      </div>
  </div>
</div>

</form>