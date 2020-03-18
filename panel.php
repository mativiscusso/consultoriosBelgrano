
<?php
require_once('db/db.php');
$db = obtenerBaseDeDatos();
if ($_POST) {
    $jornadasAGuardar = $_POST['jornadas'];
    $promosAGuardar = $_POST['promos'];

    $conta = 1;
      for ($i=0; $i < count($jornadasAGuardar) ; $i++) { 
          $conta ++;
          guardarJornadas($db, $jornadasAGuardar[$i], $conta);
      }

    $cont = 1;
      for ($i=0; $i < count($promosAGuardar) ; $i++) { 
          $cont ++;
          guardarPromos($db, $promosAGuardar[$i], $cont);
      }
}
$promos = traerPromos($db);
$jornadas = traerJornadas($db);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <link href="css/belgrano.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="shortcut icon" href="img/logomini.png" type="image/x-icon">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    
    
    <title>Consultorio Belgrano</title>
</head>

<script>
let ingreso = prompt('INGRESE SU CONTRASEÑA')
if(ingreso === 'belgrano2020') {
} else {
    alert('Contraseña equivocada')
    window.location="http://www.consultoriosBelgrano/index2"
}
</script>

<body>

<?php
if($_POST) { echo "<script> swal('Actualizacion exitosa', 'success')</script>";}
?>


    <header class="sticky-top">
        <nav id="barraMenu" class="navbar navbar-expand-lg navbar-light p-2 mb-3 bg-white rounded">
            <a id="logo" class="navbar-brand animated pulse delay-1s" href="index2"><img class="logo" src="img/logoBC.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse text-body" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SERVICIOS
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="rutas/kine">KINESIOLOGIA</a>
                            <a class="dropdown-item" href="rutas/estetica">ESTETICA</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="rutas/espmedicas">ESPECIALIDADES MEDICAS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="rutas/promociones">PROMOCIONES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="rutas/faqs">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="rutas/obrasociales">OBRAS SOCIALES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="rutas/contacto">CONTACTO</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    

    <h2 class="text-center my-3">PANEL DE ADMINISTRACION</h2>
<div id="panel" class="container form-group">
   <form action="panel.php" method="post" style="display:flex; flex-direction:column">
      <label class="font-weight-bold" for="">JORNADA 1</label>
      <input type="text" name=""value="<?=$jornadas[0]['descripcion']?>">
      <input type="text" name="jornadas[]"value="<?=$jornadas[0]['fecha']?>">
      <label class="font-weight-bold" for="">JORNADA 2</label>
      <input type="text" name=""value="<?=$jornadas[1]['descripcion']?>">
      <input type="text" name="jornadas[]"value="<?=$jornadas[1]['fecha']?>">
      <label class="font-weight-bold" for="">JORNADA 3</label>
      <input type="text" name=""value="<?=$jornadas[2]['descripcion']?>">
      <input type="text" name="jornadas[]"value="<?=$jornadas[2]['fecha']?>">
      <label class="font-weight-bold" for="">JORNADA 4</label>
      <input type="text" name=""value="<?=$jornadas[3]['descripcion']?>">
      <input type="text" name="jornadas[]"value="<?=$jornadas[3]['fecha']?>">
      <label class="font-weight-bold" for="">JORNADA 5</label>
      <input type="text" name=""value="<?=$jornadas[4]['descripcion']?>">
      <input type="text" name="jornadas[]"value="<?=$jornadas[4]['fecha']?>">
      <label class="font-weight-bold" for="">JORNADA 6</label>
      <input type="text" name=""value="<?=$jornadas[5]['descripcion']?>">
      <input type="text" name="jornadas[]"value="<?=$jornadas[5]['fecha']?>">
      <label class="font-weight-bold" for="">PROMOS DEPILACION</label>
      <input type="text" name=""value="<?=$promos[0]['descripcion']?>">
      <input type="text" name="promos[]"value="<?=$promos[0]['valor']?>">
      <input type="text" name=""value="<?=$promos[1]['descripcion']?>">
      <input type="text" name="promos[]"value="<?=$promos[1]['valor']?>">
      <input type="text" name=""value="<?=$promos[2]['descripcion']?>">
      <input type="text" name="promos[]"value="<?=$promos[2]['valor']?>">
      <input type="text" name=""value="<?=$promos[3]['descripcion']?>">
      <input type="text" name="promos[]"value="<?=$promos[3]['valor']?>">
      <input type="text" name=""value="<?=$promos[4]['descripcion']?>">
      <input type="text" name="promos[]"value="<?=$promos[4]['valor']?>">
      <input type="text" name=""value="<?=$promos[5]['descripcion']?>">
      <input type="text" name="promos[]"value="<?=$promos[5]['valor']?>">
      <input type="text" name=""value="<?=$promos[6]['descripcion']?>">
      <input type="text" name="promos[]"value="<?=$promos[6]['valor']?>">
      <input type="text" name=""value="<?=$promos[7]['descripcion']?>">
      <input type="text" name="promos[]"value="<?=$promos[7]['valor']?>">
      <input type="text" name=""value="<?=$promos[8]['descripcion']?>">
      <input type="text" name="promos[]"value="<?=$promos[8]['valor']?>">
      <label class="font-weight-bold" for="">PROMOS CRIOLIPOLISIS</label>
      <input type="text" name=""value="<?=$promos[9]['descripcion']?>">
      <input type="text" name="promos[]"value="<?=$promos[9]['valor']?>">
      <input type="text" name=""value="<?=$promos[10]['descripcion']?>">
      <input type="text" name="promos[]"value="<?=$promos[10]['valor']?>">
      <label class="font-weight-bold" for="">PROMOS TESLAGEN</label>
      <input type="text" name=""value="<?=$promos[11]['descripcion']?>">
      <input type="text" name="promos[]"value="<?=$promos[11]['valor']?>">
      <label class="font-weight-bold" for="">PROMOS VENUS</label>
      <input type="text" name=""value="<?=$promos[12]['descripcion']?>">
      <input type="text" name="promos[]"value="<?=$promos[12]['valor']?>">

      <input type="submit" class="btn btn-success">
   </form>


</div>

</body>
</html>