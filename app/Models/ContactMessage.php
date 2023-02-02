<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ContactMessage extends Model
{
    use HasFactory;
    public function getCreatedAtAttribute($value)
    {
        return  Carbon::parse($value)->format('Y-m-d')  ;
    }
}
