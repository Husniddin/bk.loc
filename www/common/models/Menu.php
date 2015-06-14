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
 * @property string $link
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

    public $treeMenus = [];
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
            [['title', 'link'], 'string', 'max' => 255],
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

    public static function getPositions()
    {
        return [
            'top' => 'Top',
            'left1' => 'Left1',
            'left2' => 'Left2',
            'left3' => 'Left3',
        ];
    }


    public function getTreeMenus($selfId=NULL)
    {
        

        if ($selfId) {
            $menus = Menu::find()
                // ->where(['position'=>Menu::POSITION_LEFT2, 'visible'=>Menu::VISIBLE])
                ->where('parent_id IS NULL')
                ->andWhere('id <> '.$selfId)
                ->orderBy('title')
                ->all();
        } else {
            $menus = Menu::find()
                // ->where(['position'=>Menu::POSITION_LEFT2, 'visible'=>Menu::VISIBLE])
                ->where('parent_id IS NULL')
                // ->andWhere('parent_id IS NULL')
                ->orderBy('title')
                ->all();
        }

        foreach ($menus as $key => $menu) {

            $this->treeMenus[$menu->id] = $menu->title;

            if ($menu->childMenus) {
                $prefix='-';
                $this->getChilds($menu, $prefix, $selfId);
            }
        }

        return $this->treeMenus;
    }

    public function getChilds($menu, $prefix='-', $selfId=NULL)
    {

        if ($menu->childMenus) {
            
            foreach ($menu->childMenus as $key => $childMenu) {

                if ($selfId && $childMenu->id == $selfId) {
                    continue;
                }

                $this->treeMenus[$childMenu->id] = $prefix.$childMenu->title;

                if ($childMenu->childMenus) {
                    $prefix .= '-';
                    $this->getChilds($childMenu, $prefix, $selfId);
                }
            }
        }

    }
}
