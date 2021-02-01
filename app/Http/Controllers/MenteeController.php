<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenteeController extends Controller
{
    public function index()
    {
        // query user from users table using model
        $mentees = \App\Models\Mentee::all();
        // return to view with $trainings
        //resources/view/trainings/index.blade.php
        return view('mentees.index', compact('mentees'));
    }
}
