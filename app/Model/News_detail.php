<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class News_detail extends Model
{
    protected $table = 'news_detail';
    protected $fillable = ['name','img','day','content'];
}
