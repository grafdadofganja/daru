<?php

namespace app\models;

use yii\helpers\Html;

class Regexp extends \yii\base\Object 
{
    public static function generateLink($string) {
        $pattern = '/\[([А-Яа-я0-9a-zA-Z\s]+)\|([a-z]+)\]/su';
        //$replace = Html::a('$1', ['search', 'tag' => '$2'], ['class' => 'gen-link']);

        $replace = '<a href="/daru/web/index.php/search?tag='.'$2'.'" class="gen-link">'.'$1'.'</a>';  
        return preg_replace($pattern, $replace, $string);
    }
}
