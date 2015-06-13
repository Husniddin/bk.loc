<?php
    use yii\helpers\Html;
?>
<div class="blok-heading">
    <div class="title-bg"> <h3 class="title-content"> IQTIDORLI O'QUVCHILAR </h3> </div>
</div>


<div class="slide-people">

    <div class="flexslider">
    
    <ul class="slides">
        <?php
            foreach ($students as $student) {
        ?>
                <li>
                    <div class="img-holder">
                        <?= Html::a(Html::img("@web/fotos/$student->image", ['class'=>'img-circle']), ['#'], ['class' => '']) ?>
                    </div>
                    <p>
                        <span class="label label-default"> <time> <?=$student->date?></time> </span>
                    </p>
                    <p class="title"><?=$student->title?></p>
                    <p><?=$student->anons?></p>
                </li>
        <?php
            }
        ?>
    </ul>
    
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('.slide-people > .flexslider').flexslider({
            animation: "slide",
            animationLoop: true,
            itemWidth: 190,
            itemMargin: 5,
            controlNav: true, 
            minItems: 3,
            maxItems: 5,
        });
    });
</script>