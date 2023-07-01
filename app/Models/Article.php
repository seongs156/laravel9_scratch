<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $table = 'articles';
    protected $guarded = [];

    public function complete()
    {
        $this->completed = true;
        $this->save();
    }

    public function path()
    {
        return route('articles.show', $this);
    }

    public function user()
    {

    }
    // $article->user
}
