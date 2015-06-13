<?php
    use yii\helpers\Html;
?>
<div class="blok-title text-center">
    <h2 class="text-title">Our clients From OurClientsWidget</h2>
    <h3 class="text-lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, <br> sed diem nonummy nibh euismod tincidunt ut lacreet</h3>
</div>

<div class="slide-container">

    <a href="#" class="slide-prev">&lsaquo;</a>
    <div class="slide-clients">
    
    <ul>
        <?php
            foreach ($clients as $client) {
        ?>        
            <li>
                <div class="img-holder">
                    <?= Html::img('@web/fotos/'.$client->photo, ['alt' => 'My photo']) ?>
                </div> 
                <h5 class="title"><?=$client->title?></h5> 
                <p>...</p> 
            </li>
        <?php
            }
        ?>
    </ul>
    
    </div>
    <a href="#" class="slide-next">&rsaquo;</a>
</div>