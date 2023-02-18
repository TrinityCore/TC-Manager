<?php

namespace App\Models\TrinityCore\Characters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LagReport extends Model
{
    use HasFactory;

    protected $connection = 'tc_char';
    protected $primaryKey = 'reportId';
    public $timestamps = false;

    protected $casts = [
        'guid' => 'int',
        'lagType' => 'int',
        'mapId' => 'int',
        'posX' => 'float',
        'posY' => 'float',
        'posZ' => 'float',
        'latency' => 'int',
        'createTime' => 'int'
    ];

    protected $fillable = [
        'guid',
        'lagType',
        'mapId',
        'posX',
        'posY',
        'posZ',
        'latency',
        'createTime'
    ];
}
