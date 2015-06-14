<?php
    use yii\helpers\Html;
?>
<div class="flexslider" id="slides">
  <ul class="slides bg-blue">
    <li>
      <?= Html::img("@web/fotos/slides/slide1.jpg") ?>   
    </li>
    <li>
      <?= Html::img("@web/fotos/slides/slide2.jpg") ?>
    </li>
    <li>
      <?= Html::img("@web/fotos/slides/slide3.jpg") ?>     
    </li>
  </ul>
</div>
<script type="text/javascript">
  $(document).ready(function() {
    // jQuery code
    //flex slider
    $('#slides').flexslider({
      controlNav: false,               //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
      directionNav: true,             //Boolean: Create navigation for previous/next navigation? (true/false)
      prevText: "Previous",           //String: Set the text for the "previous" directionNav item
      nextText: "Next",            //String: Set the text for the "next" directionNav item
      slideshow: true,                //Boolean: Animate slider automatically
      slideshowSpeed: 3000,           //Integer: Set the speed of the slideshow cycling, in milliseconds
      animationSpeed: 600       
    });
    
  });
</script>