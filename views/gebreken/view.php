<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\ArrayHelper;

$projectenList = arrayHelper::map($projecten,'id','adres');
/** @var yii\web\View $this */
/** @var app\models\Gebreken $model */

$this->title = 'Gebreek';
$this->params['breadcrumbs'][] = ['label' => 'Gebreken', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="gebreken-view">

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
            //'projecten_id',
            ['label' => 'Project (adres)', 'value'=> $projectenList[$model->projecten_id]],
            'gebreek_info',
            [
                'attribute' => 'gebreek_foto',
                'value' => '@web/gebreekfotos/' . $model->gebreek_foto,
                'format' => ['image', ['class' => 'img-responsive','style' => 'width:300px']],
            ],
            'gebreek_kosten',
        ],
    ]) ?>

</div>
