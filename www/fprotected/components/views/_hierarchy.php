<?php
    use yii\helpers\Html;
?>
<?php
    echo "<ul class='$class'>";
        foreach ($menus as $menu):
?>
            <li>
                <?php if ($menu->link):?>
                    <a href="<?=$menu->link?>"><?=$menu->title?></a>
                <?php else:?>
                    <?= Html::a($menu->title, ['category/view', 'id' => $menu->category_id], ['class' => '']) ?>
                <?php endif;?>
                <?php
                if ($menu->childMenus) {
                        echo $this->render('_hierarchy', ['menus'=>$menu->childMenus]);
                    }
                ?>
            </li>
<?php
        endforeach;
    echo "</ul>";
?>