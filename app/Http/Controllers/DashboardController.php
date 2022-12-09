<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\CgHead;
use App\Models\User;


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

    public function discipleship()
    {
        $cgs = CgHead::all();
        
        return view('dashboard.discipleship', [
            'title' => 'Discipleship',
            'cgs' => $cgs
        ]);
    }

    public function chooseCg(User $user, $cg)
    {
        $logged = auth()->user()->id;
        $user = User::find($logged);


        // set cg_id on user based on cg_head_id from routes
        $user->cg_id = $cg;
        $user->save();

        return redirect('/discipleship');
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

    public function service()
    {
        return view('dashboard.service', [
            'title' => 'Service'
        ]);
    }
}
