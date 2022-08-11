<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class HomeController extends Controller
{
    public function index()
    {
        $kategoris = Kategori :: all();

        return view('home', compact('kategoris'));
    }

    public function store(Request $request)
    {

        $this -> validate($request, [
            'kategori' => 'required | max:40',
        ]);

        $name = $request -> file('image') -> getClientOriginalName();

        $request -> image -> move(public_path('images'), $name);

        dd('sukses');

        // INSERT //
        // $kategori = new Kategori();

        // $kategori -> kategori = $request -> kategori;
        // $kategori -> save();

        // return redirect('/');
    }

    // UPDATE //
    public function update($id, Request $request)
    {
        $kategoris = [
            'kategori' => $request -> kategori,
        ];

        Kategori :: where('idkategori', $id)
        -> update($kategoris);

        return redirect('/');
    }

    public function destroy($id)
    {
        Kategori :: where('idkategori', $id) -> delete();

        return redirect('/');
    }

}
