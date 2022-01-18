<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'Id', 'NUME', 'PRET', 'GREUTATE', 'DESCRIERE', 'CATEGORIE', 'CREATE_DATE', 'STOCK'
    ];
}
