<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;


    protected $fillable = [
        'street',
        'city',
        'postcode',
        'province',
    ];

    protected $primaryKey = 'address_id';

    public function user()
    {
        return $this->hasOne("User");
    }
}