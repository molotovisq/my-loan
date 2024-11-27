<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    /** @use HasFactory<\Database\Factories\AddressFactory> */
    use HasFactory;

    protected $fillable = [
        'client_id',
        'state',
        'city',
        'neighborhood',
        'street',
        'number',
        'is_primary',
        'description',
    ];

    protected $hidden = ['created_at', 'updated_at'];
}
