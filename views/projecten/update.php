<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Projecten $model */

$this->title = 'Wijzig project gegevens ';
$this->params['breadcrumbs'][] = ['label' => 'Projecten', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Wijzigen';
?>
<div class="projecten-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'klanten' => $klanten,
    ]) ?>

</div>
