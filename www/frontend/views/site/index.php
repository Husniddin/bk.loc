<?php
    use app\components\LeftMenuWidget;
    use app\components\SearchWidget;
    use app\components\AdvertisementWidget;
    use app\components\VotingWidget;
    use app\components\MonthWidget;
    use app\components\ContactsWidget;
    use app\components\IntroWidget;
    use app\components\MainNewsWidget;
    use app\components\ActivitiesWidget;
    use app\components\ProverbsWidget;
    use app\components\CoursesWidget;
    use app\components\ForChildrenWidget;
    use app\components\ElectronicBenefitWidget;
    use app\components\QuizWidget;
    use app\components\GiftedStudentsWidget;
    // use app\components\OurClientsWidget;
    // use app\components\ContactsWidget;
    // use app\components\LocationWidget;
    // use app\components\WhyChooseUsWidget;
    // use app\components\ProductsWidget;
    // use app\components\BlogWidget;
    // use app\components\ServicesWidget;
    // use app\components\GetFreeWidget;
    // use app\components\IntroWidget;
?>
<?php
    /* @var $this yii\web\View */
    $this->title = 'My Yii Application';
?>

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

                <!-- info -->
                <!-- featured list -->
                <?= IntroWidget::widget(); ?>
                <!-- featured list // -->
                <!-- intro -->

                <!-- main news -->
                <section class="blok">
                    <?= MainNewsWidget::widget(); ?>
                </section>
                <!-- main news // -->

                <!-- tadbirlar -->
                <section class="blok">
                    <?= ActivitiesWidget::widget(); ?>
                </section>
                <!-- tadbirlar // -->

                <!-- maqol -->
                <section class="blok-maqol clearfix">
                    <?= ProverbsWidget::widget(); ?> 
                </section>
                <!-- maqol // -->

                <section class="blok">
                    <?= CoursesWidget::widget(); ?>
                </section>

                <section class="blok">
                    <?= ForChildrenWidget::widget(); ?>
                </section>

                <section class="blok">
                    <?= ElectronicBenefitWidget::widget(); ?>
                </section>

                <!-- quiz blok -->
                <section class="blok">
                    <?= QuizWidget::widget(); ?>
                </section>
                <!-- quiz blok -->
            </div>
            <!-- right side finish -->
        </div>

        <hr class="myline">

        <!-- people -->
        <section class="blok">
            <?= GiftedStudentsWidget::widget(); ?>
        </section>
        <!-- people // -->
    </div>
    <!-- content finish -->

</div>
<!-- container finish -->