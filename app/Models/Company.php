<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'company',
        'email',
        'industry',
        'occupation',
        'tel',
        'area',
        'type',
        'title',
        'message',
    ];


}
