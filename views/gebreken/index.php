<?php

use app\models\Gebreken;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;

$projectenList = ArrayHelper::map($projecten,'id','adres');

/** @var yii\web\View $this */
/** @var app\models\GebrekenSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Gebreken';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gebreken-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Gebreken', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'projecten_id',
            ['attribute' => 'projecten_id',
            'value' => 'projecten.adres',
             'filter' => $projectenList,
             'label' => 'Project'],
            'gebreek_info',
            'gebreek_foto',
            'gebreek_kosten',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Gebreken $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
