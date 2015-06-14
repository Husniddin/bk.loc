<?php
    namespace app\components;

    use yii\base\Widget;
    use common\models\Article;

    class ElectronicBenefitWidget extends Widget
    {
        public $electronicbenefits;

        public function init()
        {
            parent::init();
            $this->electronicbenefits = Article::find()->where(['category_id'=>9])->all();
        }

        public function run()
        {
            return $this->render('electronicbenefit', ['electronicbenefits'=>$this->electronicbenefits]);
        }
    }