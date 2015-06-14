<?php
use yii\helpers\Html;
// use yii\widgets\Breadcrumbs;
// use frontend\assets\AppAsset;
// use frontend\widgets\Alert;
use app\components\TopMenuWidget;
use app\components\MainMenuWidget;
use app\components\FooterWidget;

/* @var $this \yii\web\View */
/* @var $content string */

// AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <?= Html::cssFile('/css/bootstrap/bootstrap.css') ?>
    <?= Html::cssFile('/css/default.css') ?>
    <?= Html::cssFile('/css/mystyle.css') ?>
    <?= Html::cssFile('/css/fancybox/source/jquery.fancybox.css?v=2.1.5') ?>

    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>
    <!-- main wrap start -->
	<div class="main-wrap">

		<!-- header  -->
		<header id="header" class="clearfix">
			<?= TopMenuWidget::widget(); ?>
		</header>
		<!-- header // -->

		<!-- main -->
		<section class="main">
			<div class="slider-container">
			</div>
			<div class="container">				
				<?= MainMenuWidget::widget(); ?>
			</div>
		</section>
		<!-- // main -->

		<?= $content ?>

		<!-- footer start -->
		<footer id="footer">
			<div class="container">
				<?= FooterWidget::widget(); ?>
			</div>
		</footer>
		<!-- footer finish  -->
	</div>
	<!-- main wrap finish -->

	<?= Html::jsFile('/vendor/bower/jquery/dist/jquery.js') ?>
    <?= Html::jsFile('/common/js/yii2/yii.js') ?>
    <?= Html::jsFile('/common/js/yii2/yii.gridView.js') ?>
    <?= Html::jsFile('/common/js/yii2/yii.activeForm.js') ?>
    <?= Html::jsFile('/common/js/yii2/yii.captcha.js') ?>
    <?= Html::jsFile('/common/js/yii2/yii.validation.js') ?>
    <?= Html::jsFile('/js/fancybox/source/jquery.fancybox.js?v=2.1.5') ?>
    <?= Html::jsFile('/js/jquery.jcarousellite.min.js') ?>
    <?= Html::jsFile('/js/html5.js') ?>
    <?= Html::jsFile('/js/script.js') ?>
    <?= Html::jsFile('/js/myscript.js') ?>
    <?= Html::jsFile('/js/bootstrap/bootstrap.js') ?>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
