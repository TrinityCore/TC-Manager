<?php

namespace App\Models\TrinityCore\Characters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupInstance extends Model
{
    use HasFactory;

    protected $connection = 'tc_char';
    protected $table = 'group_instance';

    public $incrementing = false;

    protected $casts = [
        'guid' => 'int',
        'instance' => 'int',
        'permanent' => 'int'
    ];

    protected $fillable = [
        'permanent'
    ];
}
