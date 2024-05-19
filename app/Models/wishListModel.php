<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wishListModel extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'product_id', 'ProductName', 'ProductPics', 'ProductPrice', 'AmountOfProduct'];
}
