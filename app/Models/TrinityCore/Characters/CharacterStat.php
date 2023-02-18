<?php

namespace App\Models\TrinityCore\Characters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CharacterStat extends Model
{
    use HasFactory;

    protected $connection = 'tc_char';
    public $incrementing = false;

    protected $casts = [
        'guid' => 'int',
        'maxhealth' => 'int',
        'maxpower1' => 'int',
        'maxpower2' => 'int',
        'maxpower3' => 'int',
        'maxpower4' => 'int',
        'maxpower5' => 'int',
        'maxpower6' => 'int',
        'maxpower7' => 'int',
        'strength' => 'int',
        'agility' => 'int',
        'stamina' => 'int',
        'intellect' => 'int',
        'spirit' => 'int',
        'armor' => 'int',
        'resHoly' => 'int',
        'resFire' => 'int',
        'resNature' => 'int',
        'resFrost' => 'int',
        'resShadow' => 'int',
        'resArcane' => 'int',
        'blockPct' => 'float',
        'dodgePct' => 'float',
        'parryPct' => 'float',
        'critPct' => 'float',
        'rangedCritPct' => 'float',
        'spellCritPct' => 'float',
        'attackPower' => 'int',
        'rangedAttackPower' => 'int',
        'spellPower' => 'int',
        'resilience' => 'int'
    ];

    protected $fillable = [
        'maxhealth',
        'maxpower1',
        'maxpower2',
        'maxpower3',
        'maxpower4',
        'maxpower5',
        'maxpower6',
        'maxpower7',
        'strength',
        'agility',
        'stamina',
        'intellect',
        'spirit',
        'armor',
        'resHoly',
        'resFire',
        'resNature',
        'resFrost',
        'resShadow',
        'resArcane',
        'blockPct',
        'dodgePct',
        'parryPct',
        'critPct',
        'rangedCritPct',
        'spellCritPct',
        'attackPower',
        'rangedAttackPower',
        'spellPower',
        'resilience'
    ];
}
