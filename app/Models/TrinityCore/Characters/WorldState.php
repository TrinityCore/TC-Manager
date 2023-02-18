<?php

namespace App\Models\TrinityCore\Characters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorldState extends Model
{
    use HasFactory;

    protected $connection = 'tc_char';
    protected $primaryKey = 'entry';
    public $incrementing = false;
    public $timestamps = false;

    protected $casts = [
        'entry' => 'int',
        'value' => 'int'
    ];

    protected $fillable = [
        'value',
        'comment'
    ];
}
