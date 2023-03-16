<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\ArrayHelper;
/** @var yii\web\View $this */
/** @var app\models\Projecten $model */

$klantenList = ArrayHelper::map($klanten,'id','naam');


$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Projecten', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="projecten-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            //'klanten_id',
            ['label' => 'Klant','value' => $klantenList[$model->klanten_id]],
            'typegebouw',
            'grootte',
            'adres',
            'woonplaats',
            'status',
        ],
    ]) ?>

</div>
