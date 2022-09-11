<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    

    protected $fillable = [
        'name',
        'title',
        'phone_number1',
        'phone_number2',
        'address',
        'domain'
    ];
}
