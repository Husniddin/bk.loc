<?php
    use yii\helpers\Html;
?>
<div class="blok-heading">
    <div class="title-bg"> <h3 class="title-content"> Respublika tadbirlari </h3> </div>
</div>

<div class="row">
    <div class="col-sm-6">
        <article class="news-main">
            <?php
                foreach ($activities as $activity) {
                    if (!$activity->home_page)
                        continue;
            ?>
                    <?= Html::img("@web/fotos/$activity->image") ?>
                    <h4><?=$activity->title?></h4>
                    <p><?=$activity->anons?></p>
                    <p>
                        <?= Html::a('Batafsil', ['activity/view', 'id' => $activity->id], ['class' => '']) ?>
                        <span class="label label-default"> <?=$activity->category_id?> </span>
                        <span class="label label-default"> <time> <?=$activity->date?></time> </span>
                        <span class="label label-default"> Ko’rilgan <?=$activity->views?$activity->views:0?> </span>
                    </p>
            <?php
                }
            ?>
        </article>
    </div>
    <div class="col-sm-6">
        <ul class="list-news">
            <?php
                foreach ($activities as $activity) {
                    if ($activity->home_page)
                        continue;
            ?>
                    <li>
                        <?= Html::a(Html::img("@web/fotos/$activity->image"), ['activity/view', 'id' => $activity->id], ['class' => '']) ?>
                        <p><?= Html::a($activity->title, ['activity/view', 'id' => $activity->id], ['class' => '']) ?></p>
                        <span class="label label-default"> <time> <?=$activity->date?></time> </span>
                        <span class="label label-default"> Ko’rilgan <?=$activity->views?$activity->views:0?> </span>
                    </li>
            <?php
                }
            ?>
        </ul>
    </div>
</div>