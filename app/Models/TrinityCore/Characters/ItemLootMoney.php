<?php

namespace App\Models\TrinityCore\Characters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemLootMoney extends Model
{
    use HasFactory;

    protected $connection = 'tc_char';
    protected $table = 'item_loot_money';
    public $incrementing = false;
    public $timestamps = false;

    protected $casts = [
        'container_id' => 'int',
        'money' => 'int'
    ];

    protected $fillable = [
        'container_id',
        'money'
    ];
}
