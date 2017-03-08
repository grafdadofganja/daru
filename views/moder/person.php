<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\sqlite\Persons */
/* @var $form ActiveForm */
?>
<div class="person">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'img') ?>
        <?= $form->field($model, 'name') ?>
        <?= $form->field($model, 'fullname') ?>
        <?= $form->field($model, 'nicks') ?>
        <?= $form->field($model, 'location') ?>
        <?= $form->field($model, 'gender') ?>
        <?= $form->field($model, 'birthday') ?>
        <?= $form->field($model, 'religion') ?>
        <?= $form->field($model, 'attitude') ?>
        <?= $form->field($model, 'status') ?>
        <?= $form->field($model, 'info')->textarea(['rows' => '6']) ?>
        <?= $form->field($model, 'bio')->textarea(['rows' => '6']) ?>
        <?= $form->field($model, 'relation')->textarea(['rows' => '6']) ?>
        <?= $form->field($model, 'life')->textarea(['rows' => '6']) ?>
        <?= $form->field($model, 'facts')->textarea(['rows' => '6']) ?>
        <?= $form->field($model, 'tag') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- person -->
