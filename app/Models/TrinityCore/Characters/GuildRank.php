<?php

namespace App\Models\TrinityCore\Characters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuildRank extends Model
{
    use HasFactory;

    protected $connection = 'tc_char';
    protected $table = 'guild_rank';
    public $incrementing = false;
    public $timestamps = false;

    protected $casts = [
        'guildid' => 'int',
        'rid' => 'int',
        'rights' => 'int',
        'BankMoneyPerDay' => 'int'
    ];

    protected $fillable = [
        'rname',
        'rights',
        'BankMoneyPerDay'
    ];
}
