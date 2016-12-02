$(document).ready(function(){

  $('#nuevodiv').get('prueba.html');

  $('#guardar0').click(function(){

    $('#t1').attr('disabled', "disabled");

    $('#guardar0').attr('disabled', "disabled");
    $('#guardar0').html("Guardado");
  });

  $('#guardar1').click(function(){

    $('#r1a').attr('disabled', "disabled");
    $('#r1b').attr('disabled', "disabled");
    $('#r1c').attr('disabled', "disabled");

    $('#guardar1').attr('disabled', "disabled");
    $('#guardar1').html("Guardado");
  });

  $('#guardar2').click(function(){

    $('#r2a').attr('disabled', "disabled");
    $('#r2b').attr('disabled', "disabled");
    $('#r2c').attr('disabled', "disabled");
    $('#t2').attr('disabled', "disabled");

    $('#guardar2').attr('disabled', "disabled");
    $('#guardar2').html("Guardado");
  });

  $('#guardar3').click(function(){

    $('#c1a').attr('disabled', "disabled");
    $('#c1b').attr('disabled', "disabled");
    $('#c1c').attr('disabled', "disabled");
    $('#c1d').attr('disabled', "disabled");

    $('#guardar3').attr('disabled', "disabled");
    $('#guardar3').html("Guardado");
  });
});
