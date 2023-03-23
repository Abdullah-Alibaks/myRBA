<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Gebreken $model */

$this->title = 'Create Gebreken';
$this->params['breadcrumbs'][] = ['label' => 'Gebrekens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gebreken-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
