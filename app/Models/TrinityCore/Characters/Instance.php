<?php

namespace App\Models\TrinityCore\Characters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instance extends Model
{
    use HasFactory;

    protected $connection = 'tc_char';
    public $incrementing = false;
    protected $table = 'instance';

    public $timestamps = false;

    protected $casts = [
        'id' => 'int',
        'map' => 'int',
        'resettime' => 'int',
        'difficulty' => 'int',
        'completedEncounters' => 'int'
    ];

    protected $fillable = [
        'map',
        'resettime',
        'difficulty',
        'completedEncounters',
        'data'
    ];
}
