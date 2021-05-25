<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DVD;
use App\Models\Penyewaan;

class PenyewaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('search')){ // Pemilihan jika ingin melakukan pencarian nama
            $penyewaan = Penyewaan::with('dvd')->where('id_penyewaan', 'like', "%".$request->search."%")    
            ->orwhere('id_user', 'like', "%".$request->search."%")
            ->orwhere('id_dvd', 'like', "%".$request->search."%")
            ->orwhere('tanggal_sewa', 'like', "%".$request->search."%")        
            ->orwhere('tanggal_kembali', 'like', "%".$request->search."%")    
            ->paginate(5);
        } else { // Pemilihan jika tidak melakukan pencarian nama
            //fungsi eloquent menampilkan data menggunakan pagination
            $penyewaan = Penyewaan::paginate(5); // Pagination menampilkan 5 data
        }
        return view('penyewaan.index', compact('penyewaan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dvd = DVD::All();
        return view('penyewaan.create', compact('dvd'));
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
}
