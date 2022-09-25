<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'gender',
        'birhdate',
        'address',
        'qualification'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function qualification()
    {
        return $this->belongsTo(Qualification::class);
    }

    public function groups()
    {
        return $this->belongsToMany(Group::class, 'registrations');
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'registrations');
    }
}
