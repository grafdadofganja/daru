<?php

use yii\helpers\Html;

$id = 1;
?>

<div class="nav-right">
		<h2 class="subcat">Сезоны</h2>
		<p>Показано 4 сезона из 4</p>

		<div class="accordion">
		  <div class="accordion-item">
		    Первый сезон: Зарождение
		    <div class="type"></div>
		  </div>
		  <div class="data">
		   <ul>
		   		<?php foreach ($menu as $li): ?>
		   			<?php if($li->chapter == 1) { ?>
		   			<li><?= Html::a($li->name, ['article/tale', 'id' => $li->id]) ?></li>
		   			<?php } ?>
		   		<?php endforeach; ?>				
			</ul>
		  </div>
		   <div class="accordion-item">
		    Второй сезон: Расцвет
		     <div class="type"></div>
		  </div>
		  <div class="data">
		    <ul>
		    	<?php foreach ($menu as $li): ?>
		   			<?php if($li->chapter == 2) { ?>
		   			<li><?= Html::a($li->name, ['article/tale', 'id' => $li->id]) ?></li>
		   			<?php } ?>
		   		<?php endforeach; ?>	
		     </ul>
		  </div>
		  <div class="accordion-item">
		    Третий сезон: Уроки географии с Абдулем
		    <div class="type"></div>
		  </div>
		  <div class="data">
		   <ul>
		   		<?php foreach ($menu as $li): ?>
		   			<?php if($li->chapter == 3) { ?>
		   			<li><?= Html::a($li->name, ['article/tale', 'id' => $li->id]) ?></li>
		   			<?php } ?>
		   		<?php endforeach; ?>
		   	</ul>	
		  </div>
		  <div class="accordion-item">
		    Четвертый сезон: Свои―не свои, чужие―не чужие
		    <div class="type"></div>
		  </div>
		  <div class="data">
		   <ul>
		   		<?php foreach ($menu as $li): ?>
		   			<?php if($li->chapter == 4) { ?>
		   			<li><?= Html::a($li->name, ['article/tale', 'id' => $li->id]) ?></li>
		   			<?php } ?>
		   		<?php endforeach; ?>
		   	</ul>	
		  </div>
		</div>
	</div>