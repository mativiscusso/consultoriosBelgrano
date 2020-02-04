<?php
require_once('header.php');
if(isset($_POST["nombre"]) && isset($_POST["email"]) && isset($_POST["mensaje"]) ){
    $to = "info@consultoriobelgrano.com";
    $subject = "Mensaje Enviado";
    $contenido .= "Nombre: ".$_POST["nombre"]."\n";
    $contenido .= "Email: ".$_POST["email"]."\n\n";
    $contenido .= "Mensaje: ".$_POST["mensaje"]."\n\n";
    $header = "From: info@consultoriobelgrano.com\nReply-To:".$_POST["email"]."\n";
    $header .= "Mime-Version: 1.0\n";
    $header .= "Content-Type: text/plain";
    if(mail($to, $subject, $contenido ,$header)){
        echo  '<script language="javascript">
                    window.onload = function() {
                        swal("Mensaje Enviado", "success");
                    }
                </script>';
    }
    }               
?>

<div class="container my-5">
    <h1>Contactenos</h1>
    <div class="row">
        <div class="col-12 col-md-6 animated fadeIn">
            <form method="POST" action="contacto">
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