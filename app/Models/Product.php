<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // use HasFactory;

    
    public $timestamps = false;

    // protected $fillable = [
    //     'id', 'Name', 'Price', 'Weight', 'Description', 'Category', 'CREATED_AT', 'STOCK'
    // ];

    protected $guarded = [];
}
