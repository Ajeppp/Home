<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
            'title' => 'Dashboard'
        ]);
    }

    public function aboutus()
    {
        return view('dashboard.aboutus', [
            'title' => 'About Us'
        ]);
    }

    public function cg()
    {
        return view('dashboard.cg', [
            'title' => 'CG'
        ]);
    }

    public function discipleship()
    {
        return view('dashboard.discipleship', [
            'title' => 'Discipleship'
        ]);
    }

    public function media()
    {
        return view('dashboard.media', [
            'title' => 'Media'
        ]);
    }

    public function location()
    {
        return view('dashboard.location', [
            'title' => 'Location'
        ]);
    }
}
