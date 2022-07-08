<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $events_id;
    protected $primaryKey = 'events_id';
    protected $fillable = ['venue_name', 'raw_materials_id', 'product_id'];

}
