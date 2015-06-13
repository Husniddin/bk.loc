<?php
    use yii\helpers\Html;
?>
<ul class="topmenu">
    <?php
        foreach ($menus as $menu):
    ?>
        <li class="active">
            <?= Html::a($menu->title, ['category/view', 'id' => $menu->category_id], ['class' => '']) ?>
            <?php
                if ($menu->childMenus) {
                        echo "<ul>";
                   foreach ($menu->childMenus as $childMenus):
            ?>
                        <li>
                            <?= Html::a($childMenus->title, ['category/view', 'id' => $childMenus->category_id], ['class' => '']) ?>
                        </li>
            <?php
                   endforeach;
                        echo "</ul>";
                }
            ?>
        </li>
    <?php
        endforeach;
    ?>
</ul>

<!-- <li><a href="#">Markaz haqida</a></li>
<li><a href="#">Hujjatlar </a>
        <ul>
            <li><a href="#">Davat ramzlari</a></li>
            <li><a href="#">Huquqiy hujjatlar</a></li>
            <li><a href="#">Vazirlik hujjatlari</a></li>
        </ul>
    </li>
<li><a href="#">Fotogallereya</a></li>
<li><a href="#">Maktub yuborish</a></li> -->