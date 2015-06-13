<?php
    use yii\helpers\Html;
?>
<div class="blok-heading">
    <div class="title-bg"> <h3 class="title-content"> Elektron qo’llanmalar </h3> </div>
</div>

<div class="slide-content">
    <div class="flexslider">
        <ul class="slides"> 
            <?php
                foreach ($electronicbenefits as $electronicbenefit) {
            ?>
                    <li>
                        <div class="img-holder">
                            <?= Html::img("@web/fotos/$electronicbenefit->image") ?>
                        </div>
                        <p>
                            <span class="label label-default"> <time><?=$electronicbenefit->date?></time> </span>
                            <span class="label label-default"> Ko’rilgan <?=$electronicbenefit->views?$electronicbenefit->views:0?> </span>
                        </p> 
                        <h5 class="title"><?=$electronicbenefit->title?></h5> 
                    </li>
            <?php
                }
            ?>
        </ul>
    </div>
</div>
<div class="blok-footer"><?= Html::a('Barchasini ko\'rish', ['electronicbenefit/view'], ['class' => 'btn btn-grad']) ?></div>
<script type="text/javascript">
    $(document).ready(function(){
        $('.slide-content > .flexslider').flexslider({
            animation: "slide",
            controlNav: true,               
            directionNav: true,             //Boolean: Create navigation for previous/next navigation? (true/false)
            prevText: "Previous",           //String: Set the text for the "previous" directionNav item
            nextText: "Next",            //String: Set the text for the "next" directionNav item
            minItems: 3,
            maxItems: 4,
            itemWidth: 200,
            slideshowSpeed: 4000, 
            animationLoop: true,         
            animationSpeed: 600       
        });
    });
</script>