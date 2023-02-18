<?php

namespace App\Models\TrinityCore\Characters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CharacterSpell extends Model
{
    use HasFactory;

    protected $connection = 'tc_char';
    protected $table = 'character_spell';
    public $incrementing = false;

    protected $casts = [
        'guid' => 'int',
        'spell' => 'int',
        'active' => 'int',
        'disabled' => 'int'
    ];

    protected $fillable = [
        'active',
        'disabled'
    ];
}
