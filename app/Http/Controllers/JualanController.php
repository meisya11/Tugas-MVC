<?php

namespace App\Http\Controllers;

use App\Models\Jualan;
use Illuminate\Http\Request;

class JualanController extends Controller
{
    public function index(){
        $jualan = Jualan::all();
        return view('jualan.index', compact(['jualan']));
    }
    public function create()
    {
        return view('jualan.create');
    }
    
    public function store(Request $request)
    {
        Jualan::create($request->except(['_token','submit']));
        return redirect ('/jualan');
    }
    public function edit($id)
    {
        $jualan = Jualan::find($id);
        return view('jualan.edit', compact(['jualan']));
    }
    public function update($id, Request $request)
    {
        $jualan = Jualan::find($id);
        $jualan->update($request->except(['_token','submit']));
        return redirect ('/jualan');
    }
    public function destroy($id)
    {
        $jualan = Jualan::find($id);
        $jualan->delete();
        return redirect ('/jualan');
    }


}
