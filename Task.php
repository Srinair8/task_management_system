<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    // The attributes that are mass assignable.
    protected $fillable = ['title', 'description', 'status'];
}
