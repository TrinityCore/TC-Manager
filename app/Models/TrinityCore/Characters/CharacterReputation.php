<?php

namespace App\Models\TrinityCore\Characters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CharacterReputation extends Model
{
    use HasFactory;

    protected $connection = 'tc_char';
    protected $table = 'character_reputation';

    public $incrementing = false;
    public $timestamps = false;

    protected $casts = [
        'guid' => 'int',
        'faction' => 'int',
        'standing' => 'int',
        'flags' => 'int'
    ];

    protected $fillable = [
        'standing',
        'flags'
    ];
}
