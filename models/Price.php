<?php

namespace app\models;

use app\models\activerecords\PriceDAO;
use app\models\PriceHistory;
use yii\base\Model;

/**
 * Price is the model behind the contact form.
 */
class Price extends Model
{
    public $value;
    public $currencyId;
    public $goodsId;

    const SCENARIO_SAVE = 'save';
    const SCENARIO_UPDATE = 'update';

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['value', 'currencyId', 'goodsId'], 'required', 'on' => self::SCENARIO_SAVE],
            [['value', 'currencyId', 'goodsId'], 'integer', 'on' => self::SCENARIO_SAVE],
            [['value'], 'required', 'on' => self::SCENARIO_UPDATE],
            [['value'], 'integer', 'on' => self::SCENARIO_UPDATE],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'value' => 'Цена',
            'currencyId' => 'Валюта',
            'goodsId' => 'Товар',
        ];
    }

    /**
     * save price
     *
     * @return PriceDAO|null
     */
    public function save()
    {
        $model = new PriceDAO();
        $model->value = $this->value;
        $model->goodsId = $this->goodsId;
        $model->currencyId = $this->currencyId;
        $model->save();

        $this->addPriceHistory($model->value, $model->value, $model->goodsId);

        return $model ? $model : null;
    }


    /**
     * update price
     *
     * @param $id
     * @return null|PriceDAO
     */
    public function update($id)
    {
        $model = PriceDAO::findOne($id);
        $oldValue = $model->value;

        $model->value = $this->value;
        $model->save();

        $this->addPriceHistory($oldValue, $model->value, $model->goodsId);

        return $model ? $model : null;
    }


    /**
     * add new price history
     *
     * @param $oldValue
     * @param $currentValue
     * @param $goodsId
     */
    private function addPriceHistory($oldValue, $currentValue, $goodsId)
    {
        $model = new PriceHistory();
        $model->initObj($oldValue, $currentValue, $goodsId);
    }
}
