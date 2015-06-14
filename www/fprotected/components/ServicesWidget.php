<?php
    namespace app\components;

    use yii\base\Widget;
    use common\models\Service;

    class ServicesWidget extends Widget
    {
        public $services;

        public function init()
        {
            parent::init();
            $this->services = Service::find()->all();
        }

        public function run()
        {
            return $this->render('services', ['services'=>$this->services]);
        }
    }