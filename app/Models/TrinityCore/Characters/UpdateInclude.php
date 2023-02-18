<?php

namespace App\Models\TrinityCore\Characters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UpdateInclude extends Model
{
    use HasFactory;

    protected $connection = 'tc_char';
    protected $table = 'updates_include';
    protected $primaryKey = 'path';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'state'
    ];
}
