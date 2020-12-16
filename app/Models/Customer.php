<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    Public $timestamps = false;
    // public $table = 'customers';
    protected $primaryKey = 'customer_id';
}
