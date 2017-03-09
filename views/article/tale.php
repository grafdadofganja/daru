<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\sqlite\Fractions */
/* @var $form ActiveForm */

$this->title = $model->name;
?>

<main class="row tales">
	<div class="col-md-5">
		<?= $this->render('accord/_tails.php') ?>

	</div>

	<div class="col-md-7">
		<div class="epo">

	<h2><?= Html::encode($model->name) ?></h2>
	<?= Html::a('Править', ['moder/change-tale', 'id' => $model->id], ['class' => 'change-post']) ?> 
	<p>
		<?= $model->text ?>
	</p>
	<?= Html::a('Следующая глава', ['article/tale', 'id' => ++$model->id], ['class' => 'next']) ?> 

</div>
	</div> 

</main>