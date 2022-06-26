<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $primaryKey = 'products_id';
    protected $fillable = ['type', 'weight', 'price_purchased', 'invoices_id', 'created_at'];
    /**
     * Get the user that owns the phone.
     */
    public function mat_list()
    {
        return $this->hasMany(MatList::class, 'products_id')->with('raw_material');
    }
}
