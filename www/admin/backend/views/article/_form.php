<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use common\models\Category;
use yii\widgets\ActiveForm;
use vova07\imperavi\Widget;

/* @var $this yii\web\View */
/* @var $model app\models\Article */
/* @var $form yii\widgets\ActiveForm */
?>
<?php
    // echo Yii::$app->language;
    $this->registerCssFile("/vendor/bower/jquery-ui/themes/smoothness/jquery-ui.min.css");
    $this->registerJsFile('/vendor/bower/jquery-ui/jquery-ui.js');
    $this->registerJsFile('/vendor/bower/jquery-ui/ui/datepicker.js');
?>

<div class="article-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => 255]) ?>

    <?= 
        $form->field($model, 'anons')->widget(Widget::classname(), [
           'settings' => [
               // 'lang' => 'ru',
                'minHeight' => 100,
                'pastePlainText' => true,
                'buttonSource' => true,
                'plugins' => [
                    'clips',
                    'fullscreen'
                ],
           ]
        ]);
    ?>

    <?=
        $form->field($model, 'text')->widget(Widget::classname(), [
           'settings' => [
                'minHeight' => 300,
                'pastePlainText' => true,
                'buttonSource' => true,
                'plugins' => [
                    'imagemanager',
                    'filemanager',
                    'clips',
                    'fullscreen'
                ],
                'imageUpload' => Url::to(['/article/image-upload']),
                'imageManagerJson' => Url::to(['/article/images-get']),
                'fileManagerJson' => Url::to(['/article/files-get']),
                'fileUpload' => Url::to(['/article/file-upload'])
           ]
        ]);
    ?>
    <?php //echo $form->field($model, 'date')->textInput() ?>

    <?php 
        echo $form->field($model, 'date')->widget(\yii\jui\DatePicker::classname(), [
            'options'=> [
                // 'value'=>'2015-05-13',
                'class'=>'form-control'
            ],
            // 'language' => Yii::$app->language,
        ]) 
    ?>

    <?php //echo $form->field($model, 'views')->textInput() ?>

    <?= $form->field($model, 'visible')->dropDownList([ '0', '1']) ?>

    <?= $form->field($model, 'image')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'file')->textInput(['maxlength' => 100]) ?>

    <?php //echo $form->field($model, 'home_page')->dropDownList([ '0', '1', ], ['prompt' => '']) ?>
    <?= $form->field($model, 'home_page')->dropDownList([ '0', '1']) ?>

    <?php
        $categorys = Category::find()->all();
         
        $listData = ArrayHelper::map($categorys,'id','title');
         
        echo $form->field($model, 'category_id')->dropDownList(
                                        $listData,
                                        ['prompt'=>'Select...']);
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
