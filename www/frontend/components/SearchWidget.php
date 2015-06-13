<?php
    namespace app\components;

    use yii\base\Widget;
    // use common\models\Service;

    class SearchWidget extends Widget
    {
        // public $services;

        public function init()
        {
            parent::init();
            // $this->services = Service::find()->all();
        }

        public function run()
        {
            return $this->render('search');
        }
    }