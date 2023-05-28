<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
        'name',
        'address',
        'city_id',
        'phone',
        'mobile',
        'email',
        'website',
        'emp1',
        'mobile1',
        'email1',
        'emp2',
        'mobile2',
        'email2',
        'status',
    ];

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }
}
