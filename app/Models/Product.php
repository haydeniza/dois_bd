<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    // indicar qual conexão com banco de dados que deve ser utilizado
    protected $connection = 'mysql_secundaria';

    protected $fillable = [
        'name'
    ];
}
