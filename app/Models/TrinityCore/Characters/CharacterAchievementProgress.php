<?php

namespace App\Models\TrinityCore\Characters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CharacterAchievementProgress extends Model
{
    use HasFactory;

    protected $connection = 'tc_char';
    public $incrementing = false;

    protected $casts = [
        'guid' => 'int',
        'criteria' => 'int',
        'counter' => 'int',
        'date' => 'int'
    ];

    protected $guarded = [];
}
