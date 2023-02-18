<?php

namespace App\Models\TrinityCore\Characters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PvpStatsBattleground extends Model
{
    use HasFactory;

    protected $connection = 'tc_char';
    public $timestamps = false;

    protected $casts = [
        'winner_faction' => 'int',
        'bracket_id' => 'int',
        'type' => 'int'
    ];

    protected $dates = [
        'date'
    ];

    protected $fillable = [
        'winner_faction',
        'bracket_id',
        'type',
        'date'
    ];
}
