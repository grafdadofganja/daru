<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\sqlite\Religions */
/* @var $form ActiveForm */

$this->title = "Панель модератора";
?>
<div class="religion">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'img') ?>
        <?= $form->field($model, 'name') ?>
        <?= $form->field($model, 'fullname') ?>
        <?= $form->field($model, 'popamount') ?>
        <?= $form->field($model, 'holyplace') ?>
        <?= $form->field($model, 'lang') ?>
        <?= $form->field($model, 'birthday') ?>
        <?= $form->field($model, 'aim') ?>
        <?= $form->field($model, 'god') ?>
        <?= $form->field($model, 'book') ?>    
        <?= $form->field($model, 'info')->textarea(['rows' => '6']) ?>
        <?= $form->field($model, 'history')->textarea(['rows' => '6']) ?>
        <?= $form->field($model, 'science')->textarea(['rows' => '6']) ?>
        <?= $form->field($model, 'population')->textarea(['rows' => '6']) ?>
        <?= $form->field($model, 'persons')->textarea(['rows' => '6']) ?>
        <?= $form->field($model, 'defect')->textarea(['rows' => '6']) ?>
        <?= $form->field($model, 'facts')->textarea(['rows' => '6']) ?>
        <?= $form->field($model, 'tag') ?>
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- religion -->
