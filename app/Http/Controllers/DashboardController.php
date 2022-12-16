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
        return view('dashboard.aboutUs', [
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


        // check only cg_id available on cg_heads table are allowed to inserted
        $cgconfirm = CgHead::where('id', $cg)->firstOrFail();

        $user->cg_id = $cgconfirm->id;
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
