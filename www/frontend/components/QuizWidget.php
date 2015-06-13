<?php
    namespace app\components;

    use yii\base\Widget;

    class QuizWidget extends Widget
    {
        // public $menuItems;

        public function init()
        {
            parent::init();
        }

        public function run()
        {
            return $this->render('quiz');
        }
    }