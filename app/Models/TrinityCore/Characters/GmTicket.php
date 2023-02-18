<?php

namespace App\Models\TrinityCore\Characters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GmTicket extends Model
{
    use HasFactory;

    protected $connection = 'tc_char';
    public $incrementing = false;
    protected $table = 'gm_ticket';
    public $timestamps = false;

    protected $casts = [
        'type' => 'int',
        'playerGuid' => 'int',
        'createTime' => 'int',
        'mapId' => 'int',
        'posX' => 'float',
        'posY' => 'float',
        'posZ' => 'float',
        'lastModifiedTime' => 'int',
        'closedBy' => 'int',
        'assignedTo' => 'int',
        'completed' => 'int',
        'escalated' => 'int',
        'viewed' => 'int',
        'needMoreHelp' => 'int',
        'resolvedBy' => 'int'
    ];

    protected $fillable = [
        'type',
        'playerGuid',
        'name',
        'description',
        'createTime',
        'mapId',
        'posX',
        'posY',
        'posZ',
        'lastModifiedTime',
        'closedBy',
        'assignedTo',
        'comment',
        'response',
        'completed',
        'escalated',
        'viewed',
        'needMoreHelp',
        'resolvedBy'
    ];
}
