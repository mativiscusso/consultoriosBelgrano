<?php
function obtenerBaseDeDatos()
{
$nombre_base_de_datos = "belgrano";
    $usuario = "root";
    $contraseña = "";
    try {
        $base_de_datos = new PDO('mysql:host=localhost;dbname=' . $nombre_base_de_datos, $usuario, $contraseña);
        $base_de_datos->query("set names utf8;");
        return $base_de_datos;
    } catch (Exception $e) {
        # Nota: ¡en la vida real no imprimas errores!
        echo "Error obteniendo BD: " . $e->getMessage();
        return null;
    }
}
function traerJornadas(PDO $db)
{
    $consulta = $db->prepare("SELECT descripcion, fecha FROM jornadas");
    $consulta->execute();
    $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
    return $resultado;
 
}
function traerPromos(PDO $db)
{
    $consulta = $db->prepare("SELECT categoria, descripcion, valor FROM promociones");
    $consulta->execute();
    $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
    return $resultado;

}

function guardarJornadas(PDO $db, $fecha, $i)
{
    $consulta = $db->prepare("UPDATE jornadas SET fecha = $fecha WHERE jornadas.id = $i");
    return $consulta->execute();
}
function guardarPromos(PDO $db, $valor, $i)
{
    $consulta = $db->prepare("UPDATE promociones SET valor = $valor WHERE promociones.id = $i");
    $consulta->execute();
}
?>