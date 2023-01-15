<?php

namespace App\Models\TrinityCore\Auth;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AccountMuted extends Model
{
    use HasFactory;

    protected $connection = 'tc_auth';

    public function account(): BelongsTo
    {
        return $this->belongsTo(Account::class, 'guid');
    }
}
