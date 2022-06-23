<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class raw_materials extends Model
{
    use HasFactory;
    protected $primaryKey = 'raw_materials_id';
    protected $fillable = ['type', 'weight', 'price_purchased', 'invoices_id', 'created_at'];
    /**
     * Get the user that owns the phone.
     */
    public function invoices()
    {
        return $this->hasOne(Invoice::class, 'invoices_id');
    }
}
