<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    public function getAuthorAttribute($value)
    {
        // dd(preg_split('/\,/',$value));
        return preg_split('/\,/',$value)[1];
    }
}
