<?php

namespace App\Models\TrinityCore\Auth;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RbacAccountPermission extends Model
{
    use HasFactory;

    protected $connection = 'tc_auth';
    public $incrementing = false;
    public $timestamps = false;

    public function account(): BelongsTo
    {
        return $this->belongsTo(Account::class, 'accountId');
    }

    public function rbac_permission(): BelongsTo
    {
        return $this->belongsTo(RbacPermission::class, 'permissionId');
    }
}
