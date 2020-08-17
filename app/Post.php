<?php

namespace App;

use App\Category;
use Illuminate\Database\Eloquent\Model;
use Laravelista\Comments\Commentable;

class Post extends Model
{
    use Commentable;

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
