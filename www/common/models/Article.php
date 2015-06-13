<?php

namespace common\models;

use Yii;

// use yii\validators\DefaultValueValidator;

/**
 * This is the model class for table "article".
 *
 * @property integer $id
 * @property string $title
 * @property string $anons
 * @property string $text
 * @property string $date
 * @property integer $views
 * @property string $visible
 * @property string $image
 * @property string $file
 * @property string $home_page
 * @property integer $user_id
 * @property integer $category_id
 *
 * @property User $user
 * @property Category $category
 */
class Article extends \yii\db\ActiveRecord
{

    const STATUS_ACTIVE = '1';
    const STATUS_UNACTIVE = '0';

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'article';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'anons', 'text', 'date', 'visible', 'image', 'user_id', 'category_id'], 'required'],
            [['anons', 'text', 'visible', 'home_page'], 'string'],
            [['date'], 'safe'],
            [['views', 'user_id', 'category_id'], 'integer'],
            [['title'], 'string', 'max' => 255],
            [['image', 'file'], 'string', 'max' => 100],
            // ['user_id', 'default', 'value' => Yii::$app->user->identity->id, 'skipOnEmpty'=>false],
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
            'anons' => 'Anons',
            'text' => 'Text',
            'date' => 'Date',
            'views' => 'Views',
            'visible' => 'Visible',
            'image' => 'Image',
            'file' => 'File',
            'home_page' => 'Home Page',
            'user_id' => 'User ID',
            'category_id' => 'Category ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }
}
