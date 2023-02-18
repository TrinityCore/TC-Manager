<?php

namespace App\Models\TrinityCore\Characters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CharacterEquipmentSet extends Model
{
    use HasFactory;

    protected $connection = 'tc_char';
    public $incrementing = false;

    protected $casts = [
        'guid' => 'int',
        'setindex' => 'int',
        'ignore_mask' => 'int',
        'item0' => 'int',
        'item1' => 'int',
        'item2' => 'int',
        'item3' => 'int',
        'item4' => 'int',
        'item5' => 'int',
        'item6' => 'int',
        'item7' => 'int',
        'item8' => 'int',
        'item9' => 'int',
        'item10' => 'int',
        'item11' => 'int',
        'item12' => 'int',
        'item13' => 'int',
        'item14' => 'int',
        'item15' => 'int',
        'item16' => 'int',
        'item17' => 'int',
        'item18' => 'int'
    ];

    protected $fillable = [
        'guid',
        'setindex',
        'name',
        'iconname',
        'ignore_mask',
        'item0',
        'item1',
        'item2',
        'item3',
        'item4',
        'item5',
        'item6',
        'item7',
        'item8',
        'item9',
        'item10',
        'item11',
        'item12',
        'item13',
        'item14',
        'item15',
        'item16',
        'item17',
        'item18'
    ];
}
