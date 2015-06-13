<?php
    use app\components\LeftMenuWidget;
    use app\components\SearchWidget;
    use app\components\AdvertisementWidget;
    use app\components\VotingWidget;
    use app\components\MonthWidget;
    use app\components\ContactsWidget;
?>

<?php $this->beginContent('@app/views/layouts/bkMain.php'); ?>

<!-- container start -->
<div class="container">
    <!-- content start -->
    <div class="content">

        <hr class="myline">

        <div class="row">            
            <!-- left side start -->
            <div class="col-sm-3">
                <aside>
                    <?= LeftMenuWidget::widget(); ?>

                    <?= SearchWidget::widget(); ?>                    

                    <?= AdvertisementWidget::widget(); ?>

                    <?= VotingWidget::widget(); ?>

                    <?= MonthWidget::widget(); ?>
                    
                    <?= ContactsWidget::widget(); ?>

                </aside>
            </div>
            <!-- left side finish -->

            <!-- right side start -->
            <div class="col-sm-9">
            	<?= $content ?>               
            </div>
            <!-- right side finish -->
        </div>

        <hr class="myline">

    </div>
    <!-- content finish -->

</div>
<!-- container finish -->

<?php $this->endContent(); ?>