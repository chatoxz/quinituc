<?php
/**
 * Created by PhpStorm.
 * User: chatoxz
 * Date: 22/11/2017
 * Time: 15:42
 */

use kartik\date\DatePicker;
use app\models\base\TombolaNumero;
use kartik\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

?>
<div class="bottom_margin_20 col-md-4">
    <h3>Seleccione la fecha</h3>
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'fecha')->hint('')->widget(
        DatePicker::classname(),
        [
            'options' => ['placeholder' => 'dd/mm/yyyy'],
            'type' => DatePicker::TYPE_COMPONENT_APPEND,
            'pluginOptions' => [
                'autoclose' => true,
                'format' => 'yyyy/mm/dd',
                'todayHighlight' => true,
            ]
        ]
    )->label('Fecha de la tombola'); ?>

    <div class="form-group">
        <?= Html::submitButton('Buscar', ['class' => 'btn btn-success']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>

<div class="row bottom_margin_20">
    <div class="col-md-12" style=" display: flex; flex-wrap: wrap; justify-content: space-around; flex-direction: row;font-size: 18px;max-height: 192px;overflow-y: scroll;">
        <?php foreach ($todas_tombolas as $tombola) { ?>
            <?php $url = Url::to(["/sorteos_anteriores", 'fecha' => $tombola->fecha]);
            echo Html::a('<span>' . Yii::$app->formatter->asDate($tombola->fecha, 'dd/MM/Y') . '</span>', $url, [
                'class' => '',
                'style' => 'border: grey 1px solid; border-radius: 5px;text-align: center;margin: 5px 5px;width: 150px;'
            ]);
        } ?>
    </div>
</div>

<div class="row ">
    <?php
    if (count($ulti_tombolas) > 0) {
        foreach ($ulti_tombolas as $tombola) {
            $numerosUltimaTomb = TombolaNumero::find()->where(['id_tombola' => $tombola->id])->one();
            ?>
            <!-- COLUMNA IZQ -->
            <div class="col-md-6">
                <div class="contenedor_ultimos_resultados bottom_margin_40">
                    <h3 class="titulo_ultimos_resultados"> ÚLTIMOS RESULTADOS DE LA QUINIELA</h3>
                    <h3 class="titulo_ultimos_resultados_momento"><?php echo \app\models\TombolaMomento::find()->where(["id" => $tombola->id_momento])->one()->nombre . " " . Yii::$app->formatter->asDate($tombola->fecha, 'dd/MM/Y');; ?></h3>
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
                        <div class="imprimir_tombola">
                            Los datos son solamente informativos y no revisten valor legal.<br>
                            <?php $url = Url::to(["/imprimir", 'id_tombola' => $numerosUltimaTomb->id_tombola]);
                            echo Html::a('<span class="">Imprimir Tombola</span>', $url, ['target' => '_blank']); ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    <?php } else { ?>
        <div class="alert alert-warning col-md-3 col-xs-12" style="margin: auto;display: block;float: none;">
            No se encontraron sorteos para ese día.
        </div>
    <?php } ?>
</div>