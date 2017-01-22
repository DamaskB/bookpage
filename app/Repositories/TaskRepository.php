<?php

/**
 * Created by PhpStorm.
 * User: BULAT
 * Date: 1/22/2017
 * Time: 1:22 PM
 */
namespace App\Repositories;

use App\User;
use App\Task;

class TaskRepository
{
    public function forUser(User $user)
    {
        return Task::where('user_id', $user->id)->orderBy('created_at', 'asc')->get();
    }
}