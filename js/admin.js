$(document).ready(function(){
 //$('#tipo').attr('disabled', "disabled");
  var tipop;

  $('.modal-trigger').leanModal();

    $('#tipo').click(function(){
      // agregar mas opciones en respuesta unica

      $('.maspru').click(function(){
           $('.masp').show();
           $(this).attr('style', "color:grey");
          });
  });

  var pregunta2;

  var op1;
  var op2;
  var op3;
  var op4;


  $('#crea2').click(function(){
    var formulada2 = $('#textarea2').val();
    var opu1 = $('#opu1').val();
    var opu2 = $('#opu2').val();
    var opu3 = $('#opu3').val();
    var opu4 = $('#opu4').val();
    localStorage.setItem("PreguntaU", formulada2);
    localStorage.setItem("op1U", opu1);
    localStorage.setItem("op2U", opu2);
    localStorage.setItem("op3U", opu3);
    localStorage.setItem("op4U", opu4);
    $('#textarea2').val("");
    $('#opu1').val("");
    $('#opu2').val("");
    $('#opu3').val("");
    $('#opu4').val("");

    pregunta2 = localStorage.getItem("PreguntaU");
    op1= localStorage.getItem("op1U");
    op2= localStorage.getItem("op2U");
    op3= localStorage.getItem("op3U");
    op4= localStorage.getItem("op4U");


     $(".modelo").append("<p>"+pregunta2+"<p>");
     $(".modelo").append("<p>"+op1+"</p>");
     $(".modelo").append("<p>"+op2+"</p>");
     $(".modelo").append("<p>"+op3+"</p>");
     $(".modelo").append("<p>"+op4+"</p>");

    });


  $('#vistap').click(function(){

      var parrafo2 = $('<p/>',{
            'text' : pregunta2
          });
          var r1 = $('<input/>',{
            'type': "radio",
            'name': "group1",
            'id': "r1a"
          });
          var r2 = $('<input/>',{
            'type': "radio",
            'name': "group1",
            'id': "r1b"
          });
          var r3 = $('<input/>',{
            'type': "radio",
            'name': "group1",
            'id': "r1c"
          });
          var r4 = $('<input/>',{
            'type': "radio",
            'name': "group1",
            'id': "r1d"
          });
          var l1 =$('<label/>',{
            'for': 'r1a',
            html: op1
          });
          var l2 =$('<label/>',{
            'for': 'r1b',
            html: op2
          });
          var l3 =$('<label/>',{
            'for': 'r1c',
            html: op3
          });
          var l4 =$('<label/>',{
            'for': 'r1d',
            html: op4
          });
          var botonr2 = $('<a/>',{
            "class": "waves-effect waves-light btn right",
            html : "Guardar",
            "id": "guardar1"
          });


$.post('script.php', function(result) {
              if(result = "01"){

                  $("#prevcomponente").attr("src", "prueba.html");
              }

            });



  });


});
