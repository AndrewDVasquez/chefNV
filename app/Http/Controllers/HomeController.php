<?php

namespace App\Http\Controllers;

use App\Traits\PhpFlasher;
use App\Models\Product;

class HomeController extends Controller
{

    use PhpFlasher;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Description here
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::withPrices()->take(4)->get();
        return view('pages.default.homepage', compact('products'));
    }
}
