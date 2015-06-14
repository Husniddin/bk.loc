<?php
    namespace app\components;

    use yii\base\Widget;
    use common\models\Article;

    class ActivitiesWidget extends Widget
    {
        public $activities;

        public function init()
        {
            parent::init();
            $this->activities = Article::find()->where(['category_id'=>6])->all();
        }

        public function run()
        {
            return $this->render('activities', ['activities'=>$this->activities]);
        }
    }