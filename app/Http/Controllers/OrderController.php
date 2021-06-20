<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderSementara;
use App\Models\DVD;
use App\Models\Order;
use App\Models\DetailOrder;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detailorder = OrderSementara::paginate(5);
        // $meja = Meja::where('status_meja', 'like', "%".'kosong'."%")->get();
        return view('Order.order', compact('detailorder'));
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
        OrderSementara::where('id_sorder', 'like', "%".$id."%")->first()->delete();
        return redirect()->route('order.index')-> with('success', 'Detail Pesanan Berhasil Dihapus');
    }

    public function pesan(Request $request, $id)
    {
        // $DVD = DVD::find($id);
        // return view('order.detail', compact('DVD'));
        
        $dvd = DVD::where('id_dvd', 'like', "%".$id."%")->first();

        OrderSementara::create([
            'id_sorder' => 'SO'.date('Ymd').rand(01,999),
            'id_dvd' => $dvd->id_dvd,
            'harga' =>$dvd->harga_dvd
        ]);
        return redirect()->route('dvd.home');
    }

    
    public function save(Request $request)
    {
        $request->validate([
            'kembali'=>'required',
            'kembalian'=>'required',
            'user'=>'required',
        ]);

        $sementara = OrderSementara::All();
        $idorder ='O'.date('ymd').rand(01,999);
    
        $order = new Order;
        $order->id_sewa = $idorder;
        $order->id_user = $request->get('user');
        $order->tanggal_sewa = now();
        $order->tanggal_kembali = $request->get('kembali');
        $order->harga_sewa = $sementara->sum('harga');
        $order->uang_bayar = $request->get('bayar');
        $order->kembalian = $request->get('kembalian');
        $order->status = 'belum';
        $order->save();
    
        foreach ($sementara as $key => $value) {
            $order = array(
                'id_dorder' => 'DO'.date('ymd').rand(01,999),
                'id_sewa'=> $idorder,
                'id_dvd' => $value->id_dvd,
                'harga' =>$value->harga,
            );
            $dvd = DVD::where('id_dvd', 'like', "%".$value->id_dvd."%")->first();
            $dvd->stok = $dvd->stok - 1;
            $dvd->update();

            DetailOrder::insert($order);
            OrderSementara::where('id_sorder', 'like', "%".$value->id_dorder."%")->first()->delete();
    
        }       
        return redirect()->route('order.index');
    }

}
