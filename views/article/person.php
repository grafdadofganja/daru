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
        <h3>Биография</h3>
        <p class="intro">
            <?= Html::encode($model->bio) ?>
        </p>
        <h3>Отношения с Абдулем</h3>
        <p class="intro">
            <?= Html::encode($model->relation) ?>
        </p>
        <h3>Личная жизнь, увлечения</h3>
        <p class="intro">
            <?= Html::encode($model->life) ?>
        </p>
        <h3>Интересные факты</h3>
        <p class="intro"><?= Html::encode($model->facts) ?></p>

    </div>  

    <div class="col-md-4">
        <ul class="baseinfo">
            <?= Html::img('@web/img/'.$model->img, ['alt' => $model->name, 'class' => 'mainimage']) ?>   
            <li><span>Полное имя: </span><?= Html::encode($model->fullname) ?></li>
            <li><span>Также известен как: </span><?= Html::encode($model->nicks) ?></li>
            <li><span>Место жительства: </span><?= Html::encode($model->location) ?></li>
            <li><span>Пол: </span><?= Html::encode($model->gender) ?></li>
            <li><span>Дата рождения: </span><?= Html::encode($model->birthday) ?></li>
            <li><span>Вероисповедание: </span><?= Html::encode($model->religion) ?></a></li>
            <li><span>Положение: </span><?= Html::encode($model->attitude) ?></li>
            <li><span>Статус: </span><?= Html::encode($model->status) ?></li>
        </ul>
    </div>

</div>
