<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\Order;
use Illuminate\Support\Facades\Storage;
use PDF;

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
        $data = Order::paginate(10);
        return view('index', compact('user', 'order', 'data'));
    }

    public function cetak_pdf(){
        $order = Order::All();
        $pdf = PDF::loadview('order.cetak_pdf', ['order' => $order]);
        return $pdf->stream();
    }
}
