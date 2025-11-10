<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    /** @use HasFactory<\Database\Factories\VendorFactory> */
    use HasFactory;

    protected $fillable = ['user_id','revenue','total_employees','gst_no','pan_no','contact'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class,'vendor_category_mapping');
    }

    public function rfp_quotes(){
        return $this->hasMany(RfpQuote::class);
    }

}
