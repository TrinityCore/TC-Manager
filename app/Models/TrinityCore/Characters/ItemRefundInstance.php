<?php

namespace App\Models\TrinityCore\Characters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemRefundInstance extends Model
{
    use HasFactory;

    protected $connection = 'tc_char';
    protected $table = 'item_refund_instance';
    public $incrementing = false;
    public $timestamps = false;

    protected $casts = [
        'item_guid' => 'int',
        'player_guid' => 'int',
        'paidMoney' => 'int',
        'paidExtendedCost' => 'int'
    ];

    protected $fillable = [
        'paidMoney',
        'paidExtendedCost'
    ];
}
