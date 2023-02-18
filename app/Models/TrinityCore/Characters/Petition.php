<?php

namespace App\Models\TrinityCore\Characters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petition extends Model
{
    use HasFactory;

    protected $connection = 'tc_char';
    protected $table = 'petition';
    public $incrementing = false;
    public $timestamps = false;

    protected $casts = [
        'ownerguid' => 'int',
        'petitionguid' => 'int',
        'type' => 'int'
    ];

    protected $fillable = [
        'petitionguid',
        'name'
    ];
}
