<?php

namespace App\Models\TrinityCore\Characters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CharacterStat extends Model
{
    use HasFactory;

    protected $connection = 'tc_char';
    public $incrementing = false;
}
