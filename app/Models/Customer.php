<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    Public $timestamps = false;
    protected $table = 'customers';
    protected $primaryKey = 'customer_id';

    public function country(){
        return $this->hasOne(Country::class, "country_id", "country_id");
    }
}
