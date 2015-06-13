<?php
    namespace app\components;

    use yii\base\Widget;

    class TopMenuWidget extends Widget
    {
        public $menuItems;

        public function init()
        {
            parent::init();

            $this->menuItems = [
                ['label' => 'Home', 'url' => ['/site/index']],
                ['label' => 'About', 'url' => ['/site/about']],
                ['label' => 'Contact', 'url' => ['/site/contact']],
            ];

            if (\Yii::$app->user->isGuest) {
                $this->menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
                $this->menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
            } else {
                $this->menuItems[] = [
                    'label' => 'Logout (' . \Yii::$app->user->identity->username . ')',
                    'url' => ['/site/logout'],
                    'linkOptions' => ['data-method' => 'post']
                ];
            }
        }

        public function run()
        {
            return $this->render('topmenu', ['menuItems'=>$this->menuItems]);
        }
    }