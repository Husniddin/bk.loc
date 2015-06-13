<?php
    namespace app\components;

    use yii\base\Widget;
    use common\models\Article;

    class GiftedStudentsWidget extends Widget
    {
        public $students;

        public function init()
        {
            parent::init();
            $this->students = Article::find()->where(['category_id'=>10])->all();
        }

        public function run()
        {
            return $this->render('giftedstudents', ['students'=>$this->students]);
        }
    }