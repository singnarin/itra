<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    public $timestamps = false;
    protected $keyType = 'varchar';
    protected $table = 'questions';
    public function sections(){
        return $this->belongsTo('App\Sections', 'section_id', 'id');
    }
}
