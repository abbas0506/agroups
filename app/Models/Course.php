<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'fee',
        'duration',
    ];

    // protected $appends = ['student_count'];
    public $timestamps = false;

    public function groups()
    {
        return $this->hasMany(Group::class);
    }

    public function activeGroup()
    {
        return $this->hasOne(Group::class)->latest();
    }

    public function students()
    {
        return $this->belongsToMany(Student::class, 'registrations');
    }

    public function getStudentCountAttribute()
    {
        return $this->students()->count();
    }
}
