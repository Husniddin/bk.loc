<?php

// use yii\helpers\Html;
// use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Category */

$this->title = $title;
// $this->params['breadcrumbs'][] = ['label' => 'Categories', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
?>

<section class="blok min-h">
    <div class="blok-heading">
        <div class="title-bg"> <h3 class="title-content"> Maqolalar </h3> </div>
    </div>
    <?php
        foreach ($articles as $article):
    ?>
        <article class="articles">
            <img src="fotos/<?=$article->image?>" align="left" />
            <h5><a href="<?=$article->id?>"><?=$article->title?></a></h5>
            <span class="label label-default"> <time><?=$article->date?></time> </span>
            <span class="label label-default"> Ko’rilgan <?=$article->views?$article->views:0?> </span>
            <p><?=$article->anons?></p>
            <p><a href="#">Davomi &raquo; </a> </p>
        </article>
    <?php
        endforeach;
    ?>
    <div class="center">
        <ul class="pagination">
          <li><a href="#">&laquo;</a></li>
          <li class="active"><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li><a href="#">&raquo;</a></li>
        </ul>
    </div>

</section>