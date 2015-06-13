<?php
    namespace app\components;

    use yii\base\Widget;
    use common\models\Menu;

    class LeftMenuWidget extends Widget
    {
        public $left1Menus;
        public $left2Menus;
        public $left3Menus;

        public function init()
        {
            parent::init();
            $this->left1Menus = Menu::find()
                ->where(['position'=>Menu::POSITION_LEFT1, 'visible'=>Menu::VISIBLE])
                ->andWhere('parent_id IS NULL')
                ->orderBy('id')
                ->all();

            $this->left2Menus = Menu::find()
                ->where(['position'=>Menu::POSITION_LEFT2, 'visible'=>Menu::VISIBLE])
                ->andWhere('parent_id IS NULL')
                ->orderBy('id')
                ->all();

            $this->left3Menus = Menu::find()
                ->where(['position'=>Menu::POSITION_LEFT3, 'visible'=>Menu::VISIBLE])
                ->andWhere('parent_id IS NULL')
                ->orderBy('id')
                ->all();
        }

        public function run()
        {
            return $this->render('leftmenu', [
                'left1Menus' => $this->left1Menus,
                'left2Menus' => $this->left2Menus,
                'left3Menus' => $this->left3Menus,
            ]);
        }
    }