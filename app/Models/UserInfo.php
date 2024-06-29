<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    use HasFactory;
   protected $fillable = [
    'image',
    'user_id',
    'first_name',
    'last_name',
    'company_name',
    'country',
    'street_address_1',
    'street_address_2',
    'town_city',
    'state_country',
    'postalcode_zip',
    'phone',
    'email',
    'get_different_address',
    'order_note'
   ];
}
