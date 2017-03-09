<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\sqlite\Nations */
/* @var $form ActiveForm */
?>
<div class="nation">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'img') ?>
        <?= $form->field($model, 'name') ?>
        <?= $form->field($model, 'population') ?>
        <?= $form->field($model, 'place') ?>
        <?= $form->field($model, 'lang') ?>
        <?= $form->field($model, 'religion') ?>
        <?= $form->field($model, 'country') ?>
        <?= $form->field($model, 'relation') ?>
        <?= $form->field($model, 'origin') ?>
        <?= $form->field($model, 'info')->textarea(['rows' => '6']) ?>
        <?= $form->field($model, 'history')->textarea(['rows' => '6'])?>
        <?= $form->field($model, 'location')->textarea(['rows' => '6']) ?>
        <?= $form->field($model, 'life')->textarea(['rows' => '6']) ?>
        <?= $form->field($model, 'tradition')->textarea(['rows' => '6']) ?>
        <?= $form->field($model, 'facts')->textarea(['rows' => '6']) ?>
        <?= $form->field($model, 'tag') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- nation -->
