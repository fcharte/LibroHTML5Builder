function WCAPageReady(event) {
  notificaUltimaVisita();

  recuperaEntradas();

  $('article').each(function() {
    var idEntrada = $(this).attr('id');
    $(this).find(".Fecha", function() {
      var partesFecha = $(this).text().split('/');
      var fecha = new Date(partesFecha[2], --partesFecha[1], partesFecha[0]);
      var hoy = new Date();
      var msdia = 24 * 60 * 60 * 1000;
      var diferencia = Math.floor((fecha - hoy) / msdia);
      $('#' + idEntrada + ' meter').val(diferencia);
    });
  });

  function notificaUltimaVisita() {
     var cookies = document.cookie.replace(/\s/g,'').split(';');
     var fecha = null;

     for(var cookie in cookies) {
       valor = cookies[cookie].split('=');
       if(valor[0] == 'UltimaVisita')
         fecha = valor[1];
     }

     $('header').append($('<p>').text( fecha ?
       'Tu última visita fue el ' + fecha :
       'Bienvenido nuevo usuario' ));

     document.cookie = 'UltimaVisita='+ (new Date()).toLocaleDateString() + '; expires=' + (new Date('2020-1-1')).toUTCString();
  } // notificaUltimaVisita

  function recuperaEntradas() {
    for(var clave in localStorage)
      if((/^Entrada/).test(clave))
        $('#Agenda').append($('<article>').attr('id',clave).html(localStorage[clave]));
  } // recuperaEntradas
}

function CrearClick(event) {
  $('.aviso').css('visibility', 'hidden');    // Ocultar todos los avisos

  if(validacionCorrecta()) {
    var nuevoId = getUltimoId() + 1;
    var boton = creaBoton(nuevoId);
    var fecha = creaFecha(nuevoId, $('#Fecha').val());
    var dias  = creaDias(nuevoId, calculaDias());
    var descripcion = creaDescripcion(nuevoId, $('#Descripcion').val());

    $('<article>').attr('id', 'Entrada' + nuevoId)
      .append(boton)
      .append(fecha)
      .append(dias)
      .append(descripcion)
      .appendTo($('#Agenda'));

    var idEntrada = 'Entrada' + nuevoId;
    localStorage[idEntrada] = $('#' + idEntrada).html();
  }

  function creaDescripcion(nuevoId, texto) {
    return $('<div>', {
       id : 'Descripcion' + nuevoId,
       class : 'Tarea',
       text : texto
    });
  } // creaDescripcion

  function creaDias(nuevoId, dias) {
    return $('<meter>', {
       id : 'Tiempo' + nuevoId,
       min : 1,
       max : 30,
       value : dias
    });
  } // creaDias

  function creaFecha(nuevoId, fecha) {
    return $('<div>', {
       id : 'Fecha' + nuevoId,
       class : 'Fecha',
       text : fecha
    });
  }     // creaFecha

  function creaBoton(nuevoId) {
    return $('<button>', {
         id : 'Elimina' + nuevoId,
         title : 'Eliminar',
         onclick : "eliminaEntrada('#Entrada" + nuevoId + "')",
         text : 'X'
    });
  } // creaBoton

  function getUltimoId() {
    if($('#Agenda article').length > 0) {
        var UltimoId = $('#Agenda article').last().attr('id');
        return parseInt(UltimoId.substring("Entrada".length));
    } else
        return 0;
  } // getUltimoId

  function calculaDias() {
     var fechaLim = $('#Fecha')[0].valueAsDate;
     var hoy = new Date();
     var msdia = 24 * 60 * 60 * 1000;
     return Math.floor((fechaLim - hoy) / msdia);
  } // calculaDias
}

function validacionCorrecta() {
  var valida = true;

  $('input:invalid').each(function() {
    var aviso = '#mensaje' + $(this).attr('id');
    $(aviso).css('visibility', 'visible');
    valida = false;
  });

  var fechaLim = $('#Fecha')[0].valueAsDate;
  var hoy = new Date();
  if(fechaLim < hoy) {
    $('#mensajeFecha').css('visibility', 'visible');
    valida = false;
  } else {
    var msdia = 24 * 60 * 60 * 1000;
    var diferencia = Math.floor((fechaLim - hoy) / msdia);
    $('#Duracion').val(diferencia);
    $('#Dias').html(diferencia + ' días');
  }

  return valida;
}

function eliminaEntrada(idEntrada) {
    $(idEntrada).remove();
    localStorage.removeItem(idEntrada.substring(1));
}