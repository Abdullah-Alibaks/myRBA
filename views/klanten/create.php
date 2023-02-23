<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Klanten $model */

$this->title = 'Create Klanten';
$this->params['breadcrumbs'][] = ['label' => 'Klantens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="klanten-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
