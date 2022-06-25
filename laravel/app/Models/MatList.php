<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatList extends Model
{
    use HasFactory;

    protected $primaryKey = 'mat_list_id';
    protected $fillable = ['mat_list_id', 'raw_materials_id', 'product_id'];
    /**
     * Get the user that owns the phone.
     */
    public function raw_material()
    {
        return $this->belongsTo(raw_materials::class, 'raw_materials_id');
    }
}
