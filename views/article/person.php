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
        <?= Html::a('Править', ['moder/change-person', 'id' => $model->id], ['class' => 'change-post']) ?> 

        <p class="intro">
            <span><?= Html::encode($model->fullname) ?> - </span>
            <?= $model->info ?>
        </p>
        <h3>Биография</h3>
        <p class="intro">
            <?= $model->bio ?>
        </p>
        <?php if($model->tag != 'abdul') { ?>
            <h3>Отношения с Абдулем</h3>
        <?php } else { ?>
             <h3>Отношения с миром</h3>
        <?php } ?>
        <p class="intro">
            <?= $model->relation ?>
        </p>
        <h3>Личная жизнь, увлечения</h3>
        <p class="intro">
            <?= $model->life ?>
        </p>
        <h3>Интересные факты</h3>
        <p class="intro"><?= $model->facts ?></p>

    </div>  

    <div class="col-md-4">
        <ul class="baseinfo">
            <?= Html::img('@web/'.$model->img, ['alt' => $model->name, 'class' => 'mainimage']) ?>   
            <li><span>Полное имя: </span><?= $model->fullname ?></li>
            <li><span>Также известен как: </span><?= $model->nicks ?></li>
            <li><span>Место жительства: </span><?= $model->location ?></li>
            <li><span>Пол: </span><?= $model->gender ?></li>
            <li><span>Дата рождения: </span><?= $model->birthday ?></li>
            <li><span>Вероисповедание: </span><?= $model->religion ?></a></li>
            <li><span>Положение: </span><?= $model->attitude ?></li>
            <li><span>Статус: </span><?= $model->status ?></li>
        </ul>
    </div>

</div>
