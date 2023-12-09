<?php

namespace App\Helpers;

use App\Models\points\Point;
use App\Models\points\PointsDiscount;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

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
        $this->total = $cart_total;
        $this->user_points = $user_points;
        $this->user_group_id = $user_group_id;
        $this->setPoints();
    }

    public function setBasePointsSimple()
    {
        return false;
    }

    public function setPoints()
    {
        $points_data = Point::where('points_is_active', 1)->first();
        $this->base_points = $points_data->points_per_dollar;

        $multiplier_data = $points_data->points_multiplier()
        ->where('group_id', $this->user_group_id)
        ->where('points_start_date', '<=', Carbon::now())
        ->where('points_expiry_date', '>', Carbon::now())
        ->first();

        if ($multiplier_data) {
            $this->multiplier = $multiplier_data->points_multiplier;
        }
    }

    public static function exchangePoints($points_exchanged)
    {
        if (!is_numeric($points_exchanged) || empty($points_exchanged)) {
            session()->forget('points_discount_applied');
            session()->forget('points_exchanged');

            return 'Discounts Removed';
        }

        $points_exchanged = (int) $points_exchanged;

        if ($points_exchanged > Auth::user()->total_points) {
            return 'You do not have enough points';
        } else {
            $reward = PointsDiscount::where('points_needed', $points_exchanged)->first();
            if ($reward) {
                session(['points_discount_applied' => $reward->points_discount_percent]);
                session(['points_exchanged' => $reward->points_needed]);
            }

            return 'Discount applied';
        }

        return 'No action taken';
    }

    public function clearPointsSession()
    {
        session()->forget('points_discount_applied');
        session()->forget('points_exchanged');
    }

    public function isDiscountApplied()
    {
        return session()->has('points_discount_applied');
    }

    public function getPoints()
    {
        return $this->base_points * $this->multiplier;
    }

    public function getUserPoints()
    {
        return $this->user_points;
    }

    public function getPointsGained()
    {
        return $this->getPoints() * $this->total;
    }

    public function getMultiplier()
    {
        return $this->multiplier;
    }

    public function getPointsExhanged(): int
    {
        return session('points_exchanged', 0);
    }

    public function getPointsDiscountApplied()
    {
        return session('points_discount_applied', 0);
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
