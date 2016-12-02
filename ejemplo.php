<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <link rel="stylesheet" href="css/materialize.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
<script type="text/javascript" src="js/jquery.min.js"></script>
  <h4>Quiz de ejemplo</h4>

      <div class="row">
      <div class="col s5">
      <p>2. Esta es una pregunta de selección multiple con única respuesta</p>
      <form action="#">
        <p>
      <input name="group1" type="radio" id="r1a" />
      <label for="r1a">Opcion 1</label>
      </p>
      <p>
      <input name="group1" type="radio" id="r1b" />
      <label for="r1b">Opcion 2</label>
      </p>
      <p>
      <input name="group1" type="radio" id="r1c"  />
      <label for="r1c">Opcion 3</label>
      </p>
    </form>
      <a class="waves-effect waves-light btn right" id="guardar1"><i class="material-icons left">done</i>guardar</a>
    </div>
    </div>


    <div class="row">
      <div class="col s5 center">
        <button class="btn waves-effect waves-light center" onclick="Materialize.toast('Enviado', 4000)" type="submit" name="action">Enviar
        <i class="material-icons right">send</i>
        </button>
      </div>
    </div>

    <div class="row">

<script type="text/javascript" src="js/preguntas.js"></script>

<script type="text/javascript" src="js/materialize.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>
