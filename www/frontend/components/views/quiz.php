<?php
    use yii\helpers\Html;
?>
<div class="blok-heading">
    <div class="title-bg"> <h3 class="title-content"> Bilimingizni sinab ko'ring </h3> </div>
</div>

<div class="row p7">
	<div class="col-sm-6">
		<div class="item-ask">
			<?= Html::img("@web/fotos/ask2.jpg") ?>
			<p class="caption">O'quvchi bolalar uchun testlar. <br> Bilimingizni sinab ko'ring</p>
			<?= Html::a('Testni boshlash (bolalar uchun)', ['#'], ['class' => 'ask-hover']) ?>
		</div>
	</div>
	<div class="col-sm-6">
		<div class="item-ask">
			<?= Html::img("@web/fotos/ask1.jpg") ?>
			<p class="caption">Ustoz va murabbiylar uchun test savollari <br> Bilimingizni sinab ko'ring</p>
			<?= Html::a('Testni boshlash (kattalar uchun)', ['#'], ['class' => 'ask-hover']) ?>
		</div>
	</div>
</div>