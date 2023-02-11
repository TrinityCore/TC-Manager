<?php

namespace App\Models\TrinityCore\Auth;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Update extends Model
{
    use HasFactory;

    protected $connection = 'tc_auth';
    protected $primaryKey = 'name';

    public $incrementing = false;
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
