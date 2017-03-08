<?php

namespace app\models;

use app\models\activerecords\PriceHistoryDAO;
use yii\base\Model;

/**
 * Price is the model behind the contact form.
 */
class PriceHistory extends Model
{
    private $value;
    private $date;
    private $diff;
    private $goodsId;

    const DEFLECTION = 25;
    const WARNING = 'warning';
    const ERROR = 'error';
    const NORMAL = 'normal';

    public $state; // Зачем оно публичное?

    /**
     * @return float|int
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @return int
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @return float|int
     */
    public function getDiff()
    {
        return $this->diff;
    }

    /**
     * @return int
     */
    public function getGoodsId()
    {
        return $this->diff;
    }

    /**
     * init object
     *
     * @param $oldValue
     * @param $currentValue
     * @param $goodsId
     * @return PriceHistoryDAO|null
     */
    public function initObj($oldValue, $currentValue, $goodsId)
    {
        $this->value = $oldValue;
        $this->goodsId = $goodsId;
        $this->date = time();
        $this->diff = $this->calcDiff($oldValue, $currentValue);
        $this->state = $this->calcState($this->diff);

        return $this->save();
    }

    /**
     * calculate difference
     *
     * @param $oldValue
     * @param $currentValue
     * @return float|int
     */
    private function calcDiff($oldValue, $currentValue)
    {
        return round(($currentValue-$oldValue)/$oldValue * 100, 2);
    }

    /**
     * calculate state
     *
     * @param $diff
     * @return string is the state
     */
    private function calcState($diff)
    {
        if ($diff < 0) {
            return self::ERROR;
        } elseif ($diff < self::DEFLECTION) {
            return self::NORMAL;
        } else {
            return self::WARNING;
        }
    }

    /**
     * add new price history
     *
     * @return PriceHistoryDAO|null
     */
    private function save()
    {
        $model = new PriceHistoryDAO();
        $model->value = $this->value;
        $model->goodsId = $this->goodsId;
        $model->diff = $this->diff;
        $model->date = $this->date;
        $model->save();

        return $model ? $model : null;
    }
}
