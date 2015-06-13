<?php
    namespace app\components;

    use yii\base\Widget;
    use common\models\Article;

    class CoursesWidget extends Widget
    {
        public $courses;

        public function init()
        {
            parent::init();
            $this->courses = Article::find()->where(['category_id'=>7])->all();
        }

        public function run()
        {
            return $this->render('courses', ['courses'=>$this->courses]);
        }
    }