<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{

    public function index()
    {
        return view('admin.profile.profile');
    }

    public function show()
    {
        $user = Auth::user();
        return view('agency.profile', compact('user'));
    }

    public function update(Request $request)
    {

        $fileName = time() . '.' . $request->file('image')->getClientOriginalExtension();

        $request->file('image')->move(public_path('uploads'), $fileName);

        $user = Auth::user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->image = $fileName;
        $user->phone = $request->phone;

        $user->save();

        return redirect()->back();
    }
}
