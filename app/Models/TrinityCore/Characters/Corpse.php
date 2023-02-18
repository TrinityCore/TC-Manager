<?php

namespace App\Models\TrinityCore\Characters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Corpse extends Model
{
    use HasFactory;

    protected $connection = 'tc_char';
    protected $table = 'corpse';
    protected $primaryKey = 'guid';

    public $incrementing = false;

    protected $casts = [
        'guid' => 'int',
        'posX' => 'float',
        'posY' => 'float',
        'posZ' => 'float',
        'orientation' => 'float',
        'mapId' => 'int',
        'phaseMask' => 'int',
        'displayId' => 'int',
        'bytes1' => 'int',
        'bytes2' => 'int',
        'guildId' => 'int',
        'flags' => 'int',
        'dynFlags' => 'int',
        'time' => 'int',
        'corpseType' => 'int',
        'instanceId' => 'int'
    ];

    protected $fillable = [
        'posX',
        'posY',
        'posZ',
        'orientation',
        'mapId',
        'phaseMask',
        'displayId',
        'itemCache',
        'bytes1',
        'bytes2',
        'guildId',
        'flags',
        'dynFlags',
        'time',
        'corpseType',
        'instanceId'
    ];
}
