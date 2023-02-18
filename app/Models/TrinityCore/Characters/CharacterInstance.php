<?php

namespace App\Models\TrinityCore\Characters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CharacterInstance extends Model
{
    use HasFactory;

    protected $connection = 'tc_char';
    protected $table = 'character_instance';

    public $incrementing = false;

    protected $casts = [
        'guid' => 'int',
        'instance' => 'int',
        'permanent' => 'int',
        'extendState' => 'int'
    ];

    protected $fillable = [
        'permanent',
        'extendState'
    ];
}
