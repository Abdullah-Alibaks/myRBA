<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\ProjectenSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="projecten-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'klanten_id') ?>

   

    <?= $form->field($model, 'typegebouw') ?>

    <?= $form->field($model, 'grootte') ?>

    <?php // echo $form->field($model, 'adres') ?>

    <?php // echo $form->field($model, 'woonplaats') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
