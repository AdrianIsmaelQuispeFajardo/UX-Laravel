function buscar() {
    var busqueda = document.getElementById("txtbusqueda").value;
    var nombreCurso = "";
    nombreCurso = busqueda.toLowerCase();
    
    if (nombreCurso === "inteligencia artificial" || nombreCurso === "ia" 
        || nombreCurso === "experiencia de usuario" || nombreCurso === "ux"  ) {
        if(nombreCurso==="ia")
            nombreCurso="inteligencia artificial";
        if(nombreCurso==="ux")
            nombreCurso="experiencia de usuario";
        MostrarResultado(nombreCurso);
    } 
    
    else {
        var resultadoDiv = document.getElementById("resultado");
        resultadoDiv.innerHTML = "0 resultados";

        var detallesDiv = document.getElementById("detalles");
        detallesDiv.innerHTML = "No hay curso seleccionado";
    }
}


function MostrarResultado(curso){
    
    var resultadoDiv = document.getElementById("resultado");
    resultadoDiv.innerHTML = '<button id="cursoButton" class="btn" onclick="MostrarDetalles(\'' + curso + '\')">' + curso + '</button>';
    var detallesDiv = document.getElementById("detalles");

    detallesDiv.innerHTML = '<p style="font-size: 25px; margin-top: 15px;">No hay curso seleccionado</p>' + 
        '<p style="font-weight: bold; font-size: 20px;">Información del curso</p>' +
        '<p style="font-weight: bold; font-size": 20px>Sílabo</p>';
}


function handleKeyPress(event) {
    if (event.key === "Enter") {
        var txtbusqueda = document.getElementById("txtbusqueda");
        if (txtbusqueda === document.activeElement) {
            buscar();
        }
    }
}

function MostrarDetalles(curso) {
    var detallesDiv = document.getElementById("detalles");

    if (curso === "inteligencia artificial" || curso === "ia") {
        detallesDiv.innerHTML =
            '<p style="font-size: 25px; margin-top: 15px;">Inteligencia Artificial</p>' +
            '<p style="font-weight: bold; font-size: 20px;">Información del curso</p>' +
            '<p style="font-weight: bold; font-size: 15px">Facultad</p>' +
            '<p style="font-size: 12px">Facultad de Ingeniería de Software e Informática</p>' +
            '<p style="font-weight: bold; font-size: 15px">Escuela</p>' +
            '<p style="font-size: 12px">Ingeniería de Software</p>' +
            '<p style="font-weight: bold; font-size: 15px">Profesor</p>' +
            '<p style="font-size: 12px">GAMARRA MORENO, JUAN</p>' +
            '<p style="font-weight: bold; font-size: 20px">Sílabo</p>' +
            '<div class="d-flex justify-content-center" style="margin-bottom:20px">' +
            '<a class="btn btn-primary" href="' + downloadRoute + '" target="_blank" rel="noopener noreferrer" style="margin-right: 10px">Descargar</a>' +
            '<a class="btn btn-secondary" href="' + uploadRoute + '">Editar</a>' +
            '</div>';
    } 
    else if(curso === "experiencia de usuario" || curso === "ux"){
        detallesDiv.innerHTML =
            '<p style="font-size: 25px; margin-top: 15px;">Experiencia de Usuario</p>' +
            '<p style="font-weight: bold; font-size: 20px;">Información del curso</p>' +
            '<p style="font-weight: bold; font-size: 15px">Facultad</p>' +
            '<p style="font-size: 12px">Facultad de Ingeniería de Software e Informática</p>' +
            '<p style="font-weight: bold; font-size: 15px">Escuela</p>' +
            '<p style="font-size: 12px">Ingeniería de Software</p>' +
            '<p style="font-weight: bold; font-size: 15px">Profesor</p>' +
            '<p style="font-size: 12px">PETRLIK AZABACHE, IVAN</p>' +
            '<p style="font-weight: bold; font-size: 20px">Sílabo</p>' +
            '<div class="d-flex justify-content-center" style="margin-bottom:20px">' +
            '<a class="btn btn-primary" href="' + downloadRoute + '" target="_blank" rel="noopener noreferrer" style="margin-right: 10px">Descargar</a>' +
            '<a class="btn btn-secondary" href="' + uploadRoute + '">Editar</a>' +
            '</div>';

    } 
    else {
        detallesDiv.innerHTML = '<p style="font-size: 25px; margin-top: 15px;">No hay curso seleccionado</p>';
    }
}
