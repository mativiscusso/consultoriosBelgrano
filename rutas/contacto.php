<?php
require_once('header.php');

    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "test@hostinger-tutorials.com";
    $to = "test@gmail.com";
    $subject = "Checking PHP mail";
    $message = "PHP mail works just fine";
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo  '<script language="javascript">
                    window.onload = function() {
                        swal("Mensaje Enviado", "success");;
                    }
                </script>';
?>

<div class="container my-5">
    <h1>Contactenos</h1>
    <div class="row">
        <div class="col-12 col-md-6 animated fadeIn">
            <form method="POST" action="contacto.php">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nombre </label>
                    <input type="text" name="nombre" class="form-control" id="exampleFormControlInput1" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Mensaje</label>
                    <textarea class="form-control" name="mensaje" id="exampleFormControlTextarea1" rows="3" required></textarea>
                </div>
                <button class="btn btn-primary" type="submit">Enviar</button>
            </form>
        </div>
        <div class="col-12 col-md-6 animated fadeIn my-5">
            <img src="../img/email.png" class="img-fluid" alt="Responsive image">
        </div>
    </div>
</div>


<?php
require_once('footer.php');
?>