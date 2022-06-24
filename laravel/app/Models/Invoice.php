<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    /**
     * @var mixed|string
     */
    public $place_of_purchase;
    public $invoice_file_location;
    public $invoice_cost;
    public $vat_cost;

    protected $primaryKey = 'invoices_id';

    protected $fillable  = ['invoice_file_location', 'place_of_purchase', 'invoice_cost', 'vat_cost', 'created_at'];


    public function raw_materials()
    {
        return $this->hasMany(raw_materials::class,  'invoices_id','invoices_id');
    }
}
