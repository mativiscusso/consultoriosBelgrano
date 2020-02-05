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
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="shortcut icon" href="img/logomini.png" type="image/x-icon">
    
    <title>Consultorio Belgrano</title>
</head>

<body>

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
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
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
        <div class="social">
            <ul id="redes">
                <li><a href="http://www.facebook.com/nuevosconsultoriosbelgrano" target="_blank" class="icon-facebook"></a></li>
                <li><a href="http://www.instagram.com/consultorios_belgrano" target="_blank" class="icon-instagram"></a></li>
                <li><a href="mailto:info@consultoriobelgrano.com" class="icon-mail2"></a></li>
            </ul>
        </div>
        <div id="portadas" class="row">
            <div class="col-12 col-sm-6">
                <div id="portada1" class="container-fluid wow animated bounceInLeft">
                    <h2 class="tituloIndex">KINESIOLOGIA</h2>
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div id="portada2" class="container-fluid wow animated bounceInRight">
                    <h2 class="tituloIndex">ESTETICA</h2>
                </div>
            </div>
        </div>


        <div class="container py-5">
            <h1>JORNADAS DEL MES</h1>
            <div class="row">
                <div data-aos="zoom-in" class="col-12 col-sm-6 col-md-4 py-2">
                    <div id="jornadas" class="card text-center">
                        <img src="https://picsum.photos/200/200?random=3" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="https://api.whatsapp.com/send?phone=5493416387507" target="_blank" class="btn btn-primary">Reservar turno</a>
                        </div>
                    </div>
                </div>
                <div data-aos="zoom-in" class="col-12 col-sm-6 col-md-4 py-2">
                    <div id="jornadas" class="card text-center">
                        <img src="https://picsum.photos/200/200?random=4" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="https://api.whatsapp.com/send?phone=5493416387507" target="_blank" class="btn btn-primary">Reservar turno</a>
                        </div>
                    </div>
                </div>
                <div data-aos="zoom-in" class="col-12 col-sm-6 col-md-4 py-2">
                    <div id="jornadas" class="card text-center">
                        <img src="https://picsum.photos/200/200?random=35" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="https://api.whatsapp.com/send?phone=5493416387507" target="_blank" class="btn btn-primary">Reservar turno</a>
                        </div>
                    </div>
                </div>
                <div data-aos="zoom-in" class="col-12 col-sm-6 col-md-4 py-2">
                    <div id="jornadas" class="card text-center">
                        <img src="https://picsum.photos/200/200?random=5" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="https://api.whatsapp.com/send?phone=5493416387507" target="_blank" class="btn btn-primary">Reservar turno</a>
                        </div>
                    </div>
                </div>
                <div data-aos="zoom-in" class="col-12 col-sm-6 col-md-4 py-2">
                    <div id="jornadas" class="card text-center">
                        <img src="https://picsum.photos/200/200?random=5" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="https://api.whatsapp.com/send?phone=5493416387507" target="_blank" class="btn btn-primary">Reservar turno</a>
                        </div>
                    </div>
                </div>
                <div data-aos="zoom-in" class="col-12 col-sm-6 col-md-4 py-2">
                    <div id="jornadas" class="card text-center">
                        <img src="https://picsum.photos/200/200?random=5" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="https://api.whatsapp.com/send?phone=5493416387507" target="_blank" class="btn btn-primary">Reservar turno</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <iframe id="virtual" src="https://www.spinattic.com/38028/nuevobelgrano?full" frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="container py-5">
                    <iframe id="mapa" data-aos="fade-in"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3348.4103870886033!2d-60.71751338525432!3d-32.940172878889605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95b6532c9d4f92e3%3A0x7bd635baee85c183!2sNuevos%20Consultorios%20Belgrano!5e0!3m2!1ses!2sar!4v1574174788651!5m2!1ses!2sar"
                        width="100%" frameborder="0" style="border:0;" allowfullscreen="">
                    </iframe>
        </div>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>

        <?php
        require_once('whatsapp.php');
        require_once('rutas/footer.php');
        ?>