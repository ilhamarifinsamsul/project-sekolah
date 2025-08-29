<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $activities = Activity::latest()->take(3)->get();
        $news = News::latest()->take(3)->get();
        return view('home', [
        'activities' => $activities,
        'news'       => $news,
    ]);
    }
}
