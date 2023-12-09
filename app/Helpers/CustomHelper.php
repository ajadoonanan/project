<?php

namespace App\Helpers;

class CustomHelper
{
    public static function getDiscountPrice(float $total, $discount)
    {
        $value = $total - (($discount / 100) * $total);

        return number_format($value, 2, '.', '');
    }

    public static function calculateDiscountedPrice($total, $discount)
    {
        $value = $total - (($discount / 100) * $total);

        return number_format($value, 2, '.', '');
    }
}
