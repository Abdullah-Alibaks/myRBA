<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Gebreken $model */

$this->title = 'Wijzig Gebreek: ';
$this->params['breadcrumbs'][] = ['label' => 'Gebrekens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="gebreken-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'projecten' => $projecten,
    ]) ?>

</div>
