<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\DetailOrder;
use App\Models\DVD;

class KembaliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('search')){ // Pemilihan jika ingin melakukan pencarian nama
            $kembali = Order::where('id_user', 'like', "%".$request->search."%")->
                              where('status', 'like', "%".'belum'."%")->paginate(10);
        } else { // Pemilihan jika tidak melakukan pencarian nama
            //fungsi eloquent menampilkan data menggunakan pagination
            $kembali = Order::where('status', 'like', "%".'belum'."%")->paginate(10);
        }
        // $dvd = DVD::where('status_id', '=',2)->paginate(5);
        return view('kembali.index',compact('kembali'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function kembali($id)
    {
        $detail = DetailOrder::where('id_sewa', 'like', "%".$id."%")->with('dvd');
        
        foreach ($detail as $key => $value->id_dvd) {
            $dvd = DVD::where('id_dvd', 'like', "%".$detail->id_dvd."%")->first();
            $dvd->status_dvd = "belum dipinjam";
            $dvd->update();
        };
        $order = Order::where('id_sewa', 'like', "%".$id."%")->first();
        $order->status = "kembali";
        $order->update();
        return redirect()->route('kembali.index');
    }
}
