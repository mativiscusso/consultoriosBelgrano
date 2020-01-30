<?php
require_once('header.php');
?>

<div class="container my-5">
    <h1>Contactenos</h1>
    <div class="row">
        <div class="col-12 col-md-6 animated fadeIn">
            <form>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nombre </label>
                    <input type="email" class="form-control" id="exampleFormControlInput1"
                        placeholder="name@example.com">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Email</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1"
                        placeholder="name@example.com">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Asunto</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1"
                        placeholder="name@example.com">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Mensaje</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <button class="btn btn-primary" type="submit">Submit form</button>
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