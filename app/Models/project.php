<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class project extends Model
{

    protected $fillable = ['title', 'description', 'category', 'status', 'attachment', 'deadline', 'contact', 'user_id', 'status_change_by_id'];
}







