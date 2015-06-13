<?php
    use yii\helpers\Html;
?>
<div class="blok-heading">
    <div class="title-bg"> <h3 class="title-content"> O’quv kurslarimiz </h3> </div>
</div>

<div class="row mt15 pr10 pl10">
    <?php
        foreach ($courses as $course) {
    ?>
            <div class="col-xs-3"> 
                <!-- kurs item -->
                <div class="item-kurs">
                    <div class="img-holder">
                        <?= Html::a($course->anons, ['course/view', 'id' => $course->id], ['class' => 'kurs-hover']) ?>
                        <?= Html::img("@web/fotos/$course->image") ?>
                    </div>
                    <h3>
                        <?= Html::a($course->title, ['course/view', 'id' => $course->id]) ?>
                    </h3>
                </div>
                <!-- kurs item // -->
            </div>
    <?php
        }
    ?>
</div>

<div class="blok-footer"><?= Html::a('Barchasini ko\'rish', ['course/index'], ['class'=>'btn btn-grad']) ?></div>