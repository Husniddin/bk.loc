<?php
    namespace app\components;

    use yii\base\Widget;
    use common\models\Article;

    class ForChildrenWidget extends Widget
    {
        public $articles;

        public function init()
        {
            parent::init();
            $this->articles = Article::find()->where(['category_id'=>8])->all();
        }

        public function run()
        {
            return $this->render('forchildren', ['articles'=>$this->articles]);
        }
    }