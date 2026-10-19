<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShopSetting extends Model
{
    protected $fillable = [
        'name',
        'description',
        'address',
        'phone',
        'email',
        'google_maps_url',
        'tokopedia_url',
        'shopee_url',
        'is_open',
    ];
}