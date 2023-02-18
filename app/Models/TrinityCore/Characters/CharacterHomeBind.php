<?php

namespace App\Models\TrinityCore\Characters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CharacterHomeBind extends Model
{
    use HasFactory;

    protected $connection = 'tc_char';
    protected $primaryKey = 'guid';
    protected $table = 'character_homebind';

    public $incrementing = false;

    protected $casts = [
        'guid' => 'int',
        'mapId' => 'int',
        'zoneId' => 'int',
        'posX' => 'float',
        'posY' => 'float',
        'posZ' => 'float'
    ];

    protected $fillable = [
        'mapId',
        'zoneId',
        'posX',
        'posY',
        'posZ'
    ];
}
