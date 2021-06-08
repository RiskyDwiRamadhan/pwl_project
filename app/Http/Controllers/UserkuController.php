<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userku;
use App\Models\User;

class UserkuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userku = Userku::paginate(10);
        return view('userku.index', ['userku' => $userku]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('userku.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //melakukan validasi data
       $request->validate([
        'email' => 'required',
        'username' => 'required',
        'password' => 'required'
         ]);
        //fungsi eloquent untuk menambah data
        Userku::create($request->all());
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('userku.index')
        ->with('success', 'Akun Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $userku = Userku::find($id);
        return view('userku.detail', compact('userku'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $userku = User::where('id',$id);
        return view('userku.edit', compact('userku'));
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
         //melakukan validasi data
         $request->validate([
            'email' => 'required',
            'username' => 'required',
            'password' => 'required'
             ]);
            //fungsi eloquent untuk menngupdate data
            UserData::where('id',$id)->update($request->except(['_token', '_method' ]));
            //jika data berhasil diupdate, akan kembali ke halaman utama
            return redirect()->route('userku.index')
            ->with('success', 'Akun Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Userku::where('id',$id)->delete();
       return redirect()->route('userku.index')
         ->with('success', 'Akun berhasil dihapus');
    }
}
