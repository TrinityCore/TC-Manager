<?php

namespace App\Models\TrinityCore\Characters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GmSubSurvey extends Model
{
    use HasFactory;

    protected $connection = 'tc_char';
    public $incrementing = false;
    protected $table = 'gm_subsurvey';
    public $timestamps = false;

    protected $casts = [
        'questionId' => 'int',
        'answer' => 'int'
    ];

    protected $fillable = [
        'answer',
        'answerComment'
    ];
}
