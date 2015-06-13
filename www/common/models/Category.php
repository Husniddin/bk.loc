<?php

namespace common\models;

use Yii;
use yii\data\ActiveDataProvider;

/**
 * This is the model class for table "category".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 *
 * @property Article[] $articles
 * @property Menu[] $menus
 */
class Category extends \yii\db\ActiveRecord
{
    public $activeItems;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['description'], 'string'],
            [['title'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArticles()
    {
        return $this->hasMany(Article::className(), ['category_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActiveArticles()
    {
        return $this->hasMany(Article::className(), ['category_id' => 'id'])
            ->where('visible=:visible', [':visible'=>Article::STATUS_ACTIVE])
            ->orderBy('id DESC');
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActiveArticless()
    {
        $query = Article::find()
            ->where(['category_id'=>$this->id, 'visible'=>Article::STATUS_ACTIVE])
            ->orderBy('id DESC');

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 5,
            ],
        ]);

        return $dataProvider;
    }



    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMenus()
    {
        return $this->hasMany(Menu::className(), ['category_id' => 'id']);
    }
}
