<?php

namespace App\Models\TrinityCore\Characters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CharacterGlyph extends Model
{
    use HasFactory;

    protected $connection = 'tc_char';
    public $incrementing = false;

    protected $casts = [
        'guid' => 'int',
        'talentGroup' => 'int',
        'glyph1' => 'int',
        'glyph2' => 'int',
        'glyph3' => 'int',
        'glyph4' => 'int',
        'glyph5' => 'int',
        'glyph6' => 'int'
    ];

    protected $fillable = [
        'glyph1',
        'glyph2',
        'glyph3',
        'glyph4',
        'glyph5',
        'glyph6'
    ];
}
