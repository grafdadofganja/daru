<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\sqlite\Fractions */
/* @var $form ActiveForm */

$this->title = $model->name;
?>

<main class="row">
	<div class="col-md-5">
		<?= $this->render('accord/_tails.php') ?>

	</div>

	<div class="col-md-7">
		<div class="epo">

	<h2><?= Html::encode($model->name) ?></h2>
	<p>
		<?= Html::encode($model->text) ?>
	</p>

</div>
	</div> 

</main>