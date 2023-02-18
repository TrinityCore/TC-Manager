<?php

namespace App\Models\TrinityCore\Characters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservedName extends Model
{
    use HasFactory;

    protected $connection = 'tc_char';
    protected $table = 'reserved_name';
    protected $primaryKey = 'name';

    public $incrementing = false;
    public $timestamps = false;

    protected $casts = [
        'name' => 'string',
    ];
}
