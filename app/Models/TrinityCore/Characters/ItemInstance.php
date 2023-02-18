<?php

namespace App\Models\TrinityCore\Characters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemInstance extends Model
{
    use HasFactory;

    protected $connection = 'tc_char';
    protected $table = 'item_instance';
    protected $primaryKey = 'guid';
    public $incrementing = false;
    public $timestamps = false;

    protected $casts = [
        'guid' => 'int',
        'itemEntry' => 'int',
        'owner_guid' => 'int',
        'creatorGuid' => 'int',
        'giftCreatorGuid' => 'int',
        'count' => 'int',
        'duration' => 'int',
        'flags' => 'int',
        'randomPropertyId' => 'int',
        'durability' => 'int',
        'playedTime' => 'int'
    ];

    protected $fillable = [
        'itemEntry',
        'owner_guid',
        'creatorGuid',
        'giftCreatorGuid',
        'count',
        'duration',
        'charges',
        'flags',
        'enchantments',
        'randomPropertyId',
        'durability',
        'playedTime',
        'text'
    ];
}
