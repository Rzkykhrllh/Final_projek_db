<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    Public $timestamps = false;
    protected $primaryKey = 'invoice_no';


    public function customer(){
        return $this->hasOne(Customer::class, "customer_id", "customer_id");
    }

    public function stock(){
        return $this->hasOne(Stock::class, "stock_code", "stock_code");
    }
}
