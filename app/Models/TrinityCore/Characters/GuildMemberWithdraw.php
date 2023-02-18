<?php

namespace App\Models\TrinityCore\Characters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuildMemberWithdraw extends Model
{
    use HasFactory;

    protected $connection = 'tc_char';
    protected $table = 'guild_member_withdraw';
    protected $primaryKey = 'guid';
    public $incrementing = false;
    public $timestamps = false;

    protected $casts = [
        'guid' => 'int',
        'tab0' => 'int',
        'tab1' => 'int',
        'tab2' => 'int',
        'tab3' => 'int',
        'tab4' => 'int',
        'tab5' => 'int',
        'money' => 'int'
    ];

    protected $fillable = [
        'tab0',
        'tab1',
        'tab2',
        'tab3',
        'tab4',
        'tab5',
        'money'
    ];
}
