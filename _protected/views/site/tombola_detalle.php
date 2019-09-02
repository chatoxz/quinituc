<?php

use app\models\TombolaMomento;
use yii\helpers\Url;
use kartik\helpers\Html;

$momento_ult_tombola = TombolaMomento::findOne(['id' => $tombola->id_momento])->nombre;
$num_tomb = $tombola->tombolaNumero;
?>
<div href="#contenedor_ultimos_resultados" class="contenedor_ultimos_resultados bottom_margin_40">
    <h3 class="titulo_ultimos_resultados"> ÚLTIMOS RESULTADOS DE LA QUINIELA</h3>
    <h3 class="titulo_ultimos_resultados_momento"><?= $momento_ult_tombola . " " . Yii::$app->formatter->asDate($tombola->fecha, 'dd/MM/Y');; ?></h3>
    <div class="contenedor_numeros_tombola bottom_margin_20">
        <div class="numero_tombola">1º <?= " " . substr("000" . $num_tomb->numero_1, -4); ?> </div>
        <div class="numero_tombola">2º <?= " " . substr("000" . $num_tomb->numero_2, -4); ?> </div>
        <div class="numero_tombola">3º <?= " " . substr("000" . $num_tomb->numero_3, -4); ?> </div>
        <div class="numero_tombola">4º <?= " " . substr("000" . $num_tomb->numero_4, -4); ?> </div>
        <div class="numero_tombola">5º <?= " " . substr("000" . $num_tomb->numero_5, -4); ?> </div>
        <div class="numero_tombola">6º <?= " " . substr("000" . $num_tomb->numero_6, -4); ?> </div>
        <div class="numero_tombola">7º <?= " " . substr("000" . $num_tomb->numero_7, -4); ?> </div>
        <div class="numero_tombola">8º <?= " " . substr("000" . $num_tomb->numero_8, -4); ?> </div>
        <div class="numero_tombola">9º <?= " " . substr("000" . $num_tomb->numero_9, -4); ?> </div>
        <div class="numero_tombola">10º <?= " " . substr("000" . $num_tomb->numero_10, -4); ?> </div>
        <div class="numero_tombola">11º <?= " " . substr("000" . $num_tomb->numero_11, -4); ?> </div>
        <div class="numero_tombola">12º <?= " " . substr("000" . $num_tomb->numero_12, -4); ?> </div>
        <div class="numero_tombola">13º <?= " " . substr("000" . $num_tomb->numero_13, -4); ?> </div>
        <div class="numero_tombola">14º <?= " " . substr("000" . $num_tomb->numero_14, -4); ?> </div>
        <div class="numero_tombola">15º <?= " " . substr("000" . $num_tomb->numero_15, -4); ?> </div>
        <div class="numero_tombola">16º <?= " " . substr("000" . $num_tomb->numero_16, -4); ?> </div>
        <div class="numero_tombola">17º <?= " " . substr("000" . $num_tomb->numero_17, -4); ?> </div>
        <div class="numero_tombola">18º <?= " " . substr("000" . $num_tomb->numero_18, -4); ?> </div>
        <div class="numero_tombola">19º <?= " " . substr("000" . $num_tomb->numero_19, -4); ?> </div>
        <div class="numero_tombola">20º <?= " " . substr("000" . $num_tomb->numero_20, -4); ?> </div>
    </div>
    <div class="wrap_impr_ult_sort_face bottom_margin_20">
        <p>Los datos son solamente informativos y no revisten valor legal.</p>
        <p>
            <?php $url = Url::to(["/sorteos_anteriores", 'fecha' => $tombola->fecha]); ?>
            <?= Html::a(
                '<span class="">Sorteos Anteriores</span>',
                $url,
                ['target' => '_blank', 'class' => 'link_ultimo_sorteo']
            ); ?>
            <?php $url = Url::to(["/imprimir", 'id_tombola' => $num_tomb->id_tombola]); ?>
            <?= Html::a(
                '<span style="font-size: 14px;margin: 5px;" class="glyphicon glyphicon-print"></span>Imprimir',
                $url,
                ['target' => '_blank', 'class' => 'link_imprimir_tombola']
            ); ?>

            <?php $url = Url::to(["sorteo_individual", 'id_tombola' => $tombola->id]); ?>
        </p>
        <!--<div id="fb-root"></div>
                 <div class="wrap_face_links">
                    <div class="fb-like col-md-12" data-href="<?= $url ?>" data-layout="standard" data-action="like" data-show-faces="true">
                    </div>
                    <div class="fb-share-button col-md-12" data-href="<?= $url ?>" data-layout="button_count">
                    </div>
                </div> -->
    </div>
</div>