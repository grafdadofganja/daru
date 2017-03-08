<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\sqlite\Fractions */
/* @var $url string */
?>

<main class="row">
	<div class="personcategories">
		<div class="perslink">
		 	<?= Html::a( 
			 	'<figure>'
					.Html::img('@web'.$model->img, ['alt' => $model->name, 'class' => '']).
					'<figcaption>'.$model->name.'</figcaption>
				</figure>',	
			['user/view', 'id' => $model->id], ['class' => 'profile-link']) ?>			 	
		 </div>	
	</div>
</main>