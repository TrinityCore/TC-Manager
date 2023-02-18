<?php

namespace App\Models\TrinityCore\Characters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CharacterPet extends Model
{
    use HasFactory;

    protected $connection = 'tc_char';
    protected $table = 'character_pet';

    public $incrementing = false;

    protected $casts = [
        'id' => 'int',
        'entry' => 'int',
        'owner' => 'int',
        'modelid' => 'int',
        'CreatedBySpell' => 'int',
        'PetType' => 'int',
        'level' => 'int',
        'exp' => 'int',
        'Reactstate' => 'int',
        'renamed' => 'int',
        'slot' => 'int',
        'curhealth' => 'int',
        'curmana' => 'int',
        'curhappiness' => 'int',
        'savetime' => 'int'
    ];

    protected $fillable = [
        'entry',
        'owner',
        'modelid',
        'CreatedBySpell',
        'PetType',
        'level',
        'exp',
        'Reactstate',
        'name',
        'renamed',
        'slot',
        'curhealth',
        'curmana',
        'curhappiness',
        'savetime',
        'abdata'
    ];
}
