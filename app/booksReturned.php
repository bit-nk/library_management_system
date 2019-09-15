<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class booksReturned extends Model
{
    protected $primaryKey = 'returnId';
    protected $fillable = ['retDate', 'bookId', 'reqId'];
    public $timestamps = false;

    public function member(){
      return $this->belongsTo('App\member', 'reqId', 'reqId');
    }
}
