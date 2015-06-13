<?php
    namespace app\components;

    use yii\base\Widget;
    use common\models\Client;

    class OurClientsWidget extends Widget
    {
        private $clients;

        public function init()
        {
            parent::init();
            $this->clients = Client::find()->all();
        }

        public function run()
        {
            return $this->render('ourclients', ['clients'=>$this->clients]);
        }
    }