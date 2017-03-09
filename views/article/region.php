<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\sqlite\Fractions */
/* @var $form ActiveForm */

$this->title = $model->name;
?>

<div class="articles row"> 
        

    <div class="col-md-8">
        <h2><?= Html::encode($model->name) ?></h2> 
        <?= Html::a('Править', ['moder/change-region', 'id' => $model->id], ['class' => 'change-post']) ?> 

        <p class="intro">
            <span><?= Html::encode($model->name) ?> - </span>
            <?= Html::encode($model->info) ?>
        </p>
        <h3>География</h3>
        <p class="intro">
             <?= $model->geo ?>
        </p>   
        <h3>История</h3>
        <p class="intro">
            <?= $model->history ?>
        </p>
        <h3>Населенные пункты</h3>
        <p class="intro">
            <?= $model->cities ?>
        </p>
        <h3>Столица</h3>
        <p class="intro">
            <?= $model->capitalinfo ?>
        </p>
        <h3>Экономика</h3>
        <p class="intro">
            <?= $model->economic ?>
        </p>
        <h3>Транспорт</h3>
        <p class="intro">
            <?= $model->transport ?>
        </p>
        <h3>Ключевые объекты</h3>
        <p class="intro">
            <?= $model->objects ?>
        </p>
        <h3>Население</h3>
        <p class="intro">
            <?= $model->populataion ?>
        </p>
        <h3>Значение региона</h3>
        <p class="intro">
            <?= $model->importance ?>
        </p>

    </div>  

    <div class="col-md-4">
        <ul class="baseinfo">
            <?= Html::img('@web/'.$model->img, ['alt' => $model->name, 'class' => 'mainimage']) ?>   
            <li><span>Столица: </span> <?= Html::encode($model->capital) ?></li>
            <li><span>Округ: </span> <?= Html::encode($model->district) ?></li> 
            <li><span>Численность: </span> <?= Html::encode($model->amount) ?></li>
            <li><span>Примерная площадь: </span> <?= Html::encode($model->territory) ?></li>
            <li><span>Официальный язык: </span> <?= Html::encode($model->lang) ?></li>      
            <li><span>Глава региона: </span> <?= Html::encode($model->leader) ?></li>
            <li><span>Доминирующая религия: </span> <?= Html::encode($model->religion) ?></li>   
        </ul>
    </div>

</div>
