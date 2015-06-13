<?php
    namespace app\components;

    use yii\base\Widget;

    class MainMenuWidget extends Widget
    {
        public $menuItems;

        public function init()
        {
            parent::init();

            $this->menuItems = [
                ['label' => 'Home', 'url' => ['/site/index']],
                ['label' => 'About', 'url' => ['/site/about']],
                ['label' => 'Page 1', 'url' => ['#']],
                ['label' => 'Page 2', 'url' => ['#']],
                ['label' => 'Submenu', 'url' => ['#']],
                ['label' => 'Contact', 'url' => ['/site/contact']],
            ];
        }

        public function run()
        {
            return $this->render('mainmenu', ['menuItems'=>$this->menuItems]);
        }
    }