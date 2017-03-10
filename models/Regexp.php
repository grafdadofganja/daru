<?php

namespace app\models;

class Regexp extends \yii\base\Object 
{
    public static function generateLink($string) {
        $pattern = '/\[([А-Яа-я0-9a-zA-Z]+)\|([a-z]+)\]/su';
        $replace = '<a href="/daru/search?tag='.'$2'.'" class="gen-link">'.'$1'.'</a>';  
        return preg_replace($pattern, $replace, $string);
    }
}
