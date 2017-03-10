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
        <?= Html::a('Править', ['moder/change-location', 'id' => $model->id], ['class' => 'change-post']) ?> 

        <p class="intro">
            <span><?= $model->name ?> - </span>
            <?= $model->info ?>
        </p>
        <h3>Физико-географическая характеристика</h3>   
        <p class="intro">
            <?= Html::encode($model->geo) ?>
        </p>
        <h3>Хронология</h3>
        <p class="intro">
            <?= $model->chrono ?>
        </p>
        <h3>Руководство</h3>
        <p class="intro">
            <?= Html::encode($model->leadership) ?>
        </p>
        <h3>Население</h3>
        <p class="intro">
            <?= Html::encode($model->population) ?>
        </p>
        <h3>Транспорт</h3>
        <p class="intro">
            <?= $model->transport ?>
        </p>
        <h3>Образование, занятия, устройство</h3>
        <p class="intro">
            <?= Html::encode($model->life) ?>
        </p>
        <h3>Архитектура</h3>
        <p class="intro">
            <?= Html::encode($model->arch) ?>
        </p>

    </div>  

    <div class="col-md-4">
        <ul class="baseinfo">
            <?= Html::img('@web/'.$model->img, ['alt' => $model->name, 'class' => 'mainimage']) ?>   
            <li><span>Географическое положение: </span><?= Html::encode($model->location) ?></li>
            <li><span>Управляющий: </span><?= Html::encode($model->leader) ?></li>
            <li><span>Население: </span><?= Html::encode($model->popdivision) ?></li>
            <li><span>Тип: </span><?= Html::encode($model->type) ?></li>
            <li><span>Численность населения: </span><?= Html::encode($model->popamount) ?></li>
            <li><span>Ключевые объекты: </span><?= Html::encode($model->primaryobj) ?></li>
            <li><span>Предназначение: </span><?= Html::encode($model->aim) ?></li>
            <li><span>Статус: </span><?= Html::encode($model->status) ?></li>
        </ul>
    </div>

</div>
