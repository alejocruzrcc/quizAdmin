<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

        <link rel="stylesheet" href="css/materialize.css">
        <link rel="stylesheet" href="css/admin.css">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>

  <body>
      <script type="text/javascript" src="js/jquery.min.js"></script>
    <div class="row">
      <div class="col s5">
        <h4>Creación de pregunta</h4>

    <label for="p2">Selección multiple con única respuesta</label>

    <br>

    <!-- Modal Trigger -->
 <a id="tipo" class="waves-effect waves-light btn modal-trigger" href="#modal1">Crear Pregunta</a>

 <!-- Modal Structure -->
 <div id="modal1" class="modal">
   <div class="modal-content">
     <h4>Formulación de pregunta</h4>
     <div class="row">
      <form class="col s12">
        <div class="row">
          <div class="input-field col s12">
            <textarea id="textarea2" class="materialize-textarea"></textarea>
            <label for="textarea2">Ingrese aquí la pregunta</label>
          </div>
        </div>
      </form>
    </div>
    <div class="row">
      <div class="input-field col s6">
            <input id="opu1" type="text" class="validate">
            <label for="opu1">Opcion 1</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
            <input id="opu2" type="text" class="validate">
            <label for="opu2">Opcion 2</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
            <input id="opu3" type="text" class="validate">
            <label for="opu3">Opcion 3</label>
      </div>
    </div>
    <div id="plus4a" style="display:none" class="row masp">
      <div class="input-field col s6">
            <input id="opu4" type="text" class="validate">
            <label for="opu4">Opcion 4</label>
      </div>
    </div>
    <div class="row">
    <div class="col s6">
    <a id="masopc1" class="right maspru">+ Agregar más opciones</a>
    </div>
    </div>
   <div class="modal-footer">
     <a id="crea2" href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Crear</a>
   </div>

</div>
</div>

<div class="row">
 <h4>Preguntas formuladas:</h4>
 <div class="col s6">
   <div class="modelo">

   </div>
    <a id="vistap" class="waves-effect waves-light btn"> Vista Previa</a>
 </div>
</div>
</div>

<div class="col s7">
  <div id="vista">
    <iframe id="prevcomponente" src="" height="800" width="500" frameborder="1"></iframe>
  </div>

</div>
</div>
    <script type="text/javascript" src="js/admin.js"></script>
    <script type="text/javascript" src="js/materialize.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
  </body>
</html>
