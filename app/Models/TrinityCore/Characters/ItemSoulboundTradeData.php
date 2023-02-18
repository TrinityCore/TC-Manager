<?php

namespace App\Models\TrinityCore\Characters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemSoulboundTradeData extends Model
{
    use HasFactory;

    protected $connection = 'tc_char';
    protected $primaryKey = 'itemGuid';
    public $incrementing = false;
    public $timestamps = false;

    protected $casts = [
        'itemGuid' => 'int'
    ];

    protected $fillable = [
        'allowedPlayers'
    ];
}
