<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    protected $table = 'jawaban';
    protected $fillable = ['pertanyaan_id','isi'];
    public function pertanyaan()
    {
    	return $this->belongsTo(Pertanyaan::class);
    }
}
