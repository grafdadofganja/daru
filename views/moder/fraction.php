<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\sqlite\Fractions */
/* @var $form ActiveForm */

$this->title = "Панель модератора";
?>
<div class="fraction">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'img') ?>
        <?= $form->field($model, 'name') ?>
        <?= $form->field($model, 'fullname') ?>
        <?= $form->field($model, 'population') ?>
        <?= $form->field($model, 'location') ?>
        <?= $form->field($model, 'lang') ?>
        <?= $form->field($model, 'birthday') ?>
        <?= $form->field($model, 'attitude') ?>
        <?= $form->field($model, 'status') ?>
        <?= $form->field($model, 'leader') ?>
        <?= $form->field($model, 'info')->textarea(['rows' => '6']) ?>
        <?= $form->field($model, 'bio')->textarea(['rows' => '6']) ?>
        <?= $form->field($model, 'history')->textarea(['rows' => '6']) ?>
        <?= $form->field($model, 'geo')->textarea(['rows' => '6']) ?>
        <?= $form->field($model, 'system')->textarea(['rows' => '6']) ?>
        <?= $form->field($model, 'facts')->textarea(['rows' => '6']) ?>
        <?= $form->field($model, 'tag') ?>

        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- fraction -->
