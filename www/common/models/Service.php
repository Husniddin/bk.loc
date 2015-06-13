<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "service".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $photo
 */
class Service extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'service';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'description', 'photo'], 'required'],
            [['description'], 'string'],
            [['title'], 'string', 'max' => 255],
            [['photo'], 'string', 'max' => 100]
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
            'photo' => 'Photo',
        ];
    }
}
