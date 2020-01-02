<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Images_customer extends Model
{
    protected $table = 'images_customer';
    protected $fillable = ['name','img'];
}
