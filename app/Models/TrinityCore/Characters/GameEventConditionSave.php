<?php

namespace App\Models\TrinityCore\Characters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameEventConditionSave extends Model
{
    use HasFactory;

    protected $connection = 'tc_char';
    protected $table = 'game_event_condition_save';

    public $incrementing = false;

    protected $casts = [
        'eventEntry' => 'int',
        'condition_id' => 'int',
        'done' => 'float'
    ];

    protected $fillable = [
        'done'
    ];
}
