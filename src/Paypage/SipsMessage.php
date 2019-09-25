<?php

namespace Worldline\Sips\Paypage;

use Worldline\Sips\Common\Field;

class SipsMessage
{
    /**
     * @return array
     */
    public function toArray(): array
    {
        $array = [];
        foreach ($this as $key => $value) {
            if ($value != null && $key != "serviceUrl" && $key != "paymentMeanBrandList") {
                if (is_int($value) || is_string($value)) {
                    $array[$key] = $value;
                } else {
                    $array[$key] = $value->toArray();
                }
            } elseif ($key == "paymentMeanBrandList" && !is_null($value)) {
                $array[$key] = $value;
            }
        }
        ksort($array);

        return $array;
    }

}