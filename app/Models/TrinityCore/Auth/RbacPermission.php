<?php

namespace App\Models\TrinityCore\Auth;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class RbacPermission extends Model
{
    use HasFactory;

    protected $connection = 'tc_auth';
    public $incrementing = false;
    public $timestamps = false;

    protected $casts = [
        'id' => 'int'
    ];

    public function rbac_account_permissions(): HasMany
    {
        return $this->hasMany(RbacAccountPermission::class, 'permissionId');
    }

    public function rbac_default_permissions(): HasMany
    {
        return $this->hasMany(RbacDefaultPermission::class, 'permissionId');
    }

    public function rbac_linked_permissions(): HasMany
    {
        return $this->hasMany(RbacLinkedPermission::class, 'linkedId');
    }
}
