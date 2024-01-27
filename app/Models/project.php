<?php

namespace App\Models;

use App\Enums\ProjectStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class project extends Model
{
    use HasFactory;
    public function changeStatus (ProjectStatus $status){
        $this->status=$status->value;
        $this->save();
    }
    protected $fillable = ['title', 'description', 'category', 'status', 'attachment', 'deadline', 'contact', 'user_id', 'status_change_by_id'];
}







