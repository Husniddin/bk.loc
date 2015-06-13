<?php
use yii\helpers\Html;
use app\components\SliderWidget;
use app\components\SloganWidget;
use app\components\TopMenuBarWidget;
// use yii\widgets\Breadcrumbs;
// use frontend\assets\AppAsset;
// use frontend\widgets\Alert;
// use app\components\TopMenuWidget;
// use app\components\MainMenuWidget;
// use app\components\FooterWidget;

/* @var $this \yii\web\View */
/* @var $content string */

// AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="firm, product, company, tashkent" />
	<meta name="description" content="Something about comp" />  
	<meta name="author" content="Muslim V">
	<META name="ROBOTS" content="INDEX,FOLLOW" />
    
    <!-- <title>My site title </title> -->
    <title><?= Html::encode($this->title) ?></title>
	
	<!-- <link href="css/default.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/flexslider.css" type="text/css">
	<link href="css/mystyle.css" rel="stylesheet" type="text/css"> -->

	<link rel="shortcut icon" type="image/x-icon" href="/img/favicon.ico">
    <?= Html::cssFile('/css/default.css') ?>
    <?= Html::cssFile('/css/flexslider.css') ?>
    <?= Html::cssFile('/css/mystyle.css') ?>

    <?= Html::jsFile('/js/jquery-2.0.0.min.js') ?>
    <?= Html::jsFile('/js/html5.js') ?>
    <?= Html::jsFile('/js/script.js') ?>
    <?= Html::jsFile('/js/jquery.flexslider.js') ?>

    <?php $this->head() ?>
</head>

<body>
	<?php $this->beginBody() ?>
	<!-- main wrap start -->
	<div class="main-wrap">

	    <!-- header start -->
	    <header id="header">

	        <!-- slogan  -->
	        <div class="container relative">
	        	<?= SloganWidget::widget(); ?>
			</div>
	        <!-- slogan // -->
	        
	        <div class="slider-top">
  			<!-- flex slider  -->
	        	<?= SliderWidget::widget(); ?>
	        <!-- flex slider //  -->
			</div>

	    </header>
	    <!-- header finish -->
	    <div class="clear"></div>
	    
	</div>
	<!-- main wrap finish -->

	<nav class="topmenu-bar">
        <!-- container  -->
        <div class="container">

            <?= TopMenuBarWidget::widget(); ?>

        </div>
        <!-- container // -->
    </nav>

	<?= $content ?>

	<!-- footer start -->
	<footer id="footer">
		<div class="container">
			<div class="footer-txt">
			All rights reserved. Copyright &copy; 2014 <?php echo $_SERVER['HTTP_HOST']; ?> <a href="admin/" target="_blank">/ admin </a><br />
			Developed by: <a href="http://qalam.uz">Qalam.uz</a> | Email: muslim1024@gmail.com 
			</div>
			<div class="counter"> 
	        Hit counter
			</div>
		</div>
	</footer>
	<!-- footer finish  -->
<!-- </div> -->


	<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>