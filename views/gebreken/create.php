<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Gebreken $model */

$this->title = 'Voeg Gebreken toe';
$this->params['breadcrumbs'][] = ['label' => 'Gebreken', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gebreken-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'projecten' => $projecten,
    ]) ?>

</div>
