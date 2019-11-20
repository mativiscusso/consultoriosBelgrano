<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="css/belgrano.css" rel="stylesheet" type="text/css">

    <title>Consultorios Belgrano</title>
</head>

<body>
    <header>
        <nav id="barraMenu" class="navbar navbar-expand-lg navbar-light fixed-top">
            <a id="logo" class="navbar-brand" href="index.php"><img src="img/logoBC.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse text-body" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SERVICIOS
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="rutas/kine.php">KINESIOLOGIA</a>
                            <a class="dropdown-item" href="rutas/estetica.php">ESTETICA</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="rutas/espmedicas.php">ESPECIALIDADES MEDICAS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="rutas/faqs.php">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="rutas/obrasociales.php">OBRAS SOCIALES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="rutas/contacto.php">CONTACTO</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <body>


        <div id="carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div id="carouselportada" class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://picsum.photos/600/300" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://picsum.photos/600/300" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://picsum.photos/600/300" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div class="container py-5">
            <h1>JORNADAS DEL MES</h1>
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4 py-2">
                    <div id="jornadas" class="card text-center">
                        <img src="https://picsum.photos/200/200?random=3" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 py-2">
                    <div id="jornadas" class="card text-center">
                        <img src="https://picsum.photos/200/200?random=4" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 py-2">
                    <div id="jornadas" class="card text-center">
                        <img src="https://picsum.photos/200/200?random=35" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 py-2">
                    <div id="jornadas" class="card text-center">
                        <img src="https://picsum.photos/200/200?random=5" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 py-2">
                    <div id="jornadas" class="card text-center">
                        <img src="https://picsum.photos/200/200?random=5" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 py-2">
                    <div id="jornadas" class="card text-center">
                        <img src="https://picsum.photos/200/200?random=5" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div id="quienes" class="container-fluid py-5 px-5">
            <h1>¿QUIENES SOMOS?</h1>
            <div class="row">
                <div id="quienesleft" class="col-12 col-md-4">
                    <img src="https://picsum.photos/300/300?random=5" alt="">
                </div>
                <div id="quienesright" class="col-12 col-md-8 py-4">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam ea nam, libero sint numquam vel nesciunt nulla tenetur optio iure omnis quo ut temporibus consequatur atque aperiam suscipit? Autem laborum animi, voluptatibus incidunt quibusdam
                        vel cum? Corporis necessitatibus voluptatem debitis? Obcaecati nostrum repellendus modi quos, architecto provident laboriosam ad hic assumenda corrupti officia quae consequatur odio qui exercitationem nisi magni ullam ducimus! Ab facere
                        et delectus mollitia totam quod incidunt maiores eaque reiciendis aspernatur cum odit libero, temporibus culpa officiis corporis qui id similique cupiditate dicta aut dolores magnam. Ut ea vel vitae debitis repudiandae dolores quis
                        facere architecto rem.</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 py-5">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3348.4103870886033!2d-60.71751338525432!3d-32.940172878889605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95b6532c9d4f92e3%3A0x7bd635baee85c183!2sNuevos%20Consultorios%20Belgrano!5e0!3m2!1ses!2sar!4v1574174788651!5m2!1ses!2sar" width="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
                <div class="col-12 col-sm-6 py-5">
                    <span class="display-3">¿DONDE</span><br>
                    <span class="display-3">NOS</span><br>
                    <span class="display-3">ENCONTRAS?</span>
                </div>
            </div>
        </div>








        <?php
        require_once('rutas/footer.php');
        ?>