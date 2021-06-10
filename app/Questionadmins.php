<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questionadmins extends Model
{
    public $timestamps = false;
    protected $keyType = 'varchar';
    protected $table = 'questionadmins';
    public function sections(){
        return $this->belongsTo('App\Sections', 'section_id', 'id');
    }
}
