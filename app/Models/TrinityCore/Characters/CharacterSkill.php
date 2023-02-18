<?php

namespace App\Models\TrinityCore\Characters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CharacterSkill extends Model
{
    use HasFactory;

    protected $connection = 'tc_char';
    protected $table = 'character_skill';

    public $incrementing = false;
    public $timestamps = false;

    protected $casts = [
        'guid' => 'int',
        'skill' => 'int',
        'value' => 'int',
        'max' => 'int'
    ];

    protected $fillable = [
        'value',
        'max'
    ];
}
