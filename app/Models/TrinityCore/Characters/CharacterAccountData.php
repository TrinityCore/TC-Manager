<?php

namespace App\Models\TrinityCore\Characters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CharacterAccountData extends Model
{
    use HasFactory;

    protected $connection = 'tc_char';
    public $incrementing = false;


    protected $casts = [
        'guid' => 'int',
        'type' => 'int',
        'time' => 'int',
        'data' => 'string'
    ];

    protected $fillable = [
        'time',
        'data'
    ];
}
