<?php

use yii\helpers\Html;

$id = 1;
?>

<div class="nav-right">
		<h2 class="subcat">Сезоны</h2>
		<p>Показано 3 сезона из 3</p>

		<div class="accordion">
		  <div class="accordion-item">
		    Первый сезон: Зарождение
		    <div class="type"></div>
		  </div>
		  <div class="data">
		   <ul>
				<li><?= Html::a('Пролог', ['article/tale', 'id' => 2]) ?></li>
				<li><?= Html::a('1. Знакомство и предпосылки', ['article/tale', 'id' =>3]) ?></li>
				<li><?= Html::a('2. Великое начало и первые враги', ['article/tale', 'id' => 4]) ?></li>
				<li><?= Html::a('3. Рождение королевы', ['article/tale', 'id' => 5]) ?></li>
				<li><?= Html::a('4. Великая сеча с ваххабитами', ['article/tale', 'id' => 6]) ?></li>
				<li><?= Html::a('5. Те самые геи-ниггеры с далекого космоса', ['article/tale', 'id' => 7]) ?></li>
				<li><?= Html::a('6. Впереди долгая дорога', ['article/tale', 'id' => 8]) ?></li>
				<li><?= Html::a('7. Курцы-Сити', ['article/tale', 'id' => 9]) ?></li>
				<li><?= Html::a('8. И в раю не всегда рай', ['article/tale', 'id' => 10]) ?></li>
				<li><?= Html::a('9. Первая встреча с маслятами', ['article/tale', 'id' => 11]) ?></li>
				<li><?= Html::a('10. Расшатывание царящей гегемонии', ['article/tale', 'id' => 12]) ?></li>
				<li><?= Html::a('11. Белая курцовская полоса', ['article/tale', 'id' => 13]) ?></li>
				<li><?= Html::a('12. Раскол', ['article/tale', 'id' => 14]) ?></li>
				<li><?= Html::a('13. Небо смеркается', ['article/tale', 'id' => 15]) ?></li>
				<li><?= Html::a('14. Горы людей, моря крови', ['article/tale', 'id' => 16]) ?></li>
				<li><?= Html::a('Эпилог', ['article/tale', 'id' => 17]) ?></li>
			</ul>
		  </div>
		   <div class="accordion-item">
		    Второй сезон: Расцвет
		     <div class="type"></div>
		  </div>
		  <div class="data">
		    <ul>
		    	<li><?= Html::a('Вместо вступления', ['article/tale', 'id' => $id]) ?></li>
		    	<li><?= Html::a('Часть первая. Лицо закона и порядка. Прошу любить и не жаловаться', ['article/tale', 'id' => $id]) ?></li>
		    	<li><?= Html::a('Часть вторая. Пробуждение амазонок', ['article/tale', 'id' => $id]) ?></li>
		    	<li><?= Html::a('Часть третья. Крысы среди нас', ['article/tale', 'id' => $id]) ?></li>
		    	<li><?= Html::a('Часть четвёртая. Без пахана и жизнь не та', ['article/tale', 'id' => $id]) ?></li>
		    	<li><?= Html::a('Часть пятая. Слава рабочему классу!', ['article/tale', 'id' => $id]) ?></li>
		    	<li><?= Html::a('Часть шестая. Проверка на вшивость в действии', ['article/tale', 'id' => $id]) ?></li>
		    	<li><?= Html::a('Часть седьмая. Să trăiască Mike!', ['article/tale', 'id' => $id]) ?></li>
		    	<li><?= Html::a('Часть восьмая. Задание второе. Конкурc', ['article/tale', 'id' => $id]) ?></li>
		    	<li><?= Html::a('Часть девятая. Ритуал', ['article/tale', 'id' => $id]) ?></li>
		    	<li><?= Html::a('Часть десятая. Угроза с Запада', ['article/tale', 'id' => $id]) ?></li>
		    	<li><?= Html::a('Часть одиннадцатая. Наши в беде или Почему какушата так важны', ['article/tale', 'id' => $id]) ?></li>
		    	<li><?= Html::a('Часть двенадцатая. Последний тест Членина', ['article/tale', 'id' => $id]) ?></li>
		    	<li><?= Html::a('Часть тринадцатая. Не всем дано быть матерями', ['article/tale', 'id' => $id]) ?></li>
		    	<li><?= Html::a('Часть четырнадцатая. Расследование', ['article/tale', 'id' => $id]) ?></li>
		    	<li><?= Html::a('Часть пятнадцатая. Канализационный "майдан', ['article/tale', 'id' => $id]) ?></li>
		    	<li><?= Html::a('Часть шестнадцатая. Зелёный змий – враг мой!', ['article/tale', 'id' => $id]) ?></li>
		    	<li><?= Html::a('Часть семнадцатая. Оборона республики, первый фронт', ['article/tale', 'id' => $id]) ?></li>
		    	<li><?= Html::a('Часть восемнадцатая. Оборона республики, второй фронт', ['article/tale', 'id' => $id]) ?></li>
		    	<li><?= Html::a('Часть девятнадцатая. Падение Саида', ['article/tale', 'id' => $id]) ?></li>
		    	<li><?= Html::a('Часть двадцатая. Пора выйти из руин', ['article/tale', 'id' => $id]) ?></li>
		     </ul>
		  </div>
		  <div class="accordion-item">
		    Третий сезон: Уроки географии с Абдулем
		    <div class="type"></div>
		  </div>
		  <div class="data">
		   <ul>
		   		<li><?= Html::a('Пролог', ['article/tale', 'id' => $id]) ?></li>
		   		<li><?= Html::a('Часть первая. Северная угроза', ['article/tale', 'id' => $id]) ?></li>
		   		<li><?= Html::a('Часть вторая. Апчхисарайская катастрофа', ['article/tale', 'id' => $id]) ?></li>
		   		<li><?= Html::a('Часть третья. Остатки поверженных. Балатонский кошмар', ['article/tale', 'id' => $id]) ?></li>
		   		<li><?= Html::a('Часть четвёртая. Гражданская война в миниатюре', ['article/tale', 'id' => $id]) ?></li>
		   		<li><?= Html::a('Часть пятая. Тайна украденного "Капитала"', ['article/tale', 'id' => $id]) ?></li>
		   		<li><?= Html::a('Часть шестая. Связующее звено', ['article/tale', 'id' => $id]) ?></li>
		   		<li><?= Html::a('Новогодний выпуск', ['article/tale', 'id' => $id]) ?></li>
		   		<li><?= Html::a('Часть седьмая. Дань памяти', ['article/tale', 'id' => $id]) ?></li>
		   		<li><?= Html::a('Часть восьмая. Любовь и зелень', ['article/tale', 'id' => $id]) ?></li>
		   		<li><?= Html::a('Часть девятая. Любовь зла ― полюбишь и...', ['article/tale', 'id' => $id]) ?></li>
		   		<li><?= Html::a('Часть десятая. Добро пожаловать домой!', ['article/tale', 'id' => $id]) ?></li>
		   		<li><?= Html::a('Часть одиннадцатая. Турнир', ['article/tale', 'id' => $id]) ?></li>
		  </div>
		</div>
	</div>