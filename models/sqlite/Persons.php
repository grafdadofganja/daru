<?php

namespace app\models\sqlite;

use Yii;

/**
 * This is the model class for table "persons".
 *
 * @property integer $id
 * @property string $name
 * @property string $fullname
 * @property string $nicks
 * @property string $location
 * @property string $gender
 * @property string $birthday
 * @property string $religion
 * @property string $attitude
 * @property string $status
 * @property string $img
 * @property string $tag
 * @property string $info
 * @property string $bio
 * @property string $relation
 * @property string $life
 * @property string $facts
 */
class Persons extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'persons';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['info', 'bio', 'relation', 'life', 'facts', 'name', 'fullname', 'nicks', 'location', 'gender', 'birthday', 'religion', 'attitude', 'status', 'img', 'tag'], 'required'],
            [['info', 'bio', 'relation', 'life', 'facts'], 'string'],
            [['name', 'fullname', 'nicks', 'location', 'gender', 'birthday', 'religion', 'attitude', 'status', 'img', 'tag'], 'string', 'max' => 255],
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
            'fullname' => 'Полное имя',
            'nicks' => 'Также известен как',
            'location' => 'Место жительства',
            'gender' => 'Пол',
            'birthday' => 'Дата рождения',
            'religion' => 'Вероисповедание',
            'attitude' => 'Положение',
            'status' => 'Статус',
            'img' => 'Изображение',
            'tag' => 'Уникальное имя ссылки',
            'info' => 'Основная инфа',
            'bio' => 'Биография',
            'relation' => 'Отношения с Абдулем',
            'life' => 'Личная жизнь, увлечения',
            'facts' => 'Интересные факты',
        ];
    }
}
