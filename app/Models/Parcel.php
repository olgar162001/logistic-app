<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parcel extends Model
{
    use HasFactory;

    protected $fillable = [
        'sender_name',
        'recipient_name',
        'address',
        'weight',
        'value',
        'amount_paid',
        'description',
        'status',
    ];
}
