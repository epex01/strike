<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserBot extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'bot_name', 'amount', 'transaction_id', 'time_left', 'profit', 'status',
    ];
}
