<?php
use backend\assets\AppAsset;
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */

// dmstr\web\AdminLteAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>

    <?= Html::cssFile('/vendor/fortawesome/font-awesome/css/font-awesome.min.css') ?>
    <?= Html::cssFile('/vendor/bower/bootstrap/dist/css/bootstrap.css') ?>
    <?= Html::cssFile('/vendor/bower/admin-lte/dist/css/AdminLTE.min.css') ?>
    <?= Html::cssFile('/vendor/bower/admin-lte/dist/css/skins/_all-skins.min.css') ?>
    
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="login-page">

<?php $this->beginBody() ?>

    <?= $content ?>
 	
 	<?= Html::jsFile('/vendor/bower/jquery/dist/jquery.js') ?>
    <?= Html::jsFile('/common/js/yii2/yii.js') ?>
    <?= Html::jsFile('/common/js/yii2/yii.validation.js') ?>
    <?= Html::jsFile('/common/js/yii2/yii.activeForm.js') ?>
    <?= Html::jsFile('/vendor/bower/bootstrap/dist/js/bootstrap.js') ?>
    <?= Html::jsFile('/vendor/bower/admin-lte/dist/js/app.min.js') ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
