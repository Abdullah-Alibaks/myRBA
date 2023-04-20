<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Projecten $model */

$this->title = 'Maak nieuw project aan';
$this->params['breadcrumbs'][] = ['label' => 'Projecten', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="projecten-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'klanten' => $klanten,
    ]) ?>

</div>
