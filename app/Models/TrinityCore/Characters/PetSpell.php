<?php

namespace App\Models\TrinityCore\Characters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetSpell extends Model
{
    use HasFactory;

    protected $connection = 'tc_char';
    protected $table = 'pet_spell';
    public $incrementing = false;
    public $timestamps = false;

    protected $casts = [
        'guid' => 'int',
        'spell' => 'int',
        'active' => 'int'
    ];

    protected $fillable = [
        'active'
    ];
}
