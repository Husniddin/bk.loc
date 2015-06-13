<?php
    use yii\helpers\Html;
?>
<section class="blok">
    <h3 class="title-sidebar"> <span class="glyphicon glyphicon-list"></span> Bolalar uchun</h3>
    <div class="left-menu">
        <ul>
            <?php
                foreach ($left1Menus as $left1Menu):
            ?>
                <li>
                    <?= Html::a($left1Menu->title, ['category/view', 'id' => $left1Menu->category_id], ['class' => '']) ?>
                </li>
            <?php
                endforeach;
            ?> 
        </ul>
    </div>
</section>

<section class="blok">
    <h3 class="title-sidebar"> <span class="glyphicon glyphicon-list"></span> Markazga oid </h3>
    <div class="left-menu">
        <ul>
            <?php
                foreach ($left2Menus as $left2Menu):
            ?>
                <li>
                    <?= Html::a($left2Menu->title, ['category/view', 'id' => $left2Menu->category_id], ['class' => '']) ?>
                </li>
            <?php
                endforeach;
            ?>
        </ul>
    </div>
</section>

<section class="blok">
    <h3 class="title-sidebar"> <span class="glyphicon glyphicon-list"></span> Boshqa bo'limlar </h3>
    <div class="left-menu">
        <ul>
            <?php
                foreach ($left3Menus as $left3Menu):
            ?>
                <li>
                    <?= Html::a($left3Menu->title, ['category/view', 'id' => $left3Menu->category_id], ['class' => '']) ?>
                </li>
            <?php
                endforeach;
            ?>
        </ul>
    </div>
</section>