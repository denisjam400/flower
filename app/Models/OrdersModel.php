<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdersModel extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'country', 'firstName', 'lastName', 'Address', 'Address_2', 'State', 'Town', 'PostalCode', 'Email', 'Phone', 'NoteFromSellers'];
}
