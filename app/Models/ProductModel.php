<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductModel extends Model
{
    use HasFactory;

    protected $fillable = ['ProductName', 'ProductPics', 'ProductPrice', 'ProductDesc', 'ProductDiscount', 'SKU', 'FirstDesc'];

    public function ProductReview(): HasMany
    {
        return $this->hasMany(ProductReview::class);
    }
}
