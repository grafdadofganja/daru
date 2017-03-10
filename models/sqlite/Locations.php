<?php

namespace app\models\sqlite;

use Yii;

/**
 * This is the model class for table "locations".
 *
 * @property integer $id
 * @property string $name
 * @property string $location
 * @property string $leader
 * @property string $popdivision
 * @property string $type
 * @property string $popamount
 * @property string $primaryobj
 * @property string $aim
 * @property string $status
 * @property string $img
 * @property string $tag
 * @property string $info
 * @property string $geo
 * @property string $chrono
 * @property string $leadership
 * @property string $population
 * @property string $transport
 * @property string $life
 * @property string $arch
 * @property string $facts
 */
class Locations extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'locations';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['info', 'geo', 'chrono', 'leadership', 'population', 'transport', 'life', 'arch', 'name', 'location', 'leader', 'popdivision', 'type', 'popamount', 'primaryobj', 'aim', 'status', 'img', 'tag'], 'required'],
            [['info', 'geo', 'chrono', 'leadership', 'population', 'transport', 'life', 'arch', 'facts'], 'string'],
            [['name', 'location', 'leader', 'popdivision', 'type', 'popamount', 'primaryobj', 'aim', 'status', 'img', 'tag'], 'string', 'max' => 255],
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
            'location' => 'Географическое положение',
            'leader' => 'Управляющий',
            'popdivision' => 'Население',
            'type' => 'Тип',
            'popamount' => 'Численность населения',
            'primaryobj' => 'Ключевые объекты',
            'aim' => 'Предназначение',
            'status' => 'Статус',
            'img' => 'Изображение',
            'tag' => 'Уникальное имя ссылки',
            'info' => 'Основная инфа',
            'geo' => 'Физико-географическая характеристика',
            'chrono' => 'Хронология',
            'leadership' => 'Руководство',
            'population' => 'Население',
            'transport' => 'Транспорт',
            'life' => 'Образование, занятия, устройство',
            'arch' => 'Архитектура',
            'facts' => 'Facts',
        ];
    }

    public function beforeSave($insert)
	{
	    if (parent::beforeSave($insert)) {			
            $model = $this->attributes;

            foreach ($model as $name => $value) {
               $model[$name] = Regexp::generateLink($value);
            }
            $this->attributes = $model;
	        return true;
	    }
	    return false;
	}

}
