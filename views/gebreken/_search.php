<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\GebrekenSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="gebreken-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'projecten_id') ?>

    <?= $form->field($model, 'gebreek_info') ?>

    <?= $form->field($model, 'gebreek_foto') ?>

    <?= $form->field($model, 'gebreek_kosten') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
