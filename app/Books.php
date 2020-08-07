<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    //menangani problem mass fillable
    protected $guarded = [];
    //relasi ke author
    public function author(){

        return $this->belongsTo(Author::class);
    }
    //menangani asset memunculkan gambar
    public function getCover(){
        if(substr($this->cover,0,5) == "https"){

        }
        if($this->cover){
            return asset($this->cover);
        }
        // jika tidak ada cover
        return 'https://via.placeholder.com/728x90.png?text=No+Cover';
    }
}
