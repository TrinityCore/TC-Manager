<?php

namespace App\Models\TrinityCore\Characters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupMember extends Model
{
    use HasFactory;

    protected $connection = 'tc_char';
    protected $table = 'group_member';
    protected $primaryKey = 'memberGuid';
    public $incrementing = false;
    public $timestamps = false;

    protected $casts = [
        'guid' => 'int',
        'memberGuid' => 'int',
        'memberFlags' => 'int',
        'subgroup' => 'int',
        'roles' => 'int'
    ];

    protected $fillable = [
        'guid',
        'memberFlags',
        'subgroup',
        'roles'
    ];
}
