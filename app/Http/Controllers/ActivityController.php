<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index(){
        $activities = Activity::all();
        return view('activities.activities', compact('activities'));
    }

    public function show($id){
        $activity = Activity::find($id);
        return view('activities.show', compact('activity'));
    }
}
