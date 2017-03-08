<?php

namespace app\models\activerecords;

use Yii;

/**
 * This is the model class for table "price".
 *
 * @property integer $id
 * @property integer $value
 * @property integer $currencyId
 * @property integer $goodsId
 */
class PriceDAO extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'price';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['value', 'currencyId', 'goodsId'], 'required'],
            [['value', 'currencyId', 'goodsId'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'value' => 'Value',
            'currencyId' => 'Currency ID',
            'goodsId' => 'Goods ID',
        ];
    }
}
