<?php

namespace App\Models\TrinityCore\Characters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuildMember extends Model
{
    use HasFactory;

    protected $connection = 'tc_char';
    protected $table = 'guild_member';
    protected $primaryKey = 'guid';
    public $incrementing = false;
    public $timestamps = false;

    protected $casts = [
        'guildid' => 'int',
        'guid' => 'int',
        'rank' => 'int'
    ];

    protected $fillable = [
        'guildid',
        'rank',
        'pnote',
        'offnote'
    ];

    public function guild()
    {
        return $this->belongsTo('App\Guild', 'guildid');
    }

    public function member()
    {
        return $this->belongsTo('App\Character', 'guid');
    }
}
