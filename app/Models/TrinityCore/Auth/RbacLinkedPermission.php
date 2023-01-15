<?php

namespace App\Models\TrinityCore\Auth;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RbacLinkedPermission extends Model
{
    use HasFactory;

    protected $connection = 'tc_auth';
    public $incrementing = false;
    public $timestamps = false;

    protected $casts = [
        'id' => 'int',
        'linkedId' => 'int'
    ];

    public function rbac_permission(): BelongsTo
    {
        return $this->belongsTo(RbacPermission::class, 'linkedId');
    }
}
