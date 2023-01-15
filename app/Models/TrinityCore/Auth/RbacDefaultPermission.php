<?php

namespace App\Models\TrinityCore\Auth;

use App\Enums\TrinityCore\AccountRole;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RbacDefaultPermission extends Model
{
    use HasFactory;

    protected $connection = 'tc_auth';
    public $incrementing = false;
    public $timestamps = false;

    protected $casts = [
        'secId' => AccountRole::class,
        'permissionId' => 'int',
        'realmId' => 'int'
    ];

    public function rbac_permission(): BelongsTo
    {
        return $this->belongsTo(RbacPermission::class, 'permissionId');
    }
}
