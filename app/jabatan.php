<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jabatan extends Model
{
    //
    protected $fillable = ['id','nama_jabatan','besar_uang'];
    protected $visible = ['id','nama_jabatan','besar_uang'];

    public function total (){
   	return $this->hasMany('App\total');
   }
}
