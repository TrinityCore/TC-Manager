<?php

namespace App\Models\TrinityCore\Auth;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uptime extends Model
{
    use HasFactory;

    protected $connection = 'tc_auth';
    protected $table = 'uptime';

    public $incrementing = false;
    public $timestamps = false;

    protected $casts = [
        'realmid' => 'int',
        'starttime' => 'int',
        'uptime' => 'int',
        'maxplayers' => 'int'
    ];

    protected $fillable = [
        'uptime',
        'maxplayers',
        'revision'
    ];
}
