<?php

namespace App\Models\TrinityCore\Characters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Update extends Model
{
    use HasFactory;

    protected $connection = 'tc_char';
    public $incrementing = false;
    protected $primaryKey = 'name';
    public $timestamps = false;

    protected $casts = [
        'speed' => 'int'
    ];

    protected $dates = [
        'timestamp'
    ];

    protected $fillable = [
        'hash',
        'state',
        'timestamp',
        'speed'
    ];
}
