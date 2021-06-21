<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userku;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserkuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userku = User::paginate(10);
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
            'name' => 'required',
            'password' => 'required',
            'role' => 'required'
        ]);
        //fungsi eloquent untuk menambah data
        $user = new User;
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = Hash::make($request->get('password'));
        $user->role = $request->get('role');
        $user->save();
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
        $userku = User::find($id);
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
        $userku = User::where('id', $id)->first();
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
            'name' => 'required',
            'password' => 'required',
            'role' => 'required'
        ]);
        //fungsi eloquent untuk menngupdate data
            $user = User::find($id);

            
            $user->email = $request->get('email');
            $user->name = $request->get('name');
            $user->password = Hash::make($request->get('password'));
            $user->role = $request->get('role');

            $user->update();
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
        Userku::where('id', $id)->delete();
        return redirect()->route('userku.index')
            ->with('success', 'Akun berhasil dihapus');
    }
}
