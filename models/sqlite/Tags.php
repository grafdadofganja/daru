<?php

namespace app\models\sqlite;

use Yii;

/**
 * This is the model class for table "tags".
 *
 * @property integer $id
 * @property string $tag
 * @property string $category
 * @property string $ownid
 */
class Tags extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tags';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tag', 'ownid'], 'required'],
            [['tag', 'category', 'ownid'], 'string', 'max' => 255],
            [['tag'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tag' => 'Tag',
            'category' => 'Category',
            'ownid' => 'Ownid',
        ];
    }
}
