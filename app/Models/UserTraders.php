<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserTraders extends Model
{
    use HasFactory;

    protected $table = 'user_traders';

    protected $fillable = [
        'user_id',
        'copy_trading_id',
        'amount',
        'profit_margin',
        'profit',
        'status',
    ];

    public function trader(): BelongsTo
    {
        return $this->belongsTo(CopyTrading::class, 'copy_trading_id');
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
