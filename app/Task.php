<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Foundation\Auth\User;

class Task extends Model
{
    protected $fillable = ['name'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
