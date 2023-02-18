<?php

namespace App\Models\TrinityCore\Characters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GmSurvey extends Model
{
    use HasFactory;

    protected $connection = 'tc_char';
    public $incrementing = false;
    protected $table = 'gm_survey';
    protected $primaryKey = 'surveyId';
    public $timestamps = false;

    protected $casts = [
        'guid' => 'int',
        'mainSurvey' => 'int',
        'createTime' => 'int'
    ];

    protected $fillable = [
        'guid',
        'mainSurvey',
        'comment',
        'createTime'
    ];
}
