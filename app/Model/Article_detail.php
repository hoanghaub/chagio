<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Article_detail extends Model
{
    protected $table = 'articles_detail';
    protected $fillable = ['name','day','content','img'];
}
