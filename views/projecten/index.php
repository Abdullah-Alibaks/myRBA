<?php

use app\models\Projecten;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;

/** @var yii\web\View $this */
/** @var app\models\ProjectenSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$klantenList = ArrayHelper::map($klanten,'id','naam');

//dd($klanten); 

$this->title = 'Projecten';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="projecten-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Nieuw', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'klanten_id',
            ['attribute' => 'klanten_id',
             'value' => 'klanten.naam',
              'filter' => $klantenList,
              'label' => 'Naam Klant'
            
            ],
            'typegebouw',
            'grootte',
            'adres',
            'woonplaats',
            //'status',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Projecten $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>

    


</div>
