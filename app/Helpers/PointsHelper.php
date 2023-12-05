<?php

namespace App\Helpers;

class PointsHelper
{
    public int $total = 0;
    public int $base_points = 0;
    public int $multiplier = 1;
    public int $user_points = 0;
    public int $user_group_id = 1;
    public string $user_status = '';
    public string $user_status_title = 'Default';

    public function __construct()
    {
    }

    public function setValues($cart_total, $user_points, $user_group_id = 1)
    {
        return false;
    }

    public function setBasePointsSimple()
    {
        return false;
    }

    public function setPoints()
    {
        return false;
    }

    public static function exchangePoints($points_exchanged)
    {
        return false;
    }

    public function clearPointsSession()
    {
        return false;
    }

    public function isDiscountApplied()
    {
        return false;
    }

    public function getPoints()
    {
        return false;
    }

    public function getUserPoints()
    {
        return false;
    }

    public function getPointsGained()
    {
        return false;
    }

    public function getMultiplier()
    {
        return false;
    }

    public function getPointsExhanged(): int
    {
        return false;
    }

    public function getPointsDiscountApplied()
    {
        return false;
    }

    public function displayUserGroup($group_name)
    {
        switch ($group_name) {
            case 'default':
                // code...
                return 'All customers';
                break;
            case 'subscribed':
                // code...
                return 'Subscribed';
                break;

            default:
                // code...
                return 'All customers';
                break;
        }
    }

    public function getCouponForStripe()
    {
        // Modify stripe checkout
        // Get points exchanged in session
        // $points_exchanged = session('points_exchanged', 0);
        // if ($points_exchanged) {
        //     // Get reward from DB
        //     $reward = PointsDiscount::where('points_needed', $points_exchanged)->first();

        //     return $reward->stripe_discount_id;
        // } else {
        //     return '';
        // }
    }
}
