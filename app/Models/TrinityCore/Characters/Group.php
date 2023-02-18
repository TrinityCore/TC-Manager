<?php

namespace App\Models\TrinityCore\Characters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $connection = 'tc_char';
    public $incrementing = false;

    protected $primaryKey = 'guid';
    public $timestamps = false;

    protected $casts = [
        'guid' => 'int',
        'leaderGuid' => 'int',
        'lootMethod' => 'int',
        'looterGuid' => 'int',
        'lootThreshold' => 'int',
        'icon1' => 'int',
        'icon2' => 'int',
        'icon3' => 'int',
        'icon4' => 'int',
        'icon5' => 'int',
        'icon6' => 'int',
        'icon7' => 'int',
        'icon8' => 'int',
        'groupType' => 'int',
        'difficulty' => 'int',
        'raidDifficulty' => 'int',
        'masterLooterGuid' => 'int'
    ];

    protected $fillable = [
        'leaderGuid',
        'lootMethod',
        'looterGuid',
        'lootThreshold',
        'icon1',
        'icon2',
        'icon3',
        'icon4',
        'icon5',
        'icon6',
        'icon7',
        'icon8',
        'groupType',
        'difficulty',
        'raidDifficulty',
        'masterLooterGuid'
    ];
}
