<?php
    use yii\helpers\Html;
?>
<div class="blok-heading">
    <div class="title-bg"> <h3 class="title-content"> Bolalar uchun  </h3> </div>
</div>


<ul class="list-grid clearfix">
    <?php
        foreach ($articles as $article) {
    ?>
            <li>
                <?= Html::a(
                        Html::img("@web/fotos/$article->image")."<p class='title'>$article->title</p>",
                        ['article/view', 'id' => $article->id], 
                        ['class' => '']
                    ) 
                ?>
                <span class="label label-default"> <time> <?=$article->date?></time> </span>
                <span class="label label-default"> Ko’rilgan <?=$article->views?$article->views:0?> </span>
            </li>
    <?php
        }
    ?>
</ul>

<div class="blok-footer"><?= Html::a('Barchasini ko\'rish', ['category/view'], ['class' => 'btn btn-grad']) ?></div>