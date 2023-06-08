<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('chatapp.kontak', compact('user'));
    }

    public function profile()
    {
        if(Auth::check()){
            $data = User::where('id', Auth::id())->first();


            return view('chatapp.profile', compact('data'));
        }

        return redirect('login')->with('status', 'you are not allowed to access!');
    }

    public function profile_validation(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'user_image' => 'image|mimes:jpg,png,jpeg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000'
        ]);

        $user = User::find(Auth::id());

        if ($request->hasFile('user_image')) {
            $file = $request->file('user_image');
            $filename = time().'.'.$file->getClientOriginalName();
            $file->move('frontasset/images/avatar/',$filename);
            $user->user_image = $filename;
        }

        $user->name = $request->name;
        $user->email = $request->email;
        if($request->password != ''){
            $user->password = Hash::make($request->password);
        }
        $user->save();

        return redirect('profile')->with('status', 'Profile Details Updated!');
    }
}
