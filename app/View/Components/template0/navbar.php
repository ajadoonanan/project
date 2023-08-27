<?php

namespace App\View\Components\template0;

use App\Models\Cart;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class navbar extends Component
{
    public $cartNumber;

    /**
     * Create a new component instance.
     */
    public function __construct($cartNumber)
    {
        $this->cartNumber = $cartNumber;

        if (Auth::check()) {
            $this->cartNumber = Cart::where('user_id', Auth::id())->count();
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|\Closure|string
    {
        return view('components.template0.navbar');
    }
}
