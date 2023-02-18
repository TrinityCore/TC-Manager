<?php

namespace App\Models\TrinityCore\Characters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CharacterQuestStatus extends Model
{
    use HasFactory;

    protected $connection = 'tc_char';
    public $incrementing = false;

    protected $casts = [
        'guid' => 'int',
        'quest' => 'int',
        'status' => 'int',
        'explored' => 'int',
        'timer' => 'int',
        'mobcount1' => 'int',
        'mobcount2' => 'int',
        'mobcount3' => 'int',
        'mobcount4' => 'int',
        'itemcount1' => 'int',
        'itemcount2' => 'int',
        'itemcount3' => 'int',
        'itemcount4' => 'int',
        'playercount' => 'int'
    ];

    protected $fillable = [
        'status',
        'explored',
        'timer',
        'mobcount1',
        'mobcount2',
        'mobcount3',
        'mobcount4',
        'itemcount1',
        'itemcount2',
        'itemcount3',
        'itemcount4',
        'playercount'
    ];
}
