<?php

namespace App\Models\TrinityCore\Characters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CharacterSocial extends Model
{
    use HasFactory;

    protected $connection = 'tc_char';
    protected $table = 'character_social';
    public $incrementing = false;

    protected $casts = [
        'guid' => 'int',
        'friend' => 'int',
        'flags' => 'int'
    ];

    protected $fillable = [
        'note'
    ];
}
