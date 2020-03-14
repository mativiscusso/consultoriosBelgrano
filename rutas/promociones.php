<?php
require_once('header.php');
require_once('../db/db.php');
$db = obtenerBaseDeDatos();
$promos = traerPromos($db);

?>

<div class="container my-5">
    <h1>PROMOCIONES</h1>
    <div class="row my-5">
        <div class="col-12">
            <div class="container-fluid animated rollIn">
                <img src="../img/promos.jpg" alt="" class="img-fluid">
            </div>
        </div>

        <div class="container animated zoomIn w-75">
            <table class="table">
                <tbody>
                    <tr>DEPILACION DEFINITIVA</tr>
                    <tr>
                        <td class="align-middle"><?=$promos[0]['descripcion']?></td>
                        <td class="align-middle">$<?=$promos[0]['valor']?></td>
                        <td>
                            <a href="https://api.whatsapp.com/send?phone=5493416387507" target="_blank">
                                <button type="button" class="btn btn-info">QUIERO LA PROMO</button>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle"><?=$promos[1]['descripcion']?></td>
                        <td class="align-middle">$<?=$promos[1]['valor']?></td>
                        <td>
                            <a href="https://api.whatsapp.com/send?phone=5493416387507" target="_blank">
                                <button type="button" class="btn btn-info">QUIERO LA PROMO</button>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle"><?=$promos[2]['descripcion']?></td>
                        <td class="align-middle">$<?=$promos[2]['valor']?></td>
                        <td>
                            <a href="https://api.whatsapp.com/send?phone=5493416387507" target="_blank">
                                <button type="button" class="btn btn-info">QUIERO LA PROMO</button>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle"><?=$promos[3]['descripcion']?></td>
                        <td class="align-middle">$<?=$promos[3]['valor']?></td>
                        <td>
                            <a href="https://api.whatsapp.com/send?phone=5493416387507" target="_blank">
                                <button type="button" class="btn btn-info">QUIERO LA PROMO</button>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle"><?=$promos[4]['descripcion']?></td>
                        <td class="align-middle">$<?=$promos[4]['valor']?></td>
                        <td>
                            <a href="https://api.whatsapp.com/send?phone=5493416387507" target="_blank">
                                <button type="button" class="btn btn-info">QUIERO LA PROMO</button>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle"><?=$promos[5]['descripcion']?></td>
                        <td class="align-middle">$<?=$promos[5]['valor']?></td>
                        <td>
                            <a href="https://api.whatsapp.com/send?phone=5493416387507" target="_blank">
                                <button type="button" class="btn btn-info">QUIERO LA PROMO</button>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle"><?=$promos[6]['descripcion']?></td>
                        <td class="align-middle">$<?=$promos[6]['valor']?></td>
                        <td>
                            <a href="https://api.whatsapp.com/send?phone=5493416387507" target="_blank">
                                <button type="button" class="btn btn-info">QUIERO LA PROMO</button>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle"><?=$promos[7]['descripcion']?></td>
                        <td class="align-middle">$<?=$promos[7]['valor']?></td>
                        <td>
                            <a href="https://api.whatsapp.com/send?phone=5493416387507" target="_blank">
                                <button type="button" class="btn btn-info">QUIERO LA PROMO</button>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle"><?=$promos[8]['descripcion']?></td>
                        <td class="align-middle">$<?=$promos[8]['valor']?></td>
                        <td>
                            <a href="https://api.whatsapp.com/send?phone=5493416387507" target="_blank">
                                <button type="button" class="btn btn-info">QUIERO LA PROMO</button>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>

            <table class="table">
                <tbody>
                    <tr>CRIOLIPOLISIS</tr>
                    <tr>
                        <td class="align-middle"><?=$promos[9]['descripcion']?></td>
                        <td class="align-middle">$<?=$promos[9]['valor']?></td>
                        <td>
                            <a href="https://api.whatsapp.com/send?phone=5493416387507" target="_blank">
                                <button type="button" class="btn btn-info">QUIERO LA PROMO</button>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle"><?=$promos[10]['descripcion']?></td>
                        <td class="align-middle">$<?=$promos[10]['valor']?></td>
                        <td>
                            <a href="https://api.whatsapp.com/send?phone=5493416387507" target="_blank">
                                <button type="button" class="btn btn-info">QUIERO LA PROMO</button>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>

            <table class="table">
                <tbody>
                    <tr>TESLAGEN</tr>
                    <tr>
                        <td class="align-middle"><?=$promos[11]['descripcion']?></td>
                        <td class="align-middle">$<?=$promos[11]['valor']?></td>
                        <td>
                            <a href="https://api.whatsapp.com/send?phone=5493416387507" target="_blank">
                                <button type="button" class="btn btn-info">QUIERO LA PROMO</button>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>

            <table class="table">
                <tbody>
                    <tr>VENUS LEGACY</tr>
                    <tr>
                        <td class="align-middle"><?=$promos[12]['descripcion']?></td>
                        <td class="align-middle">$<?=$promos[12]['valor']?></td>
                        <td>
                            <a href="https://api.whatsapp.com/send?phone=5493416387507" target="_blank">
                                <button type="button" class="btn btn-info">QUIERO LA PROMO</button>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>





<?php
require_once('footer.php');
?>