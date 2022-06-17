<?php

namespace App\Http\Controllers\System;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Activitylog\Models\Activity;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activities = Activity::latest()->paginate(15);
        $data = [
            $title = "Activity",
            $paths = [
                "Home",
                "Activity",
                "Index"  
            ]
        ];

        return view("system.activity.index", compact("activities", "data"));
    }
}
