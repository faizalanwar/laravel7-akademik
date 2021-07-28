<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class dosen extends Model
{
    protected $table = 'dosen';
    use SoftDeletes;
    protected $fillable = ['nama','nip','matkul','tahunlulus'];
        
}
