<?php

namespace App\Models\TrinityCore\Characters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetAura extends Model
{
    use HasFactory;

    protected $connection = 'tc_char';
    protected $table = 'pet_aura';
    public $incrementing = false;
    public $timestamps = false;

    protected $casts = [
        'guid' => 'int',
        'casterGuid' => 'int',
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

    protected $fillable = [
        'recalculateMask',
        'stackCount',
        'amount0',
        'amount1',
        'amount2',
        'base_amount0',
        'base_amount1',
        'base_amount2',
        'maxDuration',
        'remainTime',
        'remainCharges'
    ];
}
