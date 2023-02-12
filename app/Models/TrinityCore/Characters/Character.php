<?php

namespace App\Models\TrinityCore\Characters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;

    protected $connection = 'tc_char';
    public $incrementing = false;

    public $incrementing = false;
    public $timestamps = false;

    protected $connection = 'tc_char';
    protected $primaryKey = 'guid';
    protected $casts = [
        'guid' => 'int',
        'account' => 'int',
        'race' => 'int',
        'class' => 'int',
        'gender' => 'int',
        'level' => 'int',
        'xp' => 'int',
        'money' => 'int',
        'skin' => 'int',
        'face' => 'int',
        'hairStyle' => 'int',
        'hairColor' => 'int',
        'facialStyle' => 'int',
        'bankSlots' => 'int',
        'restState' => 'int',
        'playerFlags' => 'int',
        'position_x' => 'float',
        'position_y' => 'float',
        'position_z' => 'float',
        'map' => 'int',
        'instance_id' => 'int',
        'instance_mode_mask' => 'int',
        'orientation' => 'float',
        'online' => 'int',
        'cinematic' => 'int',
        'totaltime' => 'int',
        'leveltime' => 'int',
        'logout_time' => 'int',
        'is_logout_resting' => 'int',
        'rest_bonus' => 'float',
        'resettalents_cost' => 'int',
        'resettalents_time' => 'int',
        'trans_x' => 'float',
        'trans_y' => 'float',
        'trans_z' => 'float',
        'trans_o' => 'float',
        'transguid' => 'int',
        'extra_flags' => 'int',
        'stable_slots' => 'int',
        'at_login' => 'int',
        'zone' => 'int',
        'death_expire_time' => 'int',
        'arenaPoints' => 'int',
        'totalHonorPoints' => 'int',
        'todayHonorPoints' => 'int',
        'yesterdayHonorPoints' => 'int',
        'totalKills' => 'int',
        'todayKills' => 'int',
        'yesterdayKills' => 'int',
        'chosenTitle' => 'int',
        'knownCurrencies' => 'int',
        'watchedFaction' => 'int',
        'drunk' => 'int',
        'health' => 'int',
        'power1' => 'int',
        'power2' => 'int',
        'power3' => 'int',
        'power4' => 'int',
        'power5' => 'int',
        'power6' => 'int',
        'power7' => 'int',
        'latency' => 'int',
        'talentGroupsCount' => 'int',
        'activeTalentGroup' => 'int',
        'ammoId' => 'int',
        'actionBars' => 'int',
        'grantableLevels' => 'int',
        'deleteInfos_Account' => 'int',
        'deleteDate' => 'int'
    ];

    protected $guarded = [];

    protected $appends = [
        'portraitImage',
        'className',
        'raceName'
    ];

    public function getClassNameAttribute($returnWrapped = false)
    {
        switch (true) {
            case ($this->class == 1):
                $className = "Warrior";
                break;
            case ($this->class == 2):
                $className = "Paladin";
                break;
            case ($this->class == 4):
                $className = "Rogue";
                break;
            case ($this->class == 3):
                $className = "Hunter";
                break;
            case ($this->class == 5):
                $className = "Priest";
                break;
            case ($this->class == 6):
                $className = "Death Knight";
                break;
            case ($this->class == 7):
                $className = "Shaman";
                break;
            case ($this->class == 8):
                $className = "Mage";
                break;
            case ($this->class == 9):
                $className = "Warlock";
                break;
            case ($this->class == 11):
                $className = "Druid";
                break;
        }

        if ($returnWrapped) {
            $slug = str_slug($className);
            $proper = ucwords($className);
            return "<span class='{$slug}'>{$proper}</span>";
        }

        return $className;
    }

    /**
     * @return string
     */
    public function getRaceNameAttribute($slug = false)
    {
        switch ($this->race) {
            case 1:
                $race = "Human";
                break;
            case 2:
                $race = "Orc";
                break;
            case 3:
                $race = "Dwarf";
                break;
            case 4:
                $race = "Night Elf";
                break;
            case 5:
                $race = "Undead";
                break;
            case 6:
                $race = "Tauren";
                break;
            case 7:
                $race = "Gnome";
                break;
            case 8:
                $race = "Troll";
                break;
            case 10:
                $race = "Blood Elf";
                break;
            case 11:
                $race = "Draenei";
                break;
        }

        return $slug ? str_slug($race) : $race;
    }

    /**
     * Returns a portrait image
     */
    public function getPortraitImageAttribute($avatarDir = null, $mimeType = '.gif')
    {
        return ($avatarDir)
            ? asset("{$avatarDir}/{$this->portrait}{$mimeType}")
            : asset("images/avatars/{$this->portrait}{$mimeType}");
    }

    /**
     * Returns a portrait string for a character
     */
    public function getPortraitAttribute()
    {
        return "{$this->gender}-{$this->race}-{$this->class}";
    }
}
