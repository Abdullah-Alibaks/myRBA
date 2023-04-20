<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\web\UploadedFile;
use yii\helpers\ArrayHelper;

$projectenList = ArrayHelper::map($projecten,'id','adres');

/** @var yii\web\View $this */
/** @var app\models\Gebreken $model */
/** @var yii\widgets\ActiveForm $form */
?>
<!-- Onderstaande form gemaakt om de juiste gegevens in te voeren, In het eerste veld moet gebruiker een bestaand project selecteren
en in het 3de veld kan gebruiker een afbeelding van de gebreek uploaden-->
<div class="gebreken-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'projecten_id')->dropDownList($projectenList, ['prompt' => ''])->label('Project') ?>

    <?= $form->field($model, 'gebreek_info')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gebreek_foto')->fileInput(['multiple' => true]) ?>

    <?= $form->field($model, 'gebreek_kosten')->textInput() ?>
    <br>
    <div class="form-group">
        <?= Html::submitButton('Toevoegen', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
