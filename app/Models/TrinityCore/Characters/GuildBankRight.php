<?php

namespace App\Models\TrinityCore\Characters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuildBankRight extends Model
{
    use HasFactory;

    protected $connection = 'tc_char';
    protected $table = 'guild_bank_right';
    public $incrementing = false;
    public $timestamps = false;

    protected $casts = [
        'guildid' => 'int',
        'TabId' => 'int',
        'rid' => 'int',
        'gbright' => 'int',
        'SlotPerDay' => 'int'
    ];

    protected $fillable = [
        'gbright',
        'SlotPerDay'
    ];
}
