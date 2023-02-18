<?php

namespace App\Models\TrinityCore\Characters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetSpellCooldown extends Model
{
    use HasFactory;

    protected $connection = 'tc_char';
    protected $table = 'pet_spell_cooldown';
    public $incrementing = false;
    public $timestamps = false;

    protected $casts = [
        'guid' => 'int',
        'spell' => 'int',
        'time' => 'int',
        'categoryId' => 'int',
        'categoryEnd' => 'int'
    ];

    protected $fillable = [
        'time',
        'categoryId',
        'categoryEnd'
    ];
}
