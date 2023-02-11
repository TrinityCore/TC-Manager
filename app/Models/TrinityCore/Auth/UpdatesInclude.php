<?php

namespace App\Models\TrinityCore\Auth;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UpdatesInclude extends Model
{
    use HasFactory;

    protected $connection = 'tc_auth';
    protected $table = 'updates_include';
    protected $primaryKey = 'path';

    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'state'
    ];
}
