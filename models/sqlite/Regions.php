<?php

namespace app\models\sqlite;

use Yii;

/**
 * This is the model class for table "regions".
 *
 * @property integer $id
 * @property string $name
 * @property string $capital
 * @property string $district
 * @property string $district
 * @property string $amount
 * @property string $lang
 * @property string $leader
 * @property string $religion
 * @property string $img
 * @property string $tag
 * @property string $info
 * @property string $geo
 * @property string $history
 * @property string $cities
 * @property string $capitalinfo
 * @property string $economic
 * @property string $transport
 * @property string $objects
 * @property string $populataion
 * @property string $importance
 */
class Regions extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'regions';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['info', 'geo', 'history', 'cities', 'capitalinfo', 'economic', 'transport', 'objects', 'populataion', 'importance', 'name', 'capital', 'district', 'territory', 'lang', 'leader', 'religion', 'img', 'tag', 'amount'], 'required'],
            [['info', 'geo', 'history', 'cities', 'capitalinfo', 'economic', 'transport', 'objects', 'populataion', 'importance'], 'string'],
            [['name', 'capital', 'district', 'territory', 'lang', 'leader', 'religion', 'img', 'tag', 'amount'], 'string', 'max' => 255],
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
            'capital' => 'Столица',
            'district' => 'Округ',
            'amount' => 'Численность',
            'territory' => 'Примерная площадь',
            'lang' => 'Официальный язык',
            'leader' => 'Глава региона',
            'religion' => 'Доминирующая религия',
            'img' => 'Изображение',
            'tag' => 'Уникальная ссылка',
            'info' => 'Основная инфа',
            'geo' => 'География',
            'history' => 'История',
            'cities' => 'Населенные пункты',
            'capitalinfo' => 'Столица',
            'economic' => 'Экономика',
            'transport' => 'Транспорт',
            'objects' => 'Ключевые объекты',
            'populataion' => 'Население',
            'importance' => 'Значение региона',
        ];
    }
}
