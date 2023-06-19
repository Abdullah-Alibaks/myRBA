<?php

use yii\helpers\Html;

/** @var yii\web\View $this */

$this->title = 'MyRba';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <?php echo Html::img('@web/images/logomyrba.png',  [
    'alt' => 'Logo',
    'style' => 'width: 300px; height: auto;'
        ]) ?>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-6">
                <h2>Projecten</h2>

                <p>Overzicht projecten.</p>

                <p><a class="btn btn-outline-secondary" href="/projecten/index">Projecten &raquo;</a></p>
            </div>
            <div class="col-lg-6">
                <h2>Klanten</h2>

                <p>Overzicht klanten</p>

                <p><a class="btn btn-outline-secondary" href="/klanten/index">Klanten &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
