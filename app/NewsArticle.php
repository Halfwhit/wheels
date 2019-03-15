<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsArticle extends Model
{
    protected $fillable = [
      'title', 'overview', 'image',
    ];
}
