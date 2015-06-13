<?php
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
if (Yii::$app->controller->action->id === 'login') {
    echo $this->render(
        'main-login',
        ['content' => $content]
    );
} else {
    // dmstr\web\AdminLteAsset::register($this);
    // backend\assets\AppAsset::register($this);
    // $directoryAsset = Yii::$app->assetManager->getPublishedUrl('@bower') . '/admin-lte/dist';
    // $directoryAsset = '/';
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
    <body class="skin-blue">
    <?php $this->beginBody() ?>
    <div class="wrapper">
        
        <?= $this->render(
            'header.php'
        ) ?>

        <div class="wrapper row-offcanvas row-offcanvas-left">

            <?= $this->render(
                'left.php'
            )
            ?>

            <?= $this->render(
                'content.php',
                ['content' => $content]
            ) ?>

        </div>
    </div>

    <?php echo Html::jsFile('/vendor/bower/jquery/dist/jquery.js') ?>
    
    <?= Html::jsFile('/common/js/yii2/yii.js') ?>
    <?= Html::jsFile('/common/js/yii2/yii.gridView.js') ?>
    <?= Html::jsFile('/common/js/yii2/yii.activeForm.js') ?>
    <?= Html::jsFile('/common/js/yii2/yii.captcha.js') ?>
    <?= Html::jsFile('/common/js/yii2/yii.validation.js') ?>

    <?= Html::jsFile('/vendor/bower/bootstrap/dist/js/bootstrap.js') ?>
    <?= Html::jsFile('/vendor/bower/admin-lte/dist/js/app.min.js') ?>
    
    <?php $this->endBody() ?>
    </body>
    </html>
    <?php $this->endPage() ?>
<?php } ?>
