<?php
    namespace app\components;

    use yii\base\Widget;
    use common\models\Product;

    class ProductsWidget extends Widget
    {
        public $products;

        public function init()
        {
            parent::init();
            $this->products = Product::find()->all();
        }

        public function run()
        {
            return $this->render('products', ['products'=>$this->products]);
        }
    }