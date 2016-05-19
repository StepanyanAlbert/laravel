<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    
    public function avatar()
    {
        return $this->belongsTo('App\Avatar');
    }
}
