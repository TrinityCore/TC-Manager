<?php

namespace App\Models\TrinityCore\Auth;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AccountAccess extends Model
{
    use HasFactory;

    protected $connection = 'tc_auth';
    protected $table = 'account_access';
    public $incrementing = false;
    public $timestamps = false;

    protected $casts = [
        'AccountID' => 'int',
        'SecurityLevel' => 'int',
        'RealmID' => 'int'
    ];

    protected $guarded = [];

    public function account(): BelongsTo
    {
        return $this->belongsTo(Account::class, 'AccountID');
    }
}
