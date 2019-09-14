<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    protected $fillable = [
        'file',

    ];
    protected $table = "image";

    public static function find($id)
    {
    }
}
