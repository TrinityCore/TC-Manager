<?php

namespace App\Models\TrinityCore\Characters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameEventSave extends Model
{
    use HasFactory;

    protected $connection = 'tc_char';
    protected $table = 'game_event_save';

    public $incrementing = false;

    protected $casts = [
        'eventEntry' => 'int',
        'state' => 'int',
        'next_start' => 'int'
    ];

    protected $fillable = [
        'state',
        'next_start'
    ];
}
