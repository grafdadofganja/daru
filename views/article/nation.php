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
        <?= Html::a('Править', ['moder/change-nation', 'id' => $model->id], ['class' => 'change-post']) ?> 

        <p class="intro">
            <span><?= Html::encode($model->name) ?> - </span>
            <?= Html::encode($model->info) ?>
        </p>
        <h3>История</h3>
        <p class="intro">
            <?= $model->history ?>
        </p>   
        <h3>Расселение</h3>
        <p class="intro">
            <?= $model->location ?>
        </p>
        <h3>Образ жизни, градостроение</h3>
        <p class="intro">
            <?= $model->life ?>
        </p>
        <h3>Традиционные занятия</h3>
        <p class="intro">
            <?= $model->tradition ?>
        </p>
        <h3>Особенности</h3>
        <p class="intro">
            <?= $model->facts ?>
        </p>

    </div>  

    <div class="col-md-4">
        <ul class="baseinfo">
            <?= Html::img('@web/'.$model->img, ['alt' => $model->name, 'class' => 'mainimage']) ?>   
            <li><span>Численность: </span><?= Html::encode($model->population) ?></li>       
            <li><span>Расселение: </span><?= Html::encode($model->place) ?></li>
            <li><span>Родной язык: </span><?= Html::encode($model->lang) ?></li>     
            <li><span>Религия: </span><?= Html::encode($model->religion) ?></li>
            <li><span>Титульное государство: </span><?= Html::encode($model->country) ?></li>
            <li><span>Отношение к Абдуловере: </span><?= Html::encode($model->relation) ?></li>
            <li><span>Происхождение: </span><?= Html::encode($model->origin) ?></li>
        </ul>
    </div>

</div>
