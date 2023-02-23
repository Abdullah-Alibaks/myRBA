<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Klanten $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="klanten-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'naam')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'adres')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'typegebouw')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'grootte')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
