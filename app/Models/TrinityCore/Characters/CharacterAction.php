<?php

namespace App\Models\TrinityCore\Characters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CharacterAction extends Model
{
    use HasFactory;

    protected $connection = 'tc_char';
    public $incrementing = false;

    protected $table = 'character_action';

    protected $casts = [
        'guid' => 'int',
        'spec' => 'int',
        'button' => 'int',
        'action' => 'int',
        'type' => 'int'
    ];

    protected $guarded = [];
}
