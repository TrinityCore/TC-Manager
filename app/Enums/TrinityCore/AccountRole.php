<?php

namespace App\Enums\TrinityCore;

enum AccountRole: int
{
    case SEC_ADMIN = 3;
    case SEC_GAMEMASTER = 2;
    case SEC_MODERATOR = 1;
    case SEC_PLAYER = 0;
    case RBAC_ADMIN = 192;
    case RBAC_GAMEMASTER = 193;
    case RBAC_MODERATOR = 194;
    case RBAC_PLAYER = 195;
}
