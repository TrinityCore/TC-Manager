<?php

namespace App\Models\TrinityCore\Characters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CharacterBattlegroundData extends Model
{
    use HasFactory;

    protected $connection = 'tc_char';
    public $incrementing = false;


    protected $casts = [
        'guid' => 'int',
        'instanceId' => 'int',
        'team' => 'int',
        'joinX' => 'float',
        'joinY' => 'float',
        'joinZ' => 'float',
        'joinO' => 'float',
        'joinMapId' => 'int',
        'taxiStart' => 'int',
        'taxiEnd' => 'int',
        'mountSpell' => 'int'
    ];

    protected $guarded = [];
}
