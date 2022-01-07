<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory;
    public $fillable = [
        'name', 
        'email', 
        'phone', 
        'subject', 
        'message'
    ];

    // public function category(){
    //     return $this->belongsTo(Category::class, 'category_id');
    // }
}