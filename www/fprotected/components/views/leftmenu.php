<?php
    use yii\helpers\Html;
?>
<section class="blok">
    <h3 class="title-sidebar"> <span class="glyphicon glyphicon-list"></span> Bolalar uchun</h3>
    <div class="left-menu">
        <?php
            echo $this->render('_hierarchy', ['menus'=>$left1Menus]);
        ?>
    </div>
</section>

<section class="blok">
    <h3 class="title-sidebar"> <span class="glyphicon glyphicon-list"></span> Markazga oid </h3>
    <div class="left-menu">
        <?php
            echo $this->render('_hierarchy', ['menus'=>$left2Menus]);
        ?>
    </div>
</section>

<section class="blok">
    <h3 class="title-sidebar"> <span class="glyphicon glyphicon-list"></span> Boshqa bo'limlar </h3>
    <div class="left-menu">
        <?php
            echo $this->render('_hierarchy', ['menus'=>$left3Menus]);
        ?>
    </div>
</section>