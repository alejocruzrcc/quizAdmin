<?php
//$pregunta = $_POST["pregunta"];
$myfile = fopen("prueba.html", "w");
$hreficons= htmlspecialchars( '<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">' );
$txt1 = '<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <!--Import Google Icon Font-->

      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="css/materialize.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<script type="text/javascript" src="js/jquery.min.js"></script>
  <h4>Quiz de ejemplo</h4>

      <div class="row">
      <div> Aqui van las preguntas formuladas en vista previa</div>
      </div>


  <div class="row">
    <div class="col s5 center">
      <button class="btn waves-effect waves-light center" onclick="Materialize.toast("Enviado", 4000)" type="submit" name="action">Enviar
      <i class="material-icons right">send</i>
      </button>
    </div>
  </div>
  <div class="row">
  <script type="text/javascript" src="js/admin.js"></script>
  <script type="text/javascript" src="js/preguntas.js"></script>

  <script type="text/javascript" src="js/materialize.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  </body>

  </html>
';
fwrite($myfile, $txt1);


fclose($myfile);
echo "01";
?>
