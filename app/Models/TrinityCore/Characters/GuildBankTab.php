<?php

namespace App\Models\TrinityCore\Characters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuildBankTab extends Model
{
    use HasFactory;

    protected $connection = 'tc_char';
    public $incrementing = false;
    public $timestamps = false;

    protected $casts = [
        'guildid' => 'int',
        'TabId' => 'int'
    ];

    protected $fillable = [
        'TabName',
        'TabIcon',
        'TabText'
    ];
}
