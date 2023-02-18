<?php

namespace App\Models\TrinityCore\Characters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuildBankEventLog extends Model
{
    use HasFactory;

    protected $connection = 'tc_char';
    protected $table = 'guild_bank_eventlog';
    public $incrementing = false;
    public $timestamps = false;

    protected $casts = [
        'guildid' => 'int',
        'LogGuid' => 'int',
        'TabId' => 'int',
        'EventType' => 'int',
        'PlayerGuid' => 'int',
        'ItemOrMoney' => 'int',
        'ItemStackCount' => 'int',
        'DestTabId' => 'int',
        'TimeStamp' => 'int'
    ];

    protected $fillable = [
        'EventType',
        'PlayerGuid',
        'ItemOrMoney',
        'ItemStackCount',
        'DestTabId',
        'TimeStamp'
    ];
}
