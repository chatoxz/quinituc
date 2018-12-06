<?php
/* @var $this yii\web\View */

use kartik\helpers\Html;
use yii\helpers\Url;

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: *");

$this->title = Yii::t('app', Yii::$app->name);
?>
<?php //CONFIG FOR FACEBOOK ?>
<?php $url = Url::to(["sorteo_individual", 'id_tombola' => $ult_tombola->id]); ?>
<head>
    <meta property="og:url" content="<?= "http://quinituc.appe.com.ar" . $url ?>" />
</head>

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
        <div href="#contenedor_ultimos_resultados" class="contenedor_ultimos_resultados bottom_margin_40">
            <h3 class="titulo_ultimos_resultados"> ÚLTIMOS RESULTADOS DE LA QUINIELA</h3>
            <h3 class="titulo_ultimos_resultados_momento"><?php echo $momento_ult_tombola . " " . Yii::$app->formatter->asDate($ult_tombola->fecha, 'd/M/Y'); ?></h3>
            <div class="contenedor_numeros_tombola bottom_margin_20">
                 <div class="numero_tombola">1º <?php echo " " . substr("000" . $numerosUltimaTomb->numero_1, -4); ?> </div>
                <div class="numero_tombola">2º <?php echo " " . substr("000" . $numerosUltimaTomb->numero_2, -4); ?> </div>
                <div class="numero_tombola">3º <?php echo " " . substr("000" . $numerosUltimaTomb->numero_3, -4); ?> </div>
                <div class="numero_tombola">4º <?php echo " " . substr("000" . $numerosUltimaTomb->numero_4, -4); ?> </div>
                <div class="numero_tombola">5º <?php echo " " . substr("000" . $numerosUltimaTomb->numero_5, -4); ?> </div>
                <div class="numero_tombola">6º <?php echo " " . substr("000" . $numerosUltimaTomb->numero_6, -4); ?> </div>
                <div class="numero_tombola">7º <?php echo " " . substr("000" . $numerosUltimaTomb->numero_7, -4); ?> </div>
                <div class="numero_tombola">8º <?php echo " " . substr("000" . $numerosUltimaTomb->numero_8, -4); ?> </div>
                <div class="numero_tombola">9º <?php echo " " . substr("000" . $numerosUltimaTomb->numero_9, -4); ?> </div>
                <div class="numero_tombola">10º <?php echo " " . substr("000" . $numerosUltimaTomb->numero_10, -4); ?> </div>
                <div class="numero_tombola">11º <?php echo " " . substr("000" . $numerosUltimaTomb->numero_11, -4); ?> </div>
                <div class="numero_tombola">12º <?php echo " " . substr("000" . $numerosUltimaTomb->numero_12, -4); ?> </div>
                <div class="numero_tombola">13º <?php echo " " . substr("000" . $numerosUltimaTomb->numero_13, -4); ?> </div>
                <div class="numero_tombola">14º <?php echo " " . substr("000" . $numerosUltimaTomb->numero_14, -4); ?> </div>
                <div class="numero_tombola">15º <?php echo " " . substr("000" . $numerosUltimaTomb->numero_15, -4); ?> </div>
                <div class="numero_tombola">16º <?php echo " " . substr("000" . $numerosUltimaTomb->numero_16, -4); ?> </div>
                <div class="numero_tombola">17º <?php echo " " . substr("000" . $numerosUltimaTomb->numero_17, -4); ?> </div>
                <div class="numero_tombola">18º <?php echo " " . substr("000" . $numerosUltimaTomb->numero_18, -4); ?> </div>
                <div class="numero_tombola">19º <?php echo " " . substr("000" . $numerosUltimaTomb->numero_19, -4); ?> </div>
                <div class="numero_tombola">20º <?php echo " " . substr("000" . $numerosUltimaTomb->numero_20, -4); ?> </div>
            </div>
            <div class="wrap_impr_ult_sort_face bottom_margin_20">
                Los datos son solamente informativos y no revisten valor legal.<br>
                <?php $url = Url::to(["/sorteos_anteriores", 'fecha' => $ult_tombola->fecha]); ?>
                <?= Html::a('<span class="">Sorteos Anteriores</span>', $url, ['target' => '_blank', 'class' => 'link_ultimo_sorteo']); ?>
                <?php $url = Url::to(["/imprimir", 'id_tombola' => $numerosUltimaTomb->id_tombola]);
                echo Html::a('<span class="">Imprimir Tombola</span>', $url, ['target' => '_blank', 'class' => 'link_imprimir_tombola']); ?>

                <?php $url = Url::to(["sorteo_individual", 'id_tombola' => $ult_tombola->id]); ?>
                <div id="fb-root"></div>
                <div class="wrap_face_links">
                    <div class="fb-like col-md-12"
                         data-href="<?= $url ?>"
                         data-layout="standard"
                         data-action="like"
                         data-show-faces="true">
                    </div>
                    <div class="fb-share-button col-md-12"
                         data-href="<?= $url ?>"
                         data-layout="button_count">
                    </div>
                </div>
            </div>
        </div>

        <!-- SORTEOS -->
        <h3 class="titulo_tabla_sorteos_mat_vesp_tarde_noc">SORTEOS</h3>
        <div class="contenedor_tabla_sorteos_mat_vesp_tarde_noc">
             <div class="item_tabla_sorteos_mat_vesp_tarde_noc" style="background-color: rgba(87, 255, 53, 0.47)"><div>Matutina</div><div><?= substr("000" . $primer_premio_mat, -4) ?></div></div>
            <div class="item_tabla_sorteos_mat_vesp_tarde_noc" style="background-color: #ffffff"><div>Vespertina</div><div><?= substr("000" . $primer_premio_vesp, -4) ?></div></div>
            <div class="item_tabla_sorteos_mat_vesp_tarde_noc" style="background-color: #f3beff"><div>Tarde</div><div><?= substr("000" . $primer_premio_tarde, -4) ?></div></div>
            <div class="item_tabla_sorteos_mat_vesp_tarde_noc" style="background-color: #fffd96"><div>Nocturna</div><div><?= substr("000" . $primer_premio_noc, -4) ?></div></div>
        </div>

        <!-- BANNER -->
        <br>        <br>        <br>
        <a href="<?= $banners[1]->link; ?>"  target="_blank">
            <img class="banner_desp_sorteos" src="../img/banners/<?= $banners[1]->foto; ?>">
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
                <span><?= substr("0" . $numeros_varios->atrasado, -2) ?></span>
                <span><?= substr("0" . $numeros_varios->favorito, -2) ?></span>
                <span><?= substr("0" . $numeros_varios->fija, -2) ?></span>
                <span><?= substr("0" . $numeros_varios->batacazo, -2) ?></span>
            </div>
        </div>
        <br><br>
        <div class="triplona_cuatriplona bottom_margin_20">
            <div class="triplona">
                <span>TRIPLONA</span>
                <span class="pozo_estimado_label">POZO ESTIMADO DEL SORTEO</span>
                <span>VESPERTINO <?= date(("d/m/y")) ?></span>
                <span>$<?= number_format($numeros_varios->triplona, 2, ",", "."); ?></span>

            </div>
            <div class="cuatriplona">
                <span>CUATRIPLONA</span>
                <span class="pozo_estimado_label">POZO ESTIMADO DEL SORTEO</span>
                <span>VESPERTINO <?= date(("d/m/y")) ?></span>
                <span>$<?= number_format($numeros_varios->cuatriplona, 2, ",", "."); ?></span>
            </div>
        </div>
    </div>
    <!-- COLUMNA DERECHA  BANNERS LATERALES-->
    <div class="col-md-4">
        <div class="contenedor_banners_laterales">
            <h4 class="numero_suerte"><span style="color: red;font-weight: bold">TU NUMERO DE LA SUERTE</span><span style="font-size: 24px">6587</span></h4>
            <?php 
            $flag = 0;
            foreach ($banners as $key => $banner) { 
                if($flag > 1){ ?>
                    <a class="banners_laterales"  href="<?= $banner->link; ?>" target="_blank"><img src="../img/banners/<?= $banner->foto; ?>" width="300" height="105"></a>
                <?php }
                $flag++; } ?>
        </div>
    </div>
</div>

</body>
</html>