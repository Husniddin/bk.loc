<?php
    use yii\helpers\Html;
?>
<div class="blok-heading">
    <div class="title-bg"> <h3 class="title-content"> So’nggi xabarlar </h3> </div>
</div>

<div class="row">
    <div class="col-sm-6">

        <article class="news-main">
            <?php
                foreach ($mainnews as $news) {
                    if (!$news->home_page)
                        continue;
            ?>
                    <?= Html::img("@web/fotos/$news->image") ?>
                    <h4><?=$news->title?></h4>
                    <p><?=$news->anons?></p>
                    <p>
                        <?= Html::a('Batafsil', ['news/view', 'id' => $news->id], ['class' => 'btn btn-grad']) ?>
                        <span class="label label-default"> <?=$news->category_id?> </span>
                        <span class="label label-default"> <time> <?=$news->date?></time> </span>
                        <span class="label label-default"> Ko’rilgan <?=$news->views?$news->views:0?> </span>
                    </p>
            <?php
                }
            ?>
        </article>
    </div>
    <div class="col-sm-6">
        <ul class="list-news">
            <?php
                foreach ($mainnews as $news) {
                    if ($news->home_page)
                        continue;
            ?>
                    <li>
                        <?= Html::a(Html::img("@web/fotos/$news->image"), ['news/view', 'id' => $news->id], ['class' => '']) ?>
                        <p><?= Html::a($news->title, ['news/view', 'id' => $news->id], ['class' => '']) ?></p>
                        <span class="label label-default"> <time> <?=$news->date?></time> </span>
                        <span class="label label-default"> Ko’rilgan <?=$news->views?$news->views:0?> </span>
                    </li>
            <?php
                }
            ?>
        </ul>
    </div>
</div>