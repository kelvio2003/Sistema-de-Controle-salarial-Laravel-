<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\PautasController;
class Pauta extends Model
{
    use HasFactory;

    protected $fillable=[

'nome',
'p1',
'p2',
'p3',

'[_token]'


    ];
    
}
