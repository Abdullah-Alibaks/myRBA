<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\ArrayHelper;
/** @var yii\web\View $this */
/** @var app\models\Projecten $model */

$klantenList = ArrayHelper::map($klanten,'id','naam');
$gebrekenList = ArrayHelper::map($gebreken,'id','projecten_id');

//dd($gebrekenList);

$this->title = $model->adresp;
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
        //Detailview aangepast zodat je klant naam ziet ipv klant_id en grootte in m2 voor duidelijkheid
        'model' => $model,
        'attributes' => [
            //'id',
            //'klanten_id',
            ['label' => 'Klant','value' => $klantenList[$model->klanten_id]],
            'typegebouw',
            ['label' => 'Grootte in m2', 'value' => $model->grootte],
            'adres',
            'woonplaats',
            'status',
        ],
    ]) ?>
    <h2>Gebreken</h2>
    <!-- onderstaande loop handelt met de array af zodat ik alle gebreken kan laten zien  -->
    <!-- Met de If statement zorg ik ervoor dat alleen de gebreken van het specifieke project te zijn in de view.  -->
    <?= Html::a('Voeg een gebreek toe', ['gebreken/create', 'id' => $model->id], ['class' => 'btn btn-success']); echo "<br>"; ?>
    <?php
    $totalCosts = 0;
    foreach ($gebreken as $gebreek): ?>
        <?php if ($gebreek['projecten_id'] == $model->id):
            $totalCosts += $gebreek['gebreek_kosten']; ?>
            <br>    
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            ['label' => 'Info', 'value' => $gebreek['gebreek_info']],
            [
                'attribute' => 'gebreek_foto',
                'value' => '@web/gebreekfotos/' . $gebreek['gebreek_foto'],
                'format' => ['image', ['class' => 'img-responsive','style' => 'width:300px']],
            ],
            ['label' => 'Kosten indicatie', 'value' => $gebreek['gebreek_kosten']],

        ],

    ]);
        endif;
    endforeach; 
    ?>
     <br>
   <?= DetailView::widget([
    'model' => $model,
    'attributes' => [
        ['label' => 'Totale kosten van gebreken', 'value' => $totalCosts],
    ],
]); ?>
    

</div>
