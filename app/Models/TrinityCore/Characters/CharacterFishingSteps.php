<?php

namespace App\Models\TrinityCore\Characters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CharacterFishingSteps extends Model
{
    use HasFactory;

    protected $connection = 'tc_char';
    protected $table = 'character_fishingsteps';
    public $incrementing = false;

    protected $casts = [
        'guid' => 'int',
        'fishingSteps' => 'int',
    ];
}
