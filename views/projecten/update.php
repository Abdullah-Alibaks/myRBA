<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Projecten $model */

$this->title = 'Update Projecten: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Projectens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="projecten-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
