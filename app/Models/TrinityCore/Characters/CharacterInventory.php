<?php

namespace App\Models\TrinityCore\Characters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CharacterInventory extends Model
{
    use HasFactory;

    protected $connection = 'tc_char';
    protected $table = 'character_inventory';

    public $incrementing = false;

    protected $casts = [
        'guid' => 'int',
        'bag' => 'int',
        'slot' => 'int',
        'item' => 'int'
    ];

    protected $fillable = [
        'guid',
        'bag',
        'slot'
    ];
}
