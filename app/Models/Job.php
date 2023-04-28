<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $fillable = [
        'job_title',
        'job_location',
        'job_position',
        'job_desc',
        'job_skills',
        'how_to_apply',
        'link',
        'company',
        'user_id',
        'country',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
