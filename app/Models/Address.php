<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'user_id', 'street', 'city', 'province', 'country', 'postal_code',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
