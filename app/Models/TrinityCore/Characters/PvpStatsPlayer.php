<?php

namespace App\Models\TrinityCore\Characters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PvpStatsPlayer extends Model
{
    use HasFactory;

    protected $connection = 'tc_char';
    public $incrementing = false;
    public $timestamps = false;

    protected $casts = [
        'battleground_id' => 'int',
        'character_guid' => 'int',
        'winner' => 'bool',
        'score_killing_blows' => 'int',
        'score_deaths' => 'int',
        'score_honorable_kills' => 'int',
        'score_bonus_honor' => 'int',
        'score_damage_done' => 'int',
        'score_healing_done' => 'int',
        'attr_1' => 'int',
        'attr_2' => 'int',
        'attr_3' => 'int',
        'attr_4' => 'int',
        'attr_5' => 'int'
    ];

    protected $fillable = [
        'winner',
        'score_killing_blows',
        'score_deaths',
        'score_honorable_kills',
        'score_bonus_honor',
        'score_damage_done',
        'score_healing_done',
        'attr_1',
        'attr_2',
        'attr_3',
        'attr_4',
        'attr_5'
    ];
}
