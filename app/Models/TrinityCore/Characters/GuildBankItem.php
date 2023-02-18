<?php

namespace App\Models\TrinityCore\Characters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuildBankItem extends Model
{
    use HasFactory;

    protected $connection = 'tc_char';
    protected $table = 'guild_bank_item';
    public $incrementing = false;
    public $timestamps = false;

    protected $casts = [
        'guildid' => 'int',
        'TabId' => 'int',
        'SlotId' => 'int',
        'item_guid' => 'int'
    ];

    protected $fillable = [
        'item_guid'
    ];
}
