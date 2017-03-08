<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\sqlite\Locations */
/* @var $form ActiveForm */
?>
<div class="locations">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'img') ?>
        <?= $form->field($model, 'name') ?>
        <?= $form->field($model, 'location') ?>
        <?= $form->field($model, 'leader') ?>
        <?= $form->field($model, 'popdivision') ?>
        <?= $form->field($model, 'type') ?>
        <?= $form->field($model, 'popamount') ?>
        <?= $form->field($model, 'primaryobj') ?>
        <?= $form->field($model, 'aim') ?>
        <?= $form->field($model, 'status') ?>
        <?= $form->field($model, 'info')->textarea(['rows' => '6']) ?>
        <?= $form->field($model, 'geo')->textarea(['rows' => '6']) ?>
        <?= $form->field($model, 'chrono')->textarea(['rows' => '6']) ?>
        <?= $form->field($model, 'leadership')->textarea(['rows' => '6']) ?>
        <?= $form->field($model, 'population')->textarea(['rows' => '6']) ?>
        <?= $form->field($model, 'transport')->textarea(['rows' => '6']) ?>
        <?= $form->field($model, 'life')->textarea(['rows' => '6']) ?>
        <?= $form->field($model, 'arch')->textarea(['rows' => '6']) ?>
        <?= $form->field($model, 'tag') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- locations -->
