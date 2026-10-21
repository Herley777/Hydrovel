<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LeituraSensor extends Model
{
    protected $table = 'leituras_sensores';

    protected $fillable = [
        'pressao',
        'vazao',
        'ph',
        'turbidez',
        'temperatura',
    ];
}
