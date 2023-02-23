<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

//<?= $form->field($model, 'klanten_naam')->textInput(['maxlength' => true])>

$klantenList = ArrayHelper::map($klanten,'id','naam');
/** @var yii\web\View $this */
/** @var app\models\Projecten $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="projecten-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'klanten_id')->dropDownList($klantenList, ['prompt' => ''])->label('Klant') ?>


    <?= $form->field($model, 'adres')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nummer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'woonplaats')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Controle' => 'Controle', 'Offerte' => 'Offerte', 'Afgerond' => 'Afgerond', '' => '', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
