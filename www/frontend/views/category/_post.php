<?php
	use yii\helpers\Html;
?>
<article class="articles">
	<?= Html::img('@web/fotos/'.$model->image, ['align' => 'left']) ?>
    <h5>
    	<?= Html::a($model->title, ['article/view', 'id' => $model->id], ['class' => '']) ?>
    </h5>
    <span class="label label-default"> <time><?=Html::encode($model->date)?></time> </span>
    <span class="label label-default"> Ko’rilgan <?=$model->views?Html::encode($model->views):0?> </span>
    <p><?=$model->anons?></p>
    <p>
    	<?= Html::a('Davomi &raquo;', ['article/view', 'id' => $model->id], ['class' => '']) ?>
    </p>
</article>