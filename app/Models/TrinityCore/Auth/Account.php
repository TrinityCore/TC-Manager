<?php

namespace App\Models\TrinityCore\Auth;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $connection = 'tc_auth';

    protected $table = 'account';

    protected $casts = [
        'failed_logins' => 'int',
        'locked' => 'int',
        'online' => 'int',
        'expansion' => 'int',
        'mutetime' => 'int',
        'locale' => 'int',
        'recruiter' => 'int'
    ];

    protected $dates = [
        'joindate',
        'last_login'
    ];

    protected $hidden = [
        'salt',
        'verifier',
        'session_key_auth',
        'session_key_bnet',
        'totp_secret',
    ];

    protected $guarded = [
        'sessionkey',
    ];

    public function rbac_account_permissions()
    {
        return $this->hasMany(RbacAccountPermission::class, 'accountId');
    }

    public function accesses()
    {
        return $this->hasMany(AccountAccess::class, 'id');
    }

    public function characters()
    {
        return $this->hasMany(Character::class, 'account');
    }

    public function bans()
    {
        return $this->hasMany(AccountBanned::class, 'id');
    }

    public function mutes()
    {
        return $this->hasMany(AccountMuted::class, 'guid');
    }
}
