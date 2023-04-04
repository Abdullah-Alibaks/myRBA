<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Klanten $model */
/** @var yii\widgets\ActiveForm $form */
?>
<!--Via het onderstaande form kan gebruiker een nieuwe klant in de database zetten. Gebruiker kan later voor de klant een project bijvoegen. Op deze manier kan een klant meerdere projecten aanvragen via de gebruiker-->
<div class="klanten-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'naam')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefoon')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
