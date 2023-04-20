<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

$klantenList = ArrayHelper::map($klanten,'id','naam');
/** @var yii\web\View $this */
/** @var app\models\Projecten $model */
/** @var yii\widgets\ActiveForm $form */
?>
<!--Via de onderstaande form kan gebruiker een nieuw project aanmaken voor een klant. De klant moet worden geselecteerd via de eerste invoerveld-->
<div class="projecten-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'klanten_id')->dropDownList($klantenList, ['prompt' => ''])->label('Klant') ?>

    <?= $form->field($model, 'typegebouw')->dropDownList([ 'Vrijstaand' => 'Vrijstaand', 'Flat' => 'Flat', 'Rijtjeshuis' => 'Rijtjeshuis', 'Appartement' => 'Appartement', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'grootte')->textInput() ?>

    <?= $form->field($model, 'adres')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'woonplaats')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Controle' => 'Controle', 'Offerte' => 'Offerte', 'Afgerond' => 'Afgerond', '' => '', ], ['prompt' => '']) ?>
     <br>
    <div class="form-group">
        <?= Html::submitButton('Opslaan', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
