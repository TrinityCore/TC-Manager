<?php

namespace App\Models\TrinityCore\Auth;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IPBan extends Model
{
    use HasFactory;
    protected $connection = 'tc_auth';
}
