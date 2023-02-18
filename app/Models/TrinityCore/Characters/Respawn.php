<?php

namespace App\Models\TrinityCore\Characters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Respawn extends Model
{
    use HasFactory;

    protected $connection = 'tc_char';
    protected $table = 'respawn';

    protected $casts = [
        'type' => 'int',
        'spawnId' => 'int',
        'respawnTime' => 'int',
        'mapId' => 'int',
        'instanceId' => 'int',
    ];
}
