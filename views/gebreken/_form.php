<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Gebreken $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="gebreken-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'projecten_id')->textInput() ?>

    <?= $form->field($model, 'gebreek_info')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gebreek_foto')->textInput() ?>

    <?= $form->field($model, 'gebreek_kosten')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
