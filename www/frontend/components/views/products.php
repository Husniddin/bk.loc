<?php
    use yii\helpers\Html;
?>
<h3 class="text-lead">Other products Products widget</h3>

<div class="items-grid text-center">
    <?php
        foreach ($products as $product) {
    ?>        
        <div class="col-sm-3">
            <div class="img-holder">
                <?= Html::img('@web/fotos/'.$product->photo, ['alt' => 'My photo']) ?>
            </div>
            <h3 class="title"><?=$product->name?></h3>
        </div>
    <?php
        }
    ?>
</div>