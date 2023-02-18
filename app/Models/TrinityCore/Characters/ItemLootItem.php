<?php

namespace App\Models\TrinityCore\Characters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemLootItem extends Model
{
    use HasFactory;

    protected $connection = 'tc_char';
    public $incrementing = false;
    public $timestamps = false;

    protected $casts = [
        'container_id' => 'int',
        'item_id' => 'int',
        'item_count' => 'int',
        'follow_rules' => 'bool',
        'ffa' => 'bool',
        'blocked' => 'bool',
        'counted' => 'bool',
        'under_threshold' => 'bool',
        'needs_quest' => 'bool',
        'rnd_prop' => 'int',
        'rnd_suffix' => 'int'
    ];

    protected $fillable = [
        'container_id',
        'item_id',
        'item_count',
        'follow_rules',
        'ffa',
        'blocked',
        'counted',
        'under_threshold',
        'needs_quest',
        'rnd_prop',
        'rnd_suffix'
    ];
}
