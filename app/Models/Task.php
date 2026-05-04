<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    // Add this line:
    protected $fillable = ['task_name', 'priority', 'deadline', 'status'];
}