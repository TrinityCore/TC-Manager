<?php

namespace App\Models\TrinityCore\Characters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MailItem extends Model
{
    use HasFactory;

    protected $connection = 'tc_char';
    protected $primaryKey = 'item_guid';
    public $incrementing = false;
    public $timestamps = false;

    protected $casts = [
        'mail_id' => 'int',
        'item_guid' => 'int',
        'receiver' => 'int'
    ];

    protected $fillable = [
        'mail_id',
        'receiver'
    ];
}
