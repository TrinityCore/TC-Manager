<?php

namespace App\Models\TrinityCore\Characters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CharacterPetDeclinedName extends Model
{
    use HasFactory;

    protected $connection = 'tc_char';
    protected $table = 'character_pet_declinedname';

    public $incrementing = false;

    protected $casts = [
        'id' => 'int',
        'owner' => 'int'
    ];

    protected $fillable = [
        'owner',
        'genitive',
        'dative',
        'accusative',
        'instrumental',
        'prepositional'
    ];
}
