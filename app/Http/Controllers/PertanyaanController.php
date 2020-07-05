<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pertanyaan;

class PertanyaanController extends Controller
{
    public function index()
    {
    	$pertanyaan= Pertanyaan::all();
    	return view('pertanyaan.index',compact('pertanyaan'));
    }

    public function create()
    {
    	return view('pertanyaan.create');
    }

    public function store()
    {
    	Pertanyaan::create([
    		'judul' => request('judul'),
    		'isi' => request('isi')
    	]);

    	return redirect()->route('pertanyaan.index');
    }

    public function show($id)
    {
    	$pertanyaan= Pertanyaan::find($id);
    	return view('pertanyaan.show',compact('pertanyaan'));
    }

    public function edit($id)
    {
    	$pertanyaan= Pertanyaan::find($id);
    	return view('pertanyaan.edit',compact('pertanyaan'));
    }

    public function update($id)
    {
    	$pertanyaan= Pertanyaan::find($id);
    	$pertanyaan->update([
    		'judul'=>request('judul'),
    		'isi'=>request('isi')
    	]);

    	return redirect()->route('pertanyaan.index');
    }

    public function delete($id)
    {
    	$pertanyaan= Pertanyaan::find($id);
    	$pertanyaan->delete($pertanyaan);
    	return redirect('/pertanyaan');
    }
}
