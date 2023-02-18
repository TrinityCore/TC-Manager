<?php

namespace App\Models\TrinityCore\Characters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CharacterAura extends Model
{
    use HasFactory;

    protected $connection = 'tc_char';
    public $incrementing = false;

    protected $table = 'character_aura';

    protected $casts = [
        'guid' => 'int',
        'casterGuid' => 'int',
        'itemGuid' => 'int',
        'spell' => 'int',
        'effectMask' => 'int',
        'recalculateMask' => 'int',
        'stackCount' => 'int',
        'amount0' => 'int',
        'amount1' => 'int',
        'amount2' => 'int',
        'base_amount0' => 'int',
        'base_amount1' => 'int',
        'base_amount2' => 'int',
        'maxDuration' => 'int',
        'remainTime' => 'int',
        'remainCharges' => 'int'
    ];

    protected $guarded = [];
}
