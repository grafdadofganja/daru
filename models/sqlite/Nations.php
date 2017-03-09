<?php

namespace app\models\sqlite;

use Yii;

/**
 * This is the model class for table "nations".
 *
 * @property integer $id
 * @property string $name
 * @property string $img
 * @property string $population
 * @property string $place
 * @property string $lang
 * @property string $religion
 * @property string $country
 * @property string $relation
 * @property string $origin
 * @property string $info
 * @property string $history
 * @property string $location
 * @property string $life
 * @property string $tradition
 * @property string $facts
 * @property string $tag
 */
class Nations extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'nations';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['info', 'history', 'location', 'life', 'tradition', 'facts', 'name', 'population', 'place', 'lang', 'religion', 'country', 'relation', 'origin', 'img', 'tag'], 'required'],
            [['info', 'history', 'location', 'life', 'tradition', 'facts'], 'string'],
            [['name', 'img', 'population', 'place', 'lang', 'religion', 'country', 'relation', 'origin', 'tag'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'img' => 'Изображение',
            'population' => 'Численность',
            'place' => 'Расселение',
            'lang' => 'Родной язык',
            'religion' => 'Религия',
            'country' => 'Титульное государство',
            'relation' => 'Отношение к Абдуловере',
            'origin' => 'Происхождение',
            'info' => 'Основная инфа',
            'history' => 'История',
            'location' => 'Расселение',
            'life' => 'Образ жизни, градостроение',
            'tradition' => 'Традиционные занятия',
            'facts' => 'Особенности',
            'tag' => 'Уникальная сслыка',
        ];
    }
}
