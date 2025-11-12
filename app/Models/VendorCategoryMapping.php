<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendorCategoryMapping extends Model
{
    /** @use HasFactory<\Database\Factories\VendorCategoryMappingFactory> */
    use HasFactory;

    protected $fillable = ['category_id','vendor_id'];
}
