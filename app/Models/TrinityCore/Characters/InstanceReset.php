<?php

namespace App\Models\TrinityCore\Characters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstanceReset extends Model
{
    use HasFactory;

    protected $connection = 'tc_char';
    protected $table = 'instance_reset';
    public $incrementing = false;
    public $timestamps = false;

    protected $casts = [
        'mapid' => 'int',
        'difficulty' => 'int',
        'resettime' => 'int'
    ];

    protected $fillable = [
        'resettime'
    ];
}
