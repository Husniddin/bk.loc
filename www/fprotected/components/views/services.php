<?php
    use yii\helpers\Html;
?>
<div class="blok-title text-center">
    <h2 class="text-title">Lorem ipsum dolor sit amet, consectetuer Services widget</h2>
    <h3 class="text-lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, <br>sed diem nonummy nibh euismod tincidunt ut lacreet</h3>
</div>

<?php
    foreach ($services as $service) {
?>        
    <div class="col-sm-4 service">
        <div class="img-holder">
            <?= Html::img('@web/fotos/'.$service->photo, ['alt' => 'My photo']) ?>
        </div>
        <h3 class="title"><?=$service->title?></h3>
        <p><?=$service->description?></p>
        <a href="#" class="btn-style">Order now &raquo </a>
    </div>
<?php
    }
?>