<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
// use File;
// use Storage;
// use App\Http\Requests\StoreTrainingRequest;
// use Mail;
// use Notification;
// use App\Notifications\DeleteTrainingNotification;

class UserController extends Controller
{
    public function index()
    {
        // query user from users table using model
        $users = \App\Models\User::all();
        // return to view with $trainings
        //resources/view/trainings/index.blade.php
        return view('users.index', compact('users'));
    }

    public function show(User $user)
    {
        $this->authorize('view', $user);
        // find id on table using model
        //$training = Training::find($id);
        // this function is using Binding Model

        // return to view
        return view('users.show', compact('user'));
    }
}
