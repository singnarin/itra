<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    public $timestamps = false;
    protected $keyType = 'varchar';
    protected $table = 'users';
    public function schools(){
        return $this->belongsTo('App\Schools', 'school_id', 'id');
    }
}
