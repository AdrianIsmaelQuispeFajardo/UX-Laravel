function run(hideTab, showTab) {
    if (hideTab < showTab) { // If not press previous button
        // Validation if press next button
        var currentTab = 0;
        x = $('#tab-' + hideTab);
        y = $(x).find("input")
        for (i = 0; i < y.length; i++) {
            if (y[i].value == "") {
                $(y[i]).css("background", "#ffdddd");
                return false;
            }
        }
    }

    // Progress bar
    for (i = 1; i < showTab; i++) {
        $("#step-" + i).css("opacity", "1");
    }

    // Switch tab
    $("input").css("background", "#fff");

    // Set the active tab
    $("#tab-" + hideTab).removeClass("active");
    $("#tab-" + showTab).addClass("active");
}

jQuery(function ($) {
    // Cambié el nombre base a 'draggablePanelList-' para hacer la concatenación más sencilla
    var panelList = $('[id^="draggablePanelList-"]');

    panelList.sortable({
        handle: '.card-header',
        cancel: '[contenteditable="true"]',
        update: function () {
            // Renombra los elementos del panel en función de la pestaña activa
            $('#tab-4, #tab-5').on('click', function () {
                var tabId = $(this).attr('id');
                actualizarNombres(tabId);
            });
        }
    });

    // Agrega el atributo contenteditable dinámicamente cuando el usuario hace clic en el encabezado
    panelList.on('click', '.card-header', function () {
        $(this).attr('contenteditable', true);
    });

    // Deshabilita el atributo contenteditable cuando el usuario deja de editar
    panelList.on('blur', '[contenteditable="true"]', function () {
        $(this).removeAttr('contenteditable');
    });
});



function agregarCuadro(tabId) {
    var panelList = $('#draggablePanelList-' + tabId);

    var nuevoCuadro = document.createElement("div");
    nuevoCuadro.className = "card mb-3";

    nuevoCuadro.innerHTML = `
        <div class="card-header" contenteditable="true">
            Nuevo Logro
        </div>
        <div class="card-body" contenteditable="true">
            <p class="card-text">Agregar contenido del logro.</p>
        </div>
    `;

    panelList.append(nuevoCuadro);
    actualizarNombres(tabId);
}

function quitarCuadro(tabId) {
    var panelList = $('#draggablePanelList-' + tabId);

    var ultCuadro = panelList.children('.card').last();

    if (ultCuadro) {
        ultCuadro.remove();
        actualizarNombres(tabId);
    }
}

function actualizarNombres(tabId) {
    var panelList = $('#draggablePanelList-' + tabId);
    var $cards = $('.card', panelList);
    var $prefix = (tabId === 4) ? "CG" : "CE";

    $cards.each(function (index, elem) {
        var $listItem = $(elem),
            newIndex = $listItem.index() + 1;

        $listItem.attr('name', $prefix  + newIndex);
    });
}

function enableEdit(element) {
    $(element).attr('contenteditable', 'true').focus();
}

function obtenerDatosTabla() {
    var datos = [];

    $('#tab-3 tbody tr').each(function (index, row) {
        var sesion = $(this).find('td:eq(0)').text();
        var contenido = $(this).find('td:eq(1)').text();
        var competencias = $(this).find('td:eq(2)').text();
        var actividades = $(this).find('td:eq(3)').text();
        var recursos = $(this).find('td:eq(4)').text();

        var fila = {
            sesion: sesion,
            contenido: contenido,
            competencias: competencias,
            actividades: actividades,
            recursos: recursos
        };

        datos.push(fila);
    });

    console.log(datos);
    // Aquí puedes hacer lo que quieras con los datos, como enviarlos a un servidor, mostrarlos en la consola, etc.
}