<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DVD;

class DVDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('search')){ // Pemilihan jika ingin melakukan pencarian nama
            $dvd = DVD::where('nama_dvd', 'like', "%".$request->search."%")->
                        orwhere('harga_dvd', 'like', "%".$request->search."%")->
                        orwhere('status_dvd', 'like', "%".$request->search."%")->
                        paginate(5);
        } else { // Pemilihan jika tidak melakukan pencarian nama
            //fungsi eloquent menampilkan data menggunakan pagination
            $dvd = DVD::paginate(5); // Pagination menampilkan 5 data
        }
        return view('dvd.index', compact('dvd'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dvd.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_dvd'=>'required',
            'nama_dvd' => 'required',
            'harga_dvd'=> 'required',
            'status_dvd'=> 'required',
            'stok'=> 'required',
            'image'=> 'required|file|image|mimes:jpeg,png,jpg',
        ]);


        if($request->file('image')) {
            $image_name = $request->file('image')->store('images', 'public');
        }

        $dvd = new DVD;
        $dvd->id_dvd = $request->get('id_dvd');
        $dvd->nama_dvd = $request->get('nama_dvd');
        $dvd->harga_dvd = $request->get('harga_dvd');
        $dvd->status_dvd = $request->get('status_dvd');
        $dvd->stok = $request->get('stok');
        $dvd->image_dvd = $image_name;

        $dvd->save(); 
        
        return redirect()->route('dvd.index')->with('success', 'DVD Berhasil Ditambahkan');   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dvd = DVD::find($id);
        return view('dvd.show', compact('dvd'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dvd = DVD::find($id);
        return view('dvd.edit', compact('dvd'));
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
        $request->validate([
            'id_dvd'=>'required',
            'nama_dvd' => 'required',
            'harga_dvd'=> 'required',
            'status_dvd'=> 'required',
            'stok'=> 'required',
            'image'=> 'required|file|image|mimes:jpeg,png,jpg',
        ]);
        
        $dvd = DVD::find($id);
        $dvd->id_dvd = $request->get('id_dvd');
        $dvd->nama_dvd = $request->get('nama_dvd');
        $dvd->harga_dvd = $request->get('harga_dvd');
        $dvd->status_dvd = $request->get('status_dvd');
        $dvd->stok = $request->get('stok');

        if($dvd->image && file_exists(storage_path('app/public/' .$dvd->image))){
            Storage::delete('public/' .$dvd->image);
        }
        $image_name = $request->file('image')->store('images', 'public');
        $dvd->image_dvd = $image_name;


        $dvd->update(); 
        
        return redirect()->route('dvd.index')->with('success', 'DVD Berhasil Diupdate');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DVD::find($id)->delete();
        return redirect()->route('dvd.index')-> with('success', 'DVD Berhasil Dihapus');
    }

    public function dvd(Request $request)
    {
        if($request->has('search')){ // Pemilihan jika ingin melakukan pencarian nama
            $dvd = DVD::where('nama_dvd', 'like', "%".$request->search."%")->
                        orwhere('harga_dvd', 'like', "%".$request->search."%")->
                        orwhere('status_dvd', 'like', "%".$request->search."%")->
                        paginate(6);
        } else { // Pemilihan jika tidak melakukan pencarian nama
            //fungsi eloquent menampilkan data menggunakan pagination
            $dvd = DVD::paginate(5); // Pagination menampilkan 5 data
        }
        return view('dvd.dvd', compact('dvd'));
    }
}
