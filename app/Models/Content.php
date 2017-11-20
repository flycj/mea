<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    //
    protected $table = 'contents';
    protected $guarded = ['id'];
    public function column(){
        return $this->belongsTo('App\Models\Column');
    }
}
