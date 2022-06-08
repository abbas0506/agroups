<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'course_id',
        'instructor_id',
        'startdate',

    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
    public function instructor()
    {
        return $this->belongsTo(Instructor::class);
    }
    public $timestamps = false;
}