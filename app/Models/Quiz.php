<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    public $timestamps = false;
    protected $table = 'quiz';
    protected $fillable = [
        'questao_1',
        'questao_2',
        'questao_3',
        'questao_4',
        'questao_5'
    ];
}
