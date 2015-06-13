<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use common\models\Category;
use common\models\Menu;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Menu */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="menu-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'position')->dropDownList([ 'top' => 'Top', 'left1' => 'Left1', 'left2' => 'Left2', 'left3' => 'Left3', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'visible')->dropDownList([ '0', '1']) ?>

    <?= $form->field($model, 'icon')->textInput(['maxlength' => 100]) ?>

    <?=
        $form->field($model, 'parent_id')->dropDownList(
            ArrayHelper::map(
                Menu::find()
                ->where(['visible'=>Menu::VISIBLE])
                ->andWhere('parent_id IS NULL')
                ->orderBy('title')
                ->all(), 
                'id', 
                'title'),
            ['prompt'=>'Select...']
        );
    ?>

    <?=
        $form->field($model, 'category_id')->dropDownList(
            ArrayHelper::map(Category::find()->all(),'id','title'),
            ['prompt'=>'Select...']
        );
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
