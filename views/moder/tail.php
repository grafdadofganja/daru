<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\sqlite\Tails */
/* @var $form ActiveForm */
?>
<div class="tail">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'chapter') ?>
        <?= $form->field($model, 'name') ?>    
        <?= $form->field($model, 'text')->textarea(['rows' => '25']) ?>
        <?= $form->field($model, 'description')->textarea(['rows' => '5']) ?>

        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- tail -->
