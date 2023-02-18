<?php

namespace App\Models\TrinityCore\Characters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestTracker extends Model
{
    use HasFactory;

    protected $connection = 'tc_char';
    protected $table = 'quest_tracker';
    public $incrementing = false;
    public $timestamps = false;

    protected $casts = [
        'id' => 'int',
        'character_guid' => 'int',
        'completed_by_gm' => 'bool'
    ];

    protected $dates = [
        'quest_accept_time',
        'quest_complete_time',
        'quest_abandon_time'
    ];

    protected $fillable = [
        'id',
        'character_guid',
        'quest_accept_time',
        'quest_complete_time',
        'quest_abandon_time',
        'completed_by_gm',
        'core_hash',
        'core_revision'
    ];
}
