<?php

namespace App\Models\TrinityCore\Characters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
    use HasFactory;

    protected $connection = 'tc_char';
    protected $table = 'mail';
    public $incrementing = false;
    public $timestamps = false;

    protected $casts = [
        'id' => 'int',
        'messageType' => 'int',
        'stationery' => 'int',
        'mailTemplateId' => 'int',
        'sender' => 'int',
        'receiver' => 'int',
        'has_items' => 'int',
        'expire_time' => 'int',
        'deliver_time' => 'int',
        'money' => 'int',
        'cod' => 'int',
        'checked' => 'int'
    ];

    protected $fillable = [
        'messageType',
        'stationery',
        'mailTemplateId',
        'sender',
        'receiver',
        'subject',
        'body',
        'has_items',
        'expire_time',
        'deliver_time',
        'money',
        'cod',
        'checked'
    ];
}
