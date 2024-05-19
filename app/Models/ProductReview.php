<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductReview extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'userName', 'comment', 'product_id', 'userEmail'];

    public function ProductModel(): BelongsTo
    {
        return $this->belongsTo(ProductModel::class);
    }

    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
