<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventProducts extends Model
{
    use HasFactory;

    protected $primaryKey = 'event_products_id';
    protected $fillable = ['mat_list_id', 'venue_date', 'venue_duration'];

    public function products()
    {
        return $this->hasMany(Product::class, 'products_id');
    }
}
