<?php
    namespace app\components;

    use yii\base\Widget;
    use common\models\Advantage;

    class WhyChooseUsWidget extends Widget
    {
        public $advantages;

        public function init()
        {
            parent::init();
            $this->advantages = Advantage::find()->all();
        }

        public function run()
        {
            return $this->render('whychooseus', ['advantages'=>$this->advantages]);
        }
    }