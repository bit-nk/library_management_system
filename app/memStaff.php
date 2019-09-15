<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class memStaff extends Model
{

      public $timestamps = false;
      protected $fillable = ['reqId','designation'];
      public function member(){
      return $this->hasMany('App\member');
    }
}
