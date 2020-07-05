<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pertanyaan;
use App\Jawaban;

class JawabanController extends Controller
{
    public function store($pertanyaan_id, Request $request)
    {
    	Jawaban::create([
    		'pertanyaan_id'=>$pertanyaan_id,
    		'isi' => $request->jawaban
    	]);
	   	return redirect()->back();
    }

    public function index($pertanyaan_id)
    {
        // $jawaban= Jawaban::find($pertanyaan_id);
        $jawaban= Jawaban::all();
        return view('jawaban',compact('jawaban'));
    }
}
