<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //başlık,açıklaması,kullanımı,örneği

    public $fillable = [
        'language_id','title', 'explanation', 'usage','codeexample'
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function comments()
    {
        return $this->hasMany('App\Comment','post_id');
    }
    public function language()
    {
        return $this->belongsTo('App\Language');
    }
    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
}
