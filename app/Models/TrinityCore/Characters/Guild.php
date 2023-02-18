<?php

namespace App\Models\TrinityCore\Characters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guild extends Model
{
    use HasFactory;

    protected $connection = 'tc_char';
    protected $table = 'guild';
    protected $primaryKey = 'guildid';
    public $incrementing = false;
    public $timestamps = false;

    protected $casts = [
        'guildid' => 'int',
        'leaderguid' => 'int',
        'EmblemStyle' => 'int',
        'EmblemColor' => 'int',
        'BorderStyle' => 'int',
        'BorderColor' => 'int',
        'BackgroundColor' => 'int',
        'createdate' => 'int',
        'BankMoney' => 'int'
    ];

    protected $fillable = [
        'name',
        'leaderguid',
        'EmblemStyle',
        'EmblemColor',
        'BorderStyle',
        'BorderColor',
        'BackgroundColor',
        'info',
        'motd',
        'createdate',
        'BankMoney'
    ];

    public function member()
    {
        return $this->hasMany('App\Character', 'guid');
    }
}
