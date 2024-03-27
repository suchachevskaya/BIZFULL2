<?php

namespace App\Models;

use App\Enums\ProjectStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Project extends Model
{
    use HasFactory;

    public function changeStatus(ProjectStatus $status)
    {
        $this->status = $status->value;
        $this->save();
    }

    public function rewards()
    {
        return $this->hasMany(Reward::class);
    }

    public function faqs()
    {
        return $this->hasMany(FAQ::class);
    }

    public function galleries()
    {
        return $this->hasMany(Gallery::class);
    }

    public function socials()
    {
        return $this->hasMany(Social::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    protected $fillable = ['title','description', 'category', 'status', 'attachment', 'deadline', 'contact', 'user_id', 'status_change_by_id', 'funding', 'video', 'email', 'phone', 'social', 'total_donations', 'required_funds', 'short_desc'];
}







