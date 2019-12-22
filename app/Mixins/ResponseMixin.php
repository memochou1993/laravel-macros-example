<?php

namespace App\Mixins;

class ResponseMixin
{
    /**
     * @return \Closure
     */
    public function error()
    {
        return function ($error) {
            return [
                'error' => $error,
            ];
        };
    }
}
