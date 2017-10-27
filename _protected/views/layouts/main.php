<?php
/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,700' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="/img/favicon.fw.png" type="image/x-icon" />

    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="wrap">
    <div class="row bottom_margin_20">
        <div class="contenedor_cabecera_roja_telefono col-md-12">
            <h4><span class="glyphicon glyphicon-earphone" style="padding-right: 10px"></span>0381 4282724</h4>
        </div>
    </div>
    <?php
    if(!Yii::$app->user->isGuest){
        NavBar::begin([
            'brandLabel' => Yii::t('app', "Administracion Quinituc"),
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => 'navbar-default navbar-fixed-top',
            ],
        ]);

        // everyone can see Home page
        $menuItems[] = ['label' => Yii::t('app', 'Home'), 'url' => ['/site/index']];

        // we do not need to display About and Contact pages to employee+ roles
        if (!Yii::$app->user->can('employee')) {
            $menuItems[] = ['label' => Yii::t('app', 'About'), 'url' => ['/site/about']];
            $menuItems[] = ['label' => Yii::t('app', 'Contact'), 'url' => ['/site/contact']];
        }

        // display Users to admin+ roles
        if (Yii::$app->user->can('admin')){
            $menuItems[] = ['label' => Yii::t('app', 'Users'), 'url' => ['/user/index']];
            $menuItems[] = ['label' => Yii::t('app', 'Quiniela'), 'url' => ['/tombola/index']];
            $menuItems[] = ['label' => Yii::t('app', 'Numeros Varios'), 'url' => ['/numeros-varios/index']];
            $menuItems[] = ['label' => Yii::t('app', 'Banners'), 'url' => ['/banner/index']];
        }

        // display Logout to logged in users
        if (!Yii::$app->user->isGuest) {
            $menuItems[] = [
                'label' => Yii::t('app', 'Logout'). ' (' . Yii::$app->user->identity->username . ')',
                'url' => ['/site/logout'],
                'linkOptions' => ['data-method' => 'post']
            ];
        }

        // display Signup and Login pages to guests of the site
        if (Yii::$app->user->isGuest) {
            $menuItems[] = ['label' => Yii::t('app', 'Signup'), 'url' => ['/site/signup']];
            $menuItems[] = ['label' => Yii::t('app', 'Login'), 'url' => ['/site/login']];
        }

        echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right'],
            'items' => $menuItems,
        ]);

        NavBar::end();
    }
    ?>

    <div class="container" style="padding-top: 0px">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>
<div class="container footer_quinituc" >
    <p class="pull-left" style="padding-left: 15px">Todos los Derechos Reservados / QUINITUC 2017 <a class="face_icon" href="https://www.facebook.com/QuiniTuccom-136939513520005/" target="_blank"> <img src="../img/fb-icon.png" alt=""></a></p>
    <!-- <p class="pull-right"><?= Yii::powered() ?></p> -->
</div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
