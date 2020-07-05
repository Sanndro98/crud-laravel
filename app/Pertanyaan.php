<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    protected $table = 'pertanyaan';
    protected $fillable = ['judul','isi'];

    public function jawabans()
    {
    	return $this->hasMany(Jawaban::class);
    }
}
