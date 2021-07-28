<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Student extends Model
{
    use SoftDeletes;
    protected $table = "students";
    protected $fillable = ['nama','nrp','email','kelas','semester','jurusan','alamat','jeniskelamin','foto'];
        
    public function getFoto(){
        if(!$this->foto){
            return asset('images/default.png');
        }
        return asset('images/'.$this->foto);
    }
}
