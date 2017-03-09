<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\sqlite\Regions */
/* @var $form ActiveForm */
?>
<div class="region">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'img') ?>
        <?= $form->field($model, 'name') ?>
        <?= $form->field($model, 'capital') ?>
        <?= $form->field($model, 'amount') ?>
        <?= $form->field($model, 'district') ?>
        <?= $form->field($model, 'territory') ?>
        <?= $form->field($model, 'lang') ?>
        <?= $form->field($model, 'leader') ?>
        <?= $form->field($model, 'religion') ?>
        <?= $form->field($model, 'info')->textarea(['rows' => '6']) ?>
        <?= $form->field($model, 'geo')->textarea(['rows' => '6']) ?>
        <?= $form->field($model, 'history')->textarea(['rows' => '6']) ?>
        <?= $form->field($model, 'cities')->textarea(['rows' => '6']) ?>
        <?= $form->field($model, 'capitalinfo')->textarea(['rows' => '6']) ?>
        <?= $form->field($model, 'economic')->textarea(['rows' => '6']) ?>
        <?= $form->field($model, 'transport')->textarea(['rows' => '6']) ?>
        <?= $form->field($model, 'objects')->textarea(['rows' => '6']) ?>
        <?= $form->field($model, 'populataion')->textarea(['rows' => '6']) ?>
        <?= $form->field($model, 'importance')->textarea(['rows' => '6']) ?>
        <?= $form->field($model, 'tag') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- region -->
