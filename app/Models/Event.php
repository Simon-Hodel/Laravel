<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\Guard as SanctumGuard;

class Event extends Model
{
    use HasFactory;
   protected $guarded = [];
    /*
    public function getRouteKeyName()
    {
       return 'slug'; 
    }
    */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
