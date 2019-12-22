<?php

namespace App\Mixins;

class CollectionMixin
{
    /**
     * @return \Closure
     */
    public function uppercase()
    {
        return function () {
            return collect($this->items)->map(function ($item) {
                return strtoupper($item);
            });
        };
    }

    /**
     * @return \Closure
     */
    public function lowercase()
    {
        return function () {
            return collect($this->items)->map(function ($item) {
                return strtolower($item);
            });
        };
    }

    /**
     * @return \Closure
     */
    public function trim()
    {
        return function () {
            return collect($this->items)->map(function ($item) {
                return trim($item);
            });
        };
    }
}
