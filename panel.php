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
$promosDepi = traerPromosDepi($db);

$promosCrio = traerPromosCrio($db);
$promosTesla = traerPromosTesla($db);
$promosVenus = traerPromosVenus($db);
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
    if (ingreso === 'belgrano2020') {} else {
        alert('Contraseña equivocada')
        window.location = "http://www.consultoriosBelgrano/index2"
    }
</script>

<body>

    <?php
if($_POST) { echo "<script> swal('Actualizacion exitosa', 'success')</script>";}
?>


    <header class="sticky-top">
        <nav id="barraMenu" class="navbar navbar-expand-lg navbar-light p-2 mb-3 bg-white rounded">
            <a id="logo" class="navbar-brand animated pulse delay-1s" href="index2"><img class="logo"
                    src="img/logoBC.png" alt=""></a>
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
            <?php for ($i=0; $i < count($jornadas) ; $i++) :?>
            <label class="font-weight-bold" for="">JORNADA <?=$i+1?></label>
            <input type="text" name="" value="<?=$jornadas[$i]['descripcion']?>">
            <input type="text" name="jornadas[]" value="<?=$jornadas[$i]['fecha']?>">
            <?php endfor; ?>
            <br>
            <br>
            <h4 class="font-weight-bold">PROMOS</h4>
            <?php for ($i=0; $i < count($promosDepi) ; $i++) :?>
            <span class="text-uppercase font-weight-bold"><?=$promosDepi[$i]['categoria']?></span>
            ID = <?=$promosDepi[$i]['id']?>
            <input type="text" name="" value="<?=$promosDepi[$i]['descripcion']?>">
            <input type="text" name="jornadas[]" value="<?=$promosDepi[$i]['valor']?>">
            <?php endfor; ?>
            <?php for ($i=0; $i < count($promosCrio) ; $i++) :?>
            <span class="text-uppercase font-weight-bold"><?=$promosCrio[$i]['categoria']?></span>
            ID = <?=$promosCrio[$i]['id']?>
            <input type="text" name="" value="<?=$promosCrio[$i]['descripcion']?>">
            <input type="text" name="jornadas[]" value="<?=$promosCrio[$i]['valor']?>">
            <?php endfor; ?>
            <?php for ($i=0; $i < count($promosTesla) ; $i++) :?>
            <span class="text-uppercase font-weight-bold"><?=$promosTesla[$i]['categoria']?></span>
            ID = <?=$promosTesla[$i]['id']?>
            <input type="text" name="" value="<?=$promosTesla[$i]['descripcion']?>">
            <input type="text" name="jornadas[]" value="<?=$promosTesla[$i]['valor']?>">
            <?php endfor; ?>
            <?php for ($i=0; $i < count($promosVenus) ; $i++) :?>
            <span class="text-uppercase font-weight-bold"><?=$promosVenus[$i]['categoria']?></span>
            ID = <?=$promosVenus[$i]['id']?>
            <input type="text" name="" value="<?=$promosVenus[$i]['descripcion']?>">
            <input type="text" name="jornadas[]" value="<?=$promosVenus[$i]['valor']?>">
            <?php endfor; ?>

            <input type="submit" class="btn btn-success" value="MODIFICAR PROMOS">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                CARGAR PROMOS
            </button>
            <br>
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal2">
                BORRAR PROMOS
            </button>
        </form>


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Agregar Promociones</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="agregar.php" method="post">
                            <label class="w-25" for="">Descripcion</label>
                            <input type="text" name="descripcion"><br>
                            <label class="w-25" for="">Precio</label>
                            <input type="text" name="valor" id="" placeholder="$"><br>
                            <select class="custom-select" name="categoria" id="inputGroupSelect01">
                                <option value="depilacion">Depilacion</option>
                                <option value="criolipolisis">Criolipolisis</option>
                                <option value="teslagen">Teslagen</option>
                                <option value="venus">Venus</option>
                            </select>
                            <input type="submit" value="Agregar" class="btn btn-success">
                        </form>
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Borrar Promociones</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="borrar.php" method="post">
                            <label class="w-25" for="">ID</label>
                            <input type="text" name="id">
                            <input type="submit" value="Borrar" class="btn btn-danger">
                        </form>
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>

</html>