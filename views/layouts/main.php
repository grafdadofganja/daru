<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="/daru/web/favicon.png" sizes="96x96">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    
    <div class="container filling">
        <div class="row">
        <?= Html::img('@web/img/header.jpg', ['alt' => 'Наш логотип', 'class' => 'titleimg']) ?>

        <?php

            NavBar::begin([
                'brandLabel' => Html::img('@web/img/rdawi.jpg', ['alt' => 'Рави Дару', 'class' => 'logo-img']),//'Рави Дару',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse',
                ],
            ]);
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav  navbar-right'],
                'items' => [
                    ['label' => 'Обитель', 'url' => ['/site/index']],
                    [
                        'label' => 'Статьи', 'items' => [
                            ['label' => 'Персонажи', 'url' => ['/article?category=person']],
                            ['label' => 'Регионы', 'url' => ['/article?category=region']],
                            ['label' => 'Народы', 'url' => ['/article?category=nation']],
                            ['label' => 'Фракции', 'url' => ['/article?category=fraction']],
                            ['label' => 'Локации', 'url' => ['/article?category=location']],
                            ['label' => 'Система образования', 'url' => ['/article?category=education']],
                            ['label' => 'Учения и религии', 'url' => ['/article?category=religion']],
                        ]
                    ],
                    [
                        'label' => 'Эпопея', 'items' => [
                            ['label' => 'Сезон 1', 'url' => ['/article/tale']],
                            ['label' => 'Сезон 2', 'url' => ['/article/tale']],
                            ['label' => 'Сезон 3', 'url' => ['/article/tale']],
                        ]
                    ],
                    ['label' => 'Прочее', 'url' => ['/site/update-price']],
                    [
                        'label' => 'Модератор', 'items' => [
                            ['label' => 'Эпопея', 'url' => ['/moder/tale']],
                            ['label' => 'Персонажи', 'url' => ['/moder/person']],
                            ['label' => 'Регионы', 'url' => ['/moder/region']],
                            ['label' => 'Народы', 'url' => ['/moder/nation']],
                            ['label' => 'Фракции', 'url' => ['/moder/fraction']],
                            ['label' => 'Локации', 'url' => ['/moder/location']],
                            ['label' => 'Система образования', 'url' => ['/moder/education']],
                            ['label' => 'Учения и религии', 'url' => ['/moder/religion']],
                            ['label' => 'Обновить теги', 'url' => ['/search/tags']],
                        ]
                    ],
                    /*
                    Yii::$app->user->isGuest ? (
                        ['label' => 'Login', 'url' => ['/site/login']]
                    ) : (
                        '<li>'
                        . Html::beginForm(['/site/logout'], 'post')
                        . Html::submitButton(
                            'Logout (' . Yii::$app->user->identity->username . ')',
                            ['class' => 'btn btn-link logout']
                        )
                        . Html::endForm()
                        . '</li>'
                    )
                    */
                ],
            ]);
            NavBar::end();

        ?>
        </div>


        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; zlapot, cherapot edition <?= date('Y') ?></p>

        <p class="pull-right">Revi Daru company &copy;</p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
