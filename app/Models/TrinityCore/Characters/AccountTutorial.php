<?php

namespace App\Models\TrinityCore\Characters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountTutorial extends Model
{
    use HasFactory;

    protected $connection = 'tc_char';
    public $incrementing = false;
}
