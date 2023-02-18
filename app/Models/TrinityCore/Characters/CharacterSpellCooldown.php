<?php

namespace App\Models\TrinityCore\Characters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CharacterSpellCooldown extends Model
{
    use HasFactory;

    protected $connection = 'tc_char';
    protected $table = 'character_spell_cooldown';

    public $incrementing = false;

    protected $casts = [
        'guid' => 'int',
        'spell' => 'int',
        'item' => 'int',
        'time' => 'int',
        'categoryId' => 'int',
        'categoryEnd' => 'int'
    ];

    protected $fillable = [
        'item',
        'time',
        'categoryId',
        'categoryEnd'
    ];
}
