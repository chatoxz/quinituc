<?php
/* @var $this yii\web\View */

use kartik\helpers\Html;
use yii\helpers\Url;

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: *");

$this->title = Yii::t('app', Yii::$app->name);
?>
<br>
<div class="row bottom_margin_20">
    <div class="contenedor_logo_quinituc_titulo col-md-12   ">
        <a href="<?= '/index.php' ?>"><img src="../img/logo.quinituc.jpg" width="164" height="auto"></a>
        <h3 class="lema">"EL JUEGO LEGAL AYUDA A LA COMUNIDAD"</h3>
        <!--<img src="../img/bolsa.fw.png" width="168" height="121">-->
    </div>
</div>
<div class="row bottom_margin_20">
    <div class="col-md-12 contenedor_banner_ancho">
        <a class="banner_ancho" href="<?= $banners[0]->link; ?>" target="_blank"><img src="../img/banners/<?= $banners[0]->foto; ?>" width="100%" height="auto"></a>
    </div>
</div>
<div class="row ">
    <!-- COLUMNA IZQ -->
    <div class="col-md-8">
        <div class="contenedor_ultimos_resultados bottom_margin_40">
            <h3 class="titulo_ultimos_resultados"> ÚLTIMOS RESULTADOS DE LA QUINIELA</h3>
            <h3 class="titulo_ultimos_resultados_momento"><?php echo $momento_ult_tombola." ".Yii::$app->formatter->asDate($ult_tombola->fecha, 'd/M/Y'); ; ?></h3>
            <div class="contenedor_numeros_tombola bottom_margin_20">
                <div class="numero_tombola">1º <?php echo " ".$numerosUltimaTomb->numero_1 ; ?> </div>
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
            <div class="imprimir_tombola">
                Los datos son solamente informativos y no revisten valor legal.<br>
                <?php $url = Url::to(["/sorteos_anteriores", 'fecha' => $ult_tombola->fecha]); ?>
                <?= Html::a('<span class="">Sorteos Anteriores</span>', $url , ['target'=> '_blank']); ?><br>
                <?php $url = Url::to(["/imprimir", 'id_tombola' => $numerosUltimaTomb->id_tombola]);
                echo Html::a('<span class="">Imprimir Tombola</span>', $url, ['target'=> '_blank']); ?>
            </div>
        </div>

        <!-- SORTEOS -->
        <h3 class="titulo_tabla_sorteos_mat_vesp_tarde_noc">SORTEOS</h3>
        <div class="contenedor_tabla_sorteos_mat_vesp_tarde_noc">
            <div class="item_tabla_sorteos_mat_vesp_tarde_noc" style="background-color: rgba(87, 255, 53, 0.47)"><div>Matutina</div><div><?= $primer_premio_mat ?></div></div>
            <div class="item_tabla_sorteos_mat_vesp_tarde_noc" style="background-color: #ffffff"><div>Vespertina</div><div><?= $primer_premio_vesp ?></div></div>
            <div class="item_tabla_sorteos_mat_vesp_tarde_noc" style="background-color: #f3beff"><div>Tarde</div><div><?= $primer_premio_tarde ?></div></div>
            <div class="item_tabla_sorteos_mat_vesp_tarde_noc" style="background-color: #fffd96"><div>Nocturna</div><div><?= $primer_premio_noc ?></div></div>
        </div>

        <!-- BANNER -->
        <br>        <br>        <br>
        <a href="<?= $banners[9]->link; ?>"  target="_blank">
            <img class="banner_desp_sorteos" src="../img/banners/<?= $banners[9]->foto; ?>">
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
                <span><?= $numeros_varios->atrasado ?></span>
                <span><?= $numeros_varios->favorito ?></span>
                <span><?= $numeros_varios->fija ?></span>
                <span><?= $numeros_varios->batacazo ?></span>
            </div>
        </div>
        <br><br>
        <div class="triplona_cuatriplona bottom_margin_20">
            <div class="triplona">
                <span>TRIPLONA</span>
                <span class="pozo_estimado_label">POZO ESTIMADO DEL SORTEO</span>
                <span>VESPERTINO <?= date(("d/m/y")) ?></span>
                <span>$<?= number_format($numeros_varios->triplona,0,",","."); ?></span>

            </div>
            <div class="cuatriplona">
                <span>CUATRIPLONA</span>
                <span class="pozo_estimado_label">POZO ESTIMADO DEL SORTEO</span>
                <span>VESPERTINO <?= date(("d/m/y")) ?></span>
                <span>$<?= number_format($numeros_varios->cuatriplona,0,",","."); ?></span>
            </div>
        </div>
    </div>
    <!-- COLUMNA DERECHA  BANNERS LATERALES-->
    <div class="col-md-4">
        <div class="contenedor_banners_laterales">
            <h4 class="numero_suerte"><span style="color: red;font-weight: bold">TU NUMERO DE LA SUERTE</span><span style="font-size: 24px">6587</span></h4>
            <a class="banners_laterales"  href="<?= $banners[1]->link; ?>" target="_blank"><img src="../img/banners/<?= $banners[1]->foto; ?>" width="300" height="105"></a>
            <a class="banners_laterales"  href="<?= $banners[2]->link; ?>" target="_blank"><img src="../img/banners/<?= $banners[2]->foto; ?>" width="300" height="105"></a>
            <a class="banners_laterales"  href="<?= $banners[3]->link; ?>" target="_blank"><img src="../img/banners/<?= $banners[3]->foto; ?>" width="300" height="105"></a>
            <a class="banners_laterales"  href="<?= $banners[4]->link; ?>" target="_blank"><img src="../img/banners/<?= $banners[4]->foto; ?>" width="300" height="105"></a>
            <a class="banners_laterales"  href="<?= $banners[5]->link; ?>" target="_blank"><img src="../img/banners/<?= $banners[5]->foto; ?>" width="300" height="105"></a>
            <a class="banners_laterales"  href="<?= $banners[6]->link; ?>" target="_blank"><img src="../img/banners/<?= $banners[6]->foto; ?>" width="300" height="105"></a>
            <a class="banners_laterales"  href="<?= $banners[7]->link; ?>" target="_blank"><img src="../img/banners/<?= $banners[7]->foto; ?>" width="300" height="105"></a>
            <a class="banners_laterales"  href="<?= $banners[8]->link; ?>" target="_blank"><img src="../img/banners/<?= $banners[8]->foto; ?>" width="300" height="105"></a>
        </div>
    </div>
</div>

</body>
</html>
