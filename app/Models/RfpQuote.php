<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RfpQuote extends Model
{
    /** @use HasFactory<\Database\Factories\RfpQuoteFactory> */
    use HasFactory;

    protected $fillable = ['vendor_id','rfp_id','description','price','quantity','total','status'];

    public function rfp(){
        return $this->belongsTo(Rfp::class);
    }

    public function vendor(){
        return $this->belongsTo(vendor::class);
    }
}
