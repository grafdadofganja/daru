<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\sqlite\Fractions */
/* @var $url string */
?>

<main class="row">
	<div class="col-md-12">
		<h2 class="title">Персонажи вселенной Дару</h2>
		<div class="personcategories">			
			<?php foreach ($model as $category): ?>
				<div class="perslink col-md-6 col-lg-4">
					<?php $img = '@web/'.$category->img; ?>
				 	<?= Html::a( 
					 	'<figure>'
							.Html::img($img, ['alt' => $category->name, 'class' => '']).
							'<figcaption>'.$category->name.'</figcaption>
						</figure>',	
					[$url, 'id' => $category->id], ['class' => 'profile-link']) ?>		
				</div>	
			<?php endforeach; ?>	 				 
		</div>
	</div>
</main>