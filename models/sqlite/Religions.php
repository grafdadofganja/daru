<?php

namespace app\models\sqlite;

use Yii;

/**
 * This is the model class for table "religions".
 *
 * @property integer $id
 * @property string $name
 * @property string $fullname
 * @property string $popamount
 * @property string $holyplace
 * @property string $lang
 * @property string $birthday
 * @property string $aim
 * @property string $god
 * @property string $book
 * @property string $img
 * @property string $tag
 * @property string $info
 * @property string $history
 * @property string $science
 * @property string $population
 * @property string $persons
 * @property string $defect
 * @property string $facts
 */
class Religions extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'religions';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['info', 'history', 'science', 'population', 'persons', 'defect', 'facts', 'name', 'fullname', 'popamount', 'holyplace', 'lang', 'birthday', 'aim', 'god', 'book', 'img', 'tag'], 'required'],
            [['info', 'history', 'science', 'population', 'persons', 'defect', 'facts'], 'string'],
            [['name', 'fullname', 'popamount', 'holyplace', 'lang', 'birthday', 'aim', 'god', 'book', 'img', 'tag'], 'string', 'max' => 255],
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
            'popamount' => 'Численность членов',
            'holyplace' => 'Священная Обитель',
            'lang' => 'Язык служения объекту',
            'birthday' => 'Примерное время возникновения',
            'aim' => 'Направление',
            'god' => 'Лидер/бог',
            'book' => 'Священная книга',
            'img' => 'Изображение',
            'tag' => 'Уникальное имя ссылки',
            'info' => 'Основная инфа',
            'history' => 'История',
            'science' => 'Учение',
            'population' => 'Численность',
            'persons' => 'Важные персоналии',
            'defect' => 'Недостатки и критика',
            'facts' => 'Интересные факты',
        ];
    }
}
