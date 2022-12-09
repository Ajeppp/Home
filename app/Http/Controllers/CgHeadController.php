<?php

namespace App\Http\Controllers;

use App\Models\CgHead;
use App\Http\Requests\StoreCgHeadRequest;
use App\Http\Requests\UpdateCgHeadRequest;
use Illuminate\Http\Request;

class CgHeadController extends Controller
{
    public function cg()
    {
        return view('admin.cg', [
            'title' => 'CG'
        ]);
    }

    public function store(Request $request)
    {

        // validate data
        $request->validate([
            'name' => 'required',
            'email' => 'required|email:dns|unique:cg_heads',
            'date' => 'required',
            'phone' => 'required|unique:cg_heads',
            'location' => 'required',
            'time' => 'required'
        ]);

        $cg = new CgHead;
        $cg->name = $request->name;
        $cg->email = $request->email;
        $cg->date = $request->date;
        $cg->phone = $request->phone;
        $cg->location = $request->location;
        $cg->time = $request->time;
        $cg->save();

        return redirect('/cg')->with('success', 'CG Head Added');
    }
}
