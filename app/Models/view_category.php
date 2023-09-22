<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class view_category extends Model
{
    use HasFactory;
    protected $fillable = [
        'catogery_name',
        'category_type'
    ];

}
