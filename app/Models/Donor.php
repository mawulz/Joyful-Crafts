<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donatur extends Model
{
    use HasFactory;

    protected $table = "donors";

    protected $fillable = [
        'name',
        'message',
        'amount',
        'payment_method'
    ];
}
