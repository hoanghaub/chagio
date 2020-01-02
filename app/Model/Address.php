<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'address';

    protected $fillable = ['name','address','phone','business_registration_certificate_number','register','email'];
}
