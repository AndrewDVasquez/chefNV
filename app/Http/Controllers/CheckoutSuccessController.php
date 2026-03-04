<?php

namespace App\Http\Controllers;

use App\Helpers\StripeCheckoutSuccess;
use App\Traits\PhpFlasher;

class CheckoutSuccessController extends Controller
{
    use PhpFlasher;

    public function index($id)
    {
        $stripe_check = new StripeCheckoutSuccess();
        $succesful = $stripe_check->updateCheckoutOrder($id);
        if (!$succesful) {
            abort(404);
        }

        return view('pages.default.checkout-successpage');
    }
}
