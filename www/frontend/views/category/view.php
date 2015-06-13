<?php
  use yii\widgets\ListView;

  $this->title = $title;
?>

<section class="blok min-h">
    <div class="blok-heading">
        <div class="title-bg"> <h3 class="title-content"> Maqolalar </h3> </div>
    </div>
    <?php
      echo ListView::widget([
          'dataProvider' => $articles,
          'itemView' => '_post',
          'summary' => '',
      ]);
    ?>

    <div class="center">
        <ul class="pagination">
          <li><a href="#">&laquo;</a></li>
          <li class="active"><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li><a href="#">&raquo;</a></li>
        </ul>
    </div>

</section>