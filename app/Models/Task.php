<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Task extends Model
{
    use HasFactory;
    
    const STATUS_UNCOMPLETE = 0;
    const STATUS_COMPLETE   = 1;
    
    protected $fillable = [
		'title',
		'description',
		'status'
    ];
}
