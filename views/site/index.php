<?php

use yii\helpers\Html;

/** @var yii\web\View $this */

$this->title = 'MyRba';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <?php echo Html::img('@web/images/logo.png',  [
    'alt' => 'Logo',
    'style' => 'width: 300px; height: auto;'
]) ?>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Projecten</h2>

                <p>Overzicht projecten.</p>

                <p><a class="btn btn-outline-secondary" href="/projecten/index">Projecten &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Klanten</h2>

                <p>Overzicht klanten</p>

                <p><a class="btn btn-outline-secondary" href="/klanten/index">Klanten &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-outline-secondary" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
