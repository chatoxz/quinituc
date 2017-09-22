<?php
/* @var $this yii\web\View */

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: *");

$this->title = Yii::t('app', Yii::$app->name);
?>
<div class="row bottom_margin_20">
    <div class="contenedor_cabecera_roja_telefono col-md-12">
        <h4><span class="glyphicon glyphicon-earphone" ></span>0381 4282724</h4>
    </div>
</div>
<br>
<div class="row bottom_margin_20">
    <div class="contenedor_logo_quinituc_titulo col-md-12   ">
        <a href="<?= 'http://127.0.13.1/' ?>"><img src="../img/logo.quinituc.jpg" width="164" height="auto"></a>
        <h3>"EL JUEGO LEGAL AYUDA A LA COMUNIDAD"</h3>
        <img src="../img/bolsa.fw.png" width="168" height="121">
    </div>
</div>
<div class="row bottom_margin_20">
    <div class="col-md-12">
        <a href="<?= $banners[0]->link; ?>"><img src="../img/banners/<?= $banners[0]->foto; ?>" width="100%" height="auto"></a>
    </div>
</div>
<div class="row ">
    <!-- COLUMNA IZQ -->
    <div class="col-md-8">
        <div style="border: black solid 1px" class="bottom_margin_40">
            <h3 class="titulo_ultimos_resultados"> ÚLTIMOS RESULTADOS DE LA QUINIELA</h3>
            <div class="contenedor_numeros_tombola bottom_margin_20">
                <div class="numero_tombola" style="color: red">1º <?php echo " ".$numerosUltimaTomb->numero_1 ; ?> </div>
                <div class="numero_tombola">2º <?php echo " ".$numerosUltimaTomb->numero_2 ; ?> </div>
                <div class="numero_tombola">3º <?php echo " ".$numerosUltimaTomb->numero_3 ; ?> </div>
                <div class="numero_tombola">4º <?php echo " ".$numerosUltimaTomb->numero_4 ; ?> </div>
                <div class="numero_tombola">5º <?php echo " ".$numerosUltimaTomb->numero_5 ; ?> </div>
                <div class="numero_tombola">6º <?php echo " ".$numerosUltimaTomb->numero_6 ; ?> </div>
                <div class="numero_tombola">7º <?php echo " ".$numerosUltimaTomb->numero_7 ; ?> </div>
                <div class="numero_tombola">8º <?php echo " ".$numerosUltimaTomb->numero_8 ; ?> </div>
                <div class="numero_tombola">9º <?php echo " ".$numerosUltimaTomb->numero_9 ; ?> </div>
                <div class="numero_tombola">10º <?php echo " ".$numerosUltimaTomb->numero_10 ; ?> </div>
                <div class="numero_tombola">11º <?php echo " ".$numerosUltimaTomb->numero_11 ; ?> </div>
                <div class="numero_tombola">12º <?php echo " ".$numerosUltimaTomb->numero_12 ; ?> </div>
                <div class="numero_tombola">13º <?php echo " ".$numerosUltimaTomb->numero_13 ; ?> </div>
                <div class="numero_tombola">14º <?php echo " ".$numerosUltimaTomb->numero_14 ; ?> </div>
                <div class="numero_tombola">15º <?php echo " ".$numerosUltimaTomb->numero_15 ; ?> </div>
                <div class="numero_tombola">16º <?php echo " ".$numerosUltimaTomb->numero_16 ; ?> </div>
                <div class="numero_tombola">17º <?php echo " ".$numerosUltimaTomb->numero_17 ; ?> </div>
                <div class="numero_tombola">18º <?php echo " ".$numerosUltimaTomb->numero_18 ; ?> </div>
                <div class="numero_tombola">19º <?php echo " ".$numerosUltimaTomb->numero_19 ; ?> </div>
                <div class="numero_tombola">20º <?php echo " ".$numerosUltimaTomb->numero_20 ; ?> </div>
            </div>
        </div>
        <!-- SORTEOS -->
        <h3 class="titulo_tabla_sorteos_mat_vesp_tarde_noc">SORTEOS</h3>
        <div class="contenedor_tabla_sorteos_mat_vesp_tarde_noc">
            <div class="item_tabla_sorteos_mat_vesp_tarde_noc" style="background-color: rgba(87, 255, 53, 0.47)"><div>matutina</div><div>6541</div></div>
            <div class="item_tabla_sorteos_mat_vesp_tarde_noc" style="background-color: #ffffff"><div>vespertina</div><div>54564</div></div>
            <div class="item_tabla_sorteos_mat_vesp_tarde_noc" style="background-color: #f3beff"><div>tarde</div><div>8741</div></div>
            <div class="item_tabla_sorteos_mat_vesp_tarde_noc" style="background-color: #fffd96"><div>nocturna</div><div>1235</div></div>
        </div>

        <!-- BANNER -->
        <br>        <br>        <br>
        <a href="<?= $banners[9]->link; ?>">
            <img class="banner_desp_sorteos" src="../img/banners/<?= $banners[9]->foto; ?>" height="98">
        </a>
        <br>        <br>        <br>

        <!-- ATRASADO FAVORITO FIJA BATACAZO -->
        <div class="contenedor_num_atrasado_fav_fija_batacazo">
            <div class="titulo_num_atrasado_fav_fija_batacazo">
                <span>ATRASADO</span>
                <span>FAVORITO</span>
                <span>FIJA</span>
                <span>BATACAZO</span>
            </div>
            <div class="num_atrasado_fav_fija_batacazo">
                <span>8729</span>
                <span>4143</span>
                <span>6388</span>
                <span>9284</span>
            </div>
        </div>
    </div>
    <!-- COLUMNA DERECHA  BANNERS LATERALES-->
    <div class="col-md-4">
        <div class="contenedor_banners_laterales">
            <h4 class="numero_suerte"><span style="color: red">NUMERO DE LA SUERTE</span><span style="font-size: 24px">6587</span></h4>
            <a class="banners_laterales"  href="<?= $banners[1]->link; ?>"><img src="../img/banners/<?= $banners[1]->foto; ?>" width="300" height="105"></a>
            <a class="banners_laterales"  href="<?= $banners[2]->link; ?>"><img src="../img/banners/<?= $banners[2]->foto; ?>" width="300" height="105"></a>
            <a class="banners_laterales"  href="<?= $banners[3]->link; ?>"><img src="../img/banners/<?= $banners[3]->foto; ?>" width="300" height="105"></a>
            <a class="banners_laterales"  href="<?= $banners[4]->link; ?>"><img src="../img/banners/<?= $banners[4]->foto; ?>" width="300" height="105"></a>
            <a class="banners_laterales"  href="<?= $banners[5]->link; ?>"><img src="../img/banners/<?= $banners[5]->foto; ?>" width="300" height="105"></a>
            <a class="banners_laterales"  href="<?= $banners[6]->link; ?>"><img src="../img/banners/<?= $banners[6]->foto; ?>" width="300" height="105"></a>
            <a class="banners_laterales"  href="<?= $banners[7]->link; ?>"><img src="../img/banners/<?= $banners[7]->foto; ?>" width="300" height="105"></a>
            <a class="banners_laterales"  href="<?= $banners[8]->link; ?>"><img src="../img/banners/<?= $banners[8]->foto; ?>" width="300" height="105"></a>
        </div>
    </div>
</div>
<!--
<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
</div>
-->
<!-- Main
<div class="gtco-container">
    <div class="row copyright">
        <div class="col-md-12">
            <p class="pull-left"> <small class="block">&copy; 2017 Todos los Derechos Reservados</small> <small class="block">QUINITUC <a href="http://unsplash.co/" target="_blank"></a></small> </p>
            <p class="pull-right">
            <ul class="gtco-social-icons pull-right">
                <li><a href="#"><i class="icon-twitter"></i></a></li>
                <li><a href="#"><i class="icon-facebook"></i></a></li>
                <li><a href="#"><i class="icon-linkedin"></i></a></li>
                <li><a href="#"><i class="icon-dribbble"></i></a></li>
            </ul>
            <p></p>
        </div>
    </div>
</div>
<script src="js/main.js"></script>

-->
</body>
</html>
