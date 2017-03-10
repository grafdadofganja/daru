<?php

namespace app\models\sqlite;

use Yii;
use app\models\Regexp;

/**
 * This is the model class for table "fractions".
 *
 * @property integer $id
 * @property string $name
 * @property string $fullname
 * @property string $population
 * @property string $location
 * @property string $lang
 * @property string $birthday
 * @property string $attitude
 * @property string $leader
 * @property string $status
 * @property string $img
 * @property string $info
 * @property string $bio
 * @property string $history
 * @property string $geo
 * @property string $system
 * @property string $facts
 * @property string $tag
 */
class Fractions extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'fractions';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['info', 'bio', 'history', 'geo', 'system', 'facts', 'name', 'fullname', 'population', 'location', 'lang', 'birthday', 'attitude', 'leader', 'status', 'img', 'tag'], 'required'],

            [['info', 'bio', 'history', 'geo', 'system', 'facts'], 'string'],

            [['name', 'fullname', 'population', 'location', 'lang', 'birthday', 'attitude', 'leader', 'status', 'img', 'tag'], 'string', 'max' => 255],


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
            'fullname' => 'Официальное название',
            'population' => 'Численность',
            'location' => 'Штаб-квартира',
            'lang' => 'Языки',
            'birthday' => 'Примерное время возникновения',
            'attitude' => 'Направление',
            'leader' => 'Лидер',
            'status' => 'Статус',
            'img' => 'Изображение',
            'tag' => 'Уникальное имя ссылки',
            'info' => 'Основная инфа',
            'bio' => 'Возниковение',
            'history' => 'Хронологическая лента',
            'geo' => 'Географическое положение',
            'system' => 'Особенности и внутреннее устройство',
            'facts' => 'Интересные факты',
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
