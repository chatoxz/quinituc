<?php
/**
 * Created by PhpStorm.
 * User: chatoxz
 * Date: 22/11/2017
 * Time: 15:42
 */

use app\models\base\TombolaNumero;
use kartik\helpers\Html;
use yii\helpers\Url;

?>
<div class="bottom_margin_20">
    <h3>Seleccione la fecha</h3>
</div>
<div class="row bottom_margin_20">
    <div class="col-md-12" style=" display: flex; flex-wrap: wrap; justify-content: space-around; flex-direction: row;font-size: 18px;">
        <?php foreach ($todas_tombolas as $tombola){ ?>
            <?php $url = Url::to(["/sorteos_anteriores", 'fecha' => $tombola->fecha]);
            echo Html::a('<span>'.$tombola->fecha.'</span>', $url, ['target'=> '_blank','class'=> 'col-md-2',
                'style' => 'border: grey 1px solid; border-radius: 5px;text-align: center;margin: 5px 5px']); ?><?php } ?>
    </div>
</div>
<div class="row ">

    <?php foreach ($ulti_tombolas as $tombola){
        $numerosUltimaTomb = TombolaNumero::find()->where(['id_tombola' => $tombola->id])->one();
        ?>
        <!-- COLUMNA IZQ -->
        <div class="col-md-6">
            <div class="contenedor_ultimos_resultados bottom_margin_40">
                <h3 class="titulo_ultimos_resultados"> ÚLTIMOS RESULTADOS DE LA QUINIELA</h3>
                <h3 class="titulo_ultimos_resultados_momento"><?php echo \app\models\TombolaMomento::find()->where(["id" => $tombola->id_momento])->one()->nombre." ".Yii::$app->formatter->asDate($tombola->fecha, 'd/M/Y'); ; ?></h3>
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
                    <?php $url = Url::to(["/imprimir", 'id_tombola' => $numerosUltimaTomb->id_tombola]);
                    echo Html::a('<span class="">Imprimir Tombola</span>', $url, ['target'=> '_blank']); ?>
                </div>
            </div>
        </div>
    <?php } ?>
</div>

