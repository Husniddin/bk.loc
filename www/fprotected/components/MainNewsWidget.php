<?php
    namespace app\components;

    use yii\base\Widget;
    use common\models\Article;

    class MainNewsWidget extends Widget
    {
        public $mainnews;

        public function init()
        {
            parent::init();
            $this->mainnews = Article::find()->where(['category_id'=>5])->all();
        }

        public function run()
        {
            return $this->render('mainnews', ['mainnews'=>$this->mainnews]);
        }
    }