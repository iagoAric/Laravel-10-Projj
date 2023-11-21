<?php

namespace App\Models;

use App\Enums\SupportStatus;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class support extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject',
        'body',
        'status'
    ];
             // jeito simples
    //protected $casts = [
        // 'status => SupportsStatus::class, 
         // ];

    public function status(): Attribute
    {
         return Attribute::make(
            set: fn(SupportStatus $status) => $status->name,
         );
    }    

    
}
