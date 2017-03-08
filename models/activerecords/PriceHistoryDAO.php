<?php

namespace app\models\activerecords;

use Yii;

/**
 * This is the model class for table "price_histoty".
 *
 * @property integer $id
 * @property integer $goodsId
 * @property integer $value
 * @property double $diff
 * @property integer $date
 */
class PriceHistoryDAO extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'price_histoty';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['goodsId', 'value', 'diff', 'date'], 'required'],
            [['goodsId', 'value', 'diff', 'date'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'goodsId' => 'Goods ID',
            'value' => 'Value',
            'diff' => 'Diff',
        ];
    }
}
