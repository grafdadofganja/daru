<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\sqlite\Fractions */
/* @var $url string */
?>

<main class="row">
	<div class="personcategories">
		<div class="perslink">
			<?php foreach ($model as $category): ?>
				<?php $img = '@web/'.$category->img; ?>
			 	<?= Html::a( 
				 	'<figure>'
						.Html::img($img, ['alt' => $category->name, 'class' => '']).
						'<figcaption>'.$category->name.'</figcaption>
					</figure>',	
				[$url, 'id' => $category->id], ['class' => 'profile-link']) ?>		
			<?php endforeach; ?>	 	
		 </div>	
	</div>
</main>