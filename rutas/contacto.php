<?php
require_once('header.php');
?>
<div id="contacto" class="container">
    <h1>Contactenos</h1>
<form>
    <div class="form-group">
        <label for="exampleFormControlInput1">Nombre </label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Email</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Asunto</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Mensaje</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <button class="btn btn-primary" type="submit">Submit form</button>
</div>
</form>


<?php
require_once('footer.php');
?>