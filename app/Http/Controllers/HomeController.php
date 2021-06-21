<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\Order;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    public function index()
    {
        $role = Auth::user()->role;
        if($role == "admin"){
            return redirect()->to('dvd');
        } else if($role == "kasir"){
            return redirect()->to('dvds');
        } else {
            return redirect()->to('logout');
        }
    }

    public function home()
    {
        $user = User::All();
        $order = Order::where('tanggal_sewa', 'like', "%".now()."%");
        return view('index', compact('user', 'order'));
    }
}
