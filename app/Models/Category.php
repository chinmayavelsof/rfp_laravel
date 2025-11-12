<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryFactory> */
    use HasFactory;

    protected $fillable = ['name','status'];

    public function rfps(){
        return $this->belongsTo(Vendor::class, 'vendor_id', 'id');
    }

    public function vendors(){
        return $this->belongsToMany(Vendor::class, 'vendor_category_mapping');
    }

}
