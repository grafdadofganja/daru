<?php

namespace app\models\sqlite;

use Yii;

/**
 * This is the model class for table "tails".
 *
 * @property integer $id
 * @property string $chapter
 * @property string $name
 * @property string $text
 * @property string $description
 */
class Tails extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tails';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['text', 'chapter', 'name'], 'required'],
            [['text', 'description', 'position'], 'string'],
            [['chapter', 'name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'chapter' => 'Сезон',
            'name' => 'Название',
            'text' => 'Текст',
            'description' => 'Описание',
            'position' => 'Позиция',
        ];
    }
}
