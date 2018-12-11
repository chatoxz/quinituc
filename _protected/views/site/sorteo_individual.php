<?php
use app\models\base\TombolaNumero;
use kartik\helpers\Html;
use yii\helpers\Url;

?>
<div class="row ">
<br>
    <div class="row bottom_margin_20">
        <div class="contenedor_logo_quinituc_titulo col-md-12   ">
            <a href="<?= '/index.php' ?>"><img
                    src="../img/logo.quinituc.jpg" width="164" height="auto"></a>
            <h3 class="lema">"EL JUEGO LEGAL AYUDA A LA COMUNIDAD"</h3>
            <!--<img src="../img/bolsa.fw.png" width="168" height="121">-->
        </div>
    </div>

    <?php $numerosUltimaTomb = TombolaNumero::find()->where(['id_tombola' => $tombola->id])->one(); ?>
    <!-- COLUMNA IZQ -->
    <div class="col-md-6" style="margin-left: 25%;">
        <div class="contenedor_ultimos_resultados bottom_margin_40">
            <h3 class="titulo_ultimos_resultados">ÚLTIMOS RESULTADOS DE LA QUINIELA</h3>
            <h3 class="titulo_ultimos_resultados_momento"><?= \app\models\TombolaMomento::find()->where(["id" => $tombola->id_momento])->one()->nombre." ".Yii::$app->formatter->asDate($tombola->fecha, 'd/M/Y'); ; ?>
            </h3>
            <div class="contenedor_numeros_tombola bottom_margin_20">
                <div class="numero_tombola">1º <?= " " . substr("000" . $numerosUltimaTomb->numero_1, -4); ?> </div>
                <div class="numero_tombola">2º <?= " " . substr("000" . $numerosUltimaTomb->numero_2, -4); ?> </div>
                <div class="numero_tombola">3º <?= " " . substr("000" . $numerosUltimaTomb->numero_3, -4); ?> </div>
                <div class="numero_tombola">4º <?= " " . substr("000" . $numerosUltimaTomb->numero_4, -4); ?> </div>
                <div class="numero_tombola">5º <?= " " . substr("000" . $numerosUltimaTomb->numero_5, -4); ?> </div>
                <div class="numero_tombola">6º <?= " " . substr("000" . $numerosUltimaTomb->numero_6, -4); ?> </div>
                <div class="numero_tombola">7º <?= " " . substr("000" . $numerosUltimaTomb->numero_7, -4); ?> </div>
                <div class="numero_tombola">8º <?= " " . substr("000" . $numerosUltimaTomb->numero_8, -4); ?> </div>
                <div class="numero_tombola">9º <?= " " . substr("000" . $numerosUltimaTomb->numero_9, -4); ?> </div>
                <div class="numero_tombola">10º <?= " " . substr("000" . $numerosUltimaTomb->numero_10, -4); ?> </div>
                <div class="numero_tombola">11º <?= " " . substr("000" . $numerosUltimaTomb->numero_11, -4); ?> </div>
                <div class="numero_tombola">12º <?= " " . substr("000" . $numerosUltimaTomb->numero_12, -4); ?> </div>
                <div class="numero_tombola">13º <?= " " . substr("000" . $numerosUltimaTomb->numero_13, -4); ?> </div>
                <div class="numero_tombola">14º <?= " " . substr("000" . $numerosUltimaTomb->numero_14, -4); ?> </div>
                <div class="numero_tombola">15º <?= " " . substr("000" . $numerosUltimaTomb->numero_15, -4); ?> </div>
                <div class="numero_tombola">16º <?= " " . substr("000" . $numerosUltimaTomb->numero_16, -4); ?> </div>
                <div class="numero_tombola">17º <?= " " . substr("000" . $numerosUltimaTomb->numero_17, -4); ?> </div>
                <div class="numero_tombola">18º <?= " " . substr("000" . $numerosUltimaTomb->numero_18, -4); ?> </div>
                <div class="numero_tombola">19º <?= " " . substr("000" . $numerosUltimaTomb->numero_19, -4); ?> </div>
                <div class="numero_tombola">20º <?= " " . substr("000" . $numerosUltimaTomb->numero_20, -4); ?> </div>
            </div>
            <?php /*
                <div class="wrap_impr_ult_sort_face bottom_margin_20">
                    <div class="imprimir_tombola">
                        Los datos son solamente informativos y no revisten valor legal.<br>
                        <?php $url = Url::to(["/imprimir", 'id_tombola' => $numerosUltimaTomb->id_tombola]);
                        echo Html::a('<span class="">Imprimir Tombola</span>', $url, ['target'=> '_blank']); ?>
                    </div>
                </div>
            */ ?>
        </div>
    </div>
</div>