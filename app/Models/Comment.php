<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
    protected $fillable = ['body','project_id' ];
}
