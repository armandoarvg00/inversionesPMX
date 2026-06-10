<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user_metodopago;
class HomeController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    { 
        //user_metodopago = user_metodopago::paginate(15);
        $suma = user_metodopago::where('id_user', '=', auth()->user()->id)->sum('monto');
        $user_metodopago = user_metodopago::where('id_user', '=', auth()->user()->id)->paginate(15);
        return view('pages.dashboard', compact('user_metodopago'), compact('suma'));
    }
}
