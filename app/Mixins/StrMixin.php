<?php

namespace App\Mixins;

class StrMixin
{
    /**
     * @return \Closure
     */
    public static function uppercase()
    {
        return function ($value) {
            return strtoupper($value);
        };
    }
}
