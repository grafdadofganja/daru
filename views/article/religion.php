<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\sqlite\Fractions */
/* @var $form ActiveForm */
?>

<div class="articles row"> 
        

    <div class="col-md-8">
    
        <h2><?= Html::encode($model->name) ?></h2> 

        <p class="intro">
            <span><?= Html::encode($model->fullname) ?></span>
            <?= Html::encode($model->info) ?>
        </p>
        <h3>История</h3>
        <p class="intro">
            <?= Html::encode($model->history) ?>
        </p>   
        <h3>Учение</h3>
        <p class="intro">
            <?= Html::encode($model->science) ?>
        </p>
        <h3>Численность</h3>
        <p class="intro">
            <?= Html::encode($model->population) ?>
        </p>
        <h3>Важные персоналии</h3>
        <p class="intro">
            <?= Html::encode($model->persons) ?>
        </p>
        <h3>Недостатки и критика</h3>
        <p class="intro">
            <?= Html::encode($model->defect) ?>
        </p>

        <h3>Интересные факты</h3>
        <p class="intro">
            <?= Html::encode($model->facts) ?>
        </p>

    </div>  

    <div class="col-md-4">
        <ul class="baseinfo">
            <?= Html::img('@web/img/'.$model->img, ['alt' => $model->name, 'class' => 'mainimage']) ?>   
            <li><span>Официальное название: </span> <?= Html::encode($model->fullname) ?></li>   
            <li><span>Численность членов: </span> <?= Html::encode($model->popamount) ?></li>        
            <li><span>Священная Обитель: </span> <?= Html::encode($model->holyplace) ?></li>
            <li><span>Язык служения объекту: </span> <?= Html::encode($model->lang) ?></li>
            <li><span>Примерное время возникновения: </span> <?= Html::encode($model->birthday) ?></li>
            <li><span>Направление: </span> <?= Html::encode($model->aim) ?></li>
            <li><span>Лидер/бог: </span> <?= Html::encode($model->god) ?></li>
            <li><span>Священная книга: </span> <?= Html::encode($model->book) ?></li>
        </ul>
    </div>

</div>
