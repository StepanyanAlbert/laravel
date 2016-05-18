<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    /**
     * @return array
     */
    public function avatar()
    {
        return $this->belongsTo('App\Avatar');
    }
}
