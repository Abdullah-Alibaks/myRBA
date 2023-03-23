<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\web\UploadedFile;
use yii\helpers\ArrayHelper;

$projectenList = arrayHelper::map($projecten,'id','adres');

/** @var yii\web\View $this */
/** @var app\models\Gebreken $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="gebreken-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'projecten_id')->dropDownList($projectenList, ['prompt' => ''])->label('Project') ?>

    <?= $form->field($model, 'gebreek_info')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gebreek_foto')->fileInput() ?>

    <?= $form->field($model, 'gebreek_kosten')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
