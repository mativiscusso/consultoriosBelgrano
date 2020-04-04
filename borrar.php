<?php
require_once('db/db.php');
$db = obtenerBaseDeDatos();
borrarPromos($db,$_POST['id']);
header('Location: http://localhost/consultoriosBelgrano/panel.php');