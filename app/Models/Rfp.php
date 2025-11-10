<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rfp extends Model
{
    /** @use HasFactory<\Database\Factories\RfpFactory> */
    use HasFactory;

    protected $fillable = ['category_id','name','description','quantity','last_date','min_price','max_price','status'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function rfp_quotes(){
        return $this->hasMany(RfpQuote::class);
    }

}
