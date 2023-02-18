<?php

namespace App\Models\TrinityCore\Characters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetitionSign extends Model
{
    use HasFactory;

    protected $connection = 'tc_char';
    protected $table = 'petition_sign';
    public $incrementing = false;
    public $timestamps = false;

    protected $casts = [
        'ownerguid' => 'int',
        'petitionguid' => 'int',
        'playerguid' => 'int',
        'player_account' => 'int',
        'type' => 'int'
    ];

    protected $fillable = [
        'ownerguid',
        'player_account',
        'type'
    ];
}
