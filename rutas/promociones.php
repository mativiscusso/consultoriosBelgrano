<?php
require_once('header.php');
require_once('../db/db.php');
$db = obtenerBaseDeDatos();
$promosDepi = traerPromosDepi($db);
$promosCrio = traerPromosCrio($db);
$promosTesla = traerPromosTesla($db);
$promosVenus = traerPromosVenus($db);

?>

<div class="container my-5">
    <div class="row my-5">
        <div id="promoMobile" class="container">
            <div class="container-fluid animated rollIn">
                <img src="../img/promos.jpg" alt="" class="img-fluid">
            </div>
        </div>
        <div id="promoEscritorio" class="container w-50">
            <div class="container-fluid animated bounceInLeft">
                <img src="../img/promos2.png" alt="" class="img-fluid">
            </div>
        </div>

        <div class="container animated zoomIn w-75">
            <table class="table">
                <tbody>
                    <tr>DEPILACION DEFINITIVA</tr>
                    <?php for ($i=0; $i < count($promosDepi) ; $i++) :?> 
                        <tr>
                        <td class="align-middle"><?=$promosDepi[$i]['descripcion']?></td>
                        <td class="align-middle">$<?=$promosDepi[$i]['valor']?></td>
                        <td>
                            <a href="https://api.whatsapp.com/send?phone=5493416387507" target="_blank">
                                <button type="button" class="btn btn-info">QUIERO LA PROMO</button>
                            </a>
                        </td>
                    </tr>
                    <?php endfor?>
                </tbody>
            </table>

            <table class="table">
                <tbody>
                    <tr>CRIOLIPOLISIS</tr>
                    <?php for ($i=0; $i < count($promosCrio) ; $i++) :?> 
                    <tr>
                        <td class="align-middle"><?=$promosCrio[$i]['descripcion']?></td>
                        <td class="align-middle">$<?=$promosCrio[$i]['valor']?></td>
                        <td>
                            <a href="https://api.whatsapp.com/send?phone=5493416387507" target="_blank">
                                <button type="button" class="btn btn-info">QUIERO LA PROMO</button>
                            </a>
                        </td>
                    </tr>
                    <?php endfor?>
                </tbody>
            </table>

            <table class="table">
                <tbody>
                    <tr>TESLAGEN</tr>
                    <?php for ($i=0; $i < count($promosTesla) ; $i++) :?> 
                    <tr>
                        <td class="align-middle"><?=$promosTesla[$i]['descripcion']?></td>
                        <td class="align-middle">$<?=$promosTesla[$i]['valor']?></td>
                        <td>
                            <a href="https://api.whatsapp.com/send?phone=5493416387507" target="_blank">
                                <button type="button" class="btn btn-info">QUIERO LA PROMO</button>
                            </a>
                        </td>
                    </tr>
                    <?php endfor?>
                </tbody>
            </table>

            <table class="table">
                <tbody>
                    <tr>VENUS LEGACY</tr>
                    <?php for ($i=0; $i < count($promosVenus) ; $i++) :?> 
                    <tr>
                        <td class="align-middle"><?=$promosVenus[$i]['descripcion']?></td>
                        <td class="align-middle">$<?=$promosVenus[$i]['valor']?></td>
                        <td>
                            <a href="https://api.whatsapp.com/send?phone=5493416387507" target="_blank">
                                <button type="button" class="btn btn-info">QUIERO LA PROMO</button>
                            </a>
                        </td>
                    </tr>
                    <?php endfor?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div id="whatsapp" data-aos="fade-left">
    <a href="https://api.whatsapp.com/send?phone=5493416387507" target="_blank">
    <img src="../img/whatsapp-logo-1.png" alt="">
    </a>
</div>



<?php
require_once('footer.php');
?>