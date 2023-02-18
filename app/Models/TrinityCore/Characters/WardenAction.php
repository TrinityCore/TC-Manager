<?php

namespace App\Models\TrinityCore\Characters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WardenAction extends Model
{
    use HasFactory;

    protected $connection = 'tc_char';
    protected $table = 'warden_action';
    protected $primaryKey = 'wardenId';
    public $incrementing = false;
    public $timestamps = false;

    protected $casts = [
        'wardenId' => 'int',
        'action' => 'int'
    ];

    protected $fillable = [
        'action'
    ];
}
