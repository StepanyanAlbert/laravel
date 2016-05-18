<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Avatar extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;
    
    public function books()

    {
      return $this->hasMany('App\Book');    
    }
}
