<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtikelModel;

class ArtikelController extends Controller
{
    //
    public function index(){
        $artikel = ArtikelModel::get_all();
        return view('artikel.index', compact('artikel'));
    }

    public function create(){
 
    // memanggil view form
    return view('artikel.form');
    }

    public function store(Request $request){
    $data = $request->except(['_token']);
    $artikel = ArtikelModel::save($data);
    // menyimpan data
    if ($artikel) {

        return view('artikel.index');
        # code...
    }
}
    public function show($id)
        {
            $artikel = ArtikelModel::find_by_id($id);
            return view('artikel.show', compact('artikel'));
        }
    public function edit($id)
    {
        $artikel = ArtikelModel::find_by_id($id);
        return view('artikel.edit', compact('artikel'));
    }
    public function update($id,Request $request)
    {
        $artikel = ArtikelModel::update($id,$request->all());
        return view('artikel.index', compact('artikel'));
    }
    public function destroy($id)
    {
       $deleted = ArtikelModel::destroy($id);
       return redirect('/artikel');
    }
}

