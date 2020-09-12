<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    protected $fillable = ['user_id','title','slug','image','content','premium'];

    public function author(){
        return $this->belongsTo('App\User', 'user_id');
    }

    public function getExcerpt() {
        return str::limit($this->content, 40);
    }
}
