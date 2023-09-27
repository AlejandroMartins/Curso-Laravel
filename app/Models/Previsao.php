<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Previsao extends Model
{
    use HasFactory;
    protected $table = "previsao";
    protected $filllabel = [
        'descricao',
        'data_previsao',
        'cidade'
    ];
}
