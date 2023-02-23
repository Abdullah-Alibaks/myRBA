<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Klanten $model */

$this->title = 'Update Klanten: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Klantens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="klanten-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
