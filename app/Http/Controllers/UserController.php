<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function users()
    {
        $user = User::all();
        User::paginate(5);
        return view('admin.user.ManageUser', compact('user'));
    }

    public function addUser(Request $request)
    {
        $image = $request->file('image');
        if ($image) {
            $image_name = date('Ymdhis') . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
            $image_path = 'images/' . $image_name;
            User::insert([
                'image' => $image_path,
                'name' => $request->name,
                'email' => $request->email,
                'role' => $request->role,
                'password' => Hash::make('12341234'),
                'created_at' => Carbon::now(),
            ]);
        } else {
            User::insert([
                'name' => $request->name,
                'email' => $request->email,
                'role' => $request->role,
                'password' => Hash::make('12341234'),
                'created_at' => Carbon::now(),
            ]);

        }
        return redirect()->back();
    }
    public function update(Request $request, $id)
    {

        User::findOrFail($id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password' => Hash::make('12341234'),
            'updated_at' => Carbon::now(),
        ]);
        return redirect()->back();
    }

    public function profile()
    {

        return view('admin.profile.profile');
    }
    public function Delete($id)
    {
        User::findOrFail($id)->delete();
        return redirect()->back();
    }
    public function deleteUser($id)
    {
        User::findOrFail($id)->delete();
        return redirect()->back();

    }

}
