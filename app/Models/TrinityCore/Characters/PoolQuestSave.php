<?php

namespace App\Models\TrinityCore\Characters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PoolQuestSave extends Model
{
    use HasFactory;

    protected $connection = 'tc_char';
    protected $table = 'pool_quest_save';
    public $incrementing = false;
    public $timestamps = false;

    protected $casts = [
        'pool_id' => 'int',
        'quest_id' => 'int'
    ];
}
