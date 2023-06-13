<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $fillable = ['username', 'email', 'password'];

    public function tasks()
    {
        return  $this->hasMany(Task::class);
    }
}
