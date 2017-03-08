<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\sqlite\Fractions */
/* @var $form ActiveForm */
?>

<div class="articles row"> 
        

    <div class="col-md-8">
        <h2><?= Html::encode($model->name) ?></h2> 
        <?= Html::a('Править', ['moder/change-fraction', 'id' => $model->id], ['class' => 'change-post']) ?> 

        <p class="intro">
            <span><?= Html::encode($model->fullname) ?> - </span>
            <?= Html::encode($model->info) ?>            
        </p>
        <h3>Возниковение</h3>
        <p class="intro">
            <?= Html::encode($model->bio) ?>
        </p> 
        <h3>Хронологическая лента</h3>
        <p class="intro">
            <?=$model->history ?>
        </p>
        <h3>Географическое положение</h3>
        <p class="intro">
            <?= Html::encode($model->geo) ?>
        </p>
        <h3>Особенности и внутреннее устройство</h3>

        <p class="intro">
            <?= Html::encode($model->system) ?>
        </p>
        <h3>Интересные факты</h3>
        <p class="intro">
            <?= Html::encode($model->facts) ?>
        </p>

    </div>  

    <div class="col-md-4">
        <ul class="baseinfo">
            <?= Html::img('@web/'.$model->img, ['alt' => $model->name, 'class' => 'mainimage']) ?>   
            <li><span>Официальное название: </span><?= Html::encode($model->fullname) ?></li>  
            <li><span>Численность: </span><?= Html::encode($model->population) ?></li>       
            <li><span>Штаб-квартира: </span><?= Html::encode($model->location) ?></li>
            <li><span>Языки: </span><?= Html::encode($model->lang) ?></li>
            <li><span>Примерное время возникновения: </span><?= Html::encode($model->birthday) ?></li>
            <li><span>Направление: </span><?= Html::encode($model->attitude) ?></li>
            <li><span>Лидер: </span><?= Html::encode($model->leader) ?></li>
            <li><span>Статус: </span><?= Html::encode($model->status) ?></li>
        </ul>
    </div>

</div>
