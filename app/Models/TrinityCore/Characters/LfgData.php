<?php

namespace App\Models\TrinityCore\Characters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LfgData extends Model
{
    use HasFactory;

    protected $connection = 'tc_char';
    protected $primaryKey = 'guid';
    public $incrementing = false;
    public $timestamps = false;

    protected $casts = [
        'guid' => 'int',
        'dungeon' => 'int',
        'state' => 'int'
    ];

    protected $fillable = [
        'dungeon',
        'state'
    ];
}
