<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    public $fillable = [
        'name'
    ];
    public $table = 'languages';

    public function posts()
    {
        return $this->hasMany('App\Post','language_id');
    }
}
