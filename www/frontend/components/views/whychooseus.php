<?php
    use yii\helpers\Html;
?>
<div class="blok-title text-center">
    <h2 class="text-title">Why choose us WhyChooseUsWidget</h2>
    <h3 class="text-lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, <br> sed diem nonummy nibh euismod tincidunt ut lacreet</h3>
</div>

<ul class="list-num">
    <?php
        $i = 1;
        foreach ($advantages as $advantage) {
    ?>        
        <li> 
            <ins><?=$i++?></ins>
            <span> <b><?=$advantage->title?></b> <br>
            <?=$advantage->description?> 
            </span>
        </li>
    <?php
        }
    ?>
</ul>