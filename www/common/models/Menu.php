<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "menu".
 *
 * @property integer $id
 * @property string $title
 * @property string $position
 * @property string $visible
 * @property string $icon
 * @property integer $parent_id
 * @property integer $category_id
 *
 * @property Category $category
 */
class Menu extends \yii\db\ActiveRecord
{
    const NOT_VISIBLE = '0';
    const VISIBLE = '1';
    
    const POSITION_TOP   = 'top';
    const POSITION_LEFT1 = 'left1';
    const POSITION_LEFT2 = 'left2';
    const POSITION_LEFT3 = 'left3';
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'menu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'position', 'visible', 'category_id'], 'required'],
            [['position', 'visible'], 'string'],
            [['parent_id', 'category_id'], 'integer'],
            [['title'], 'string', 'max' => 255],
            [['icon'], 'string', 'max' => 100]
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
            'position' => 'Position',
            'visible' => 'Visible',
            'icon' => 'Icon',
            'parent_id' => 'Parent ID',
            'category_id' => 'Category ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    // /**
    //  * @return \yii\db\ActiveQuery
    //  */
    // public function getChildMenus()
    // {
    //     return $this->hasMany(Menu::className(), ['parent_id' => 'id']);
    // }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getChildMenus()
    {
        return $this->hasMany(self::className(), ['parent_id' => 'id']);
    }
}
