<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Promotion_detail extends Model
{
    protected $table = 'promotion_detail';
    protected $fillable = ['name','day','img','content'];
}
