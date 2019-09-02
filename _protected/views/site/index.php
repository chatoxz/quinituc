<?php
/* @var $this yii\web\View */

use app\models\TombolaMomento;

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: *");

$this->title = Yii::t('app', Yii::$app->name);
?>
<?php //CONFIG FOR FACEBOOK
//$url = Url::to(["sorteo_individual", 'id_tombola' => $ult_tombola->id]);
?>

<!-- <head>
    <meta property="og:url" content="<?php //echo "http://quinituc.appe.com.ar" . $url
                                        ?>" />
</head> -->


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
<div class="row">
    <!-- COLUMNA IZQ -->
    <div class="col-md-5 col-xs-12">
        <?php
        // Comparision function
        function date_compare($element1, $element2)
        {
            return $element1['id'] > $element2['id'];
        }
        $temp = $ultimas_tombolas;
        // Sort the array
        usort($temp, 'date_compare');
        ?>

        <!-- ULTIMO SORTEO -->
        <?php $tombola1 =  end($temp); ?>
        <?= $this->render('tombola_detalle', [
            'tombola' => $tombola1,
        ]);
        ?>

        <!-- PENULTIMO SORTEO -->
        <?php array_pop($temp);
        $tombola2 =  end($temp); ?>
        <?= $this->render('tombola_detalle', [
            'tombola' => $tombola2,
        ]);
        ?>

    </div>
    <!-- COLUMNA DERECHA  -->
    <div class="col-md-7 col-xs-12">
        <!-- BANNERS LATERALES -->
        <div class="contenedor_banners_laterales">
            <h4 class="numero_suerte col-xs-12" onclick='change_suerte()'>
                <span style="color: red;font-weight: bold">TU NUMERO DE LA SUERTE</span>
                <span id="numero_suerte_span" style="font-size: 24px">
                    <?php //echo substr("000" . $numeros_varios->suerte, -4)
                    ?>
                </span>
            </h4>
            <?php
            $flag = 0;
            foreach ($banners as $key => $banner) {
                if ($flag > 1) { ?>
                    <!-- tamaño incial de la s imagenes width="300" height="105"-->
                    <a class="banners_laterales " href="<?= $banner->link; ?>" target="_blank"">
                        <img class=" col-xs-12" src="../img/banners/<?= $banner->foto; ?>">
                    </a>
            <?php }
                $flag++;
            } ?>
        </div>
        <!-- BANNER  GRANDE EN EL MEDIO -->
        <a href="<?= $banners[1]->link; ?>" target="_blank">
            <img class="banner_desp_sorteos" src="../img/banners/<?= $banners[1]->foto; ?>">
        </a>
        <!-- ATRASADO FAVORITO FIJA BATACAZO -->
        <div class="contenedor_num_atrasado_fav_fija_batacazo bottom_margin_20">
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

        <!--TRIPLONA CUATRIPLONA -->
        <div class="triplona_cuatriplona bottom_margin_20">
            <div class="triplona ">
                <span>TRIPLONA</span>
                <span class="pozo_estimado_label">POZO ESTIMADO DEL SORTEO</span>
                <span>VESPERTINO <?= date(("d/m/y")) ?></span>
                <span>$<?= number_format($numeros_varios->triplona, 2, ",", "."); ?></span>

            </div>
            <div class="cuatriplona ">
                <span>CUATRIPLONA</span>
                <span class="pozo_estimado_label">POZO ESTIMADO DEL SORTEO</span>
                <span>VESPERTINO <?= date(("d/m/y")) ?></span>
                <span>$<?= number_format($numeros_varios->cuatriplona, 2, ",", "."); ?></span>
            </div>
        </div>
        <div class="contenedor_banners_laterales">
            <?php
            $flag = 0;
            foreach ($banners as $key => $banner) {
                if ($flag > 5) { ?>
                    <!-- tamaño incial de la s imagenes width="300" height="105"-->
                    <a class="banners_laterales " href="<?= $banner->link; ?>" target="_blank"">
                        <img class=" col-xs-12" src="../img/banners/<?= $banner->foto; ?>">
                    </a>
            <?php }
                $flag++;
            } ?>
        </div>
    </div>
</div>

<div class="row">
    <!-- ULTIMOS SORTEOS -->
    <h3 class="titulo_tabla_sorteos_mat_vesp_tarde_noc">SORTEOS</h3>
    <div class="contenedor_tabla_sorteos_mat_vesp_tarde_noc">
        <?php
        $colores = [
            'background-color: rgba(87, 255, 53, 0.47)',
            'background-color: #ffffff',
            'background-color: #5576bab3',
            'background-color: #f3beff;',
            'background-color: #fffd96;',
            'background-color: #1a1900b3;color: white;',
            'background-color: rgba(87, 255, 53, 0.47)',
            'background-color: #ffffff',
            'background-color: #5576bab3',
            'background-color: #f3beff',
            'background-color: #fffd96',
            'background-color: #1a1900b3;color: white;'
        ];
        $i = 0;
        foreach ($ultimas_tombolas as $tombola) {
            if (count($tombola) > 0) { ?>
                <div class="item_tabla_sorteos_mat_vesp_tarde_noc" style="<?= $colores[$i]; ?>">
                    <div><?= TombolaMomento::findOne(['id' => $tombola->id_momento])->nombre; ?></div>
                    <div><?= substr("000" . $tombola->tombolaNumero->numero_1, -4) ?></div>
                </div>
            <?php } ?>
            <?php ++$i; ?>
        <?php } ?>
    </div>
    <br> <br> <br>


</div>

</body>

</html>