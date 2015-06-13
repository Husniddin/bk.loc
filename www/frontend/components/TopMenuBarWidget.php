<?php
    namespace app\components;

    use yii\base\Widget;
    use common\models\Menu;
    use common\models\Category;

    class TopMenuBarWidget extends Widget
    {
        public $menus;

        public function init()
        {
            parent::init();
            // $this->menus = Menu::find()->where(['position'=>'top', 'parent_id'=>NULL])->orderBy('id')->all();
            $this->menus = Menu::find()
                ->where(['position'=>Menu::POSITION_TOP, 'visible'=>Menu::VISIBLE])
                ->andWhere('parent_id IS NULL')
                ->orderBy('id')
                ->all();
        }

        public function run()
        {
            return $this->render('topmenubar', ['menus'=>$this->menus]);
        }
    }