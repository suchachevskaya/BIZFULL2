<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    use HasFactory;
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
    protected $fillable = ['project_id', 'network', 'link'];
}
