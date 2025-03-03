<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
   public function index()
   {
        $users = User::all();
        return view('admin-panel.users.index', compact('users'));
   } 

   public function store(Request $request)
   {      
         $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'status' => 'required|in:admin,user',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->status = $request->status;
        $user->save();

        return redirect()->back()->with('success', 'User created successfully');
   }

   public function edit($id)
   {
        $user = User::find($id);
        return view('admin-panel.users.edit', compact('user'));
   }

   public function update(Request $request, $id)
   {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'status' => 'required|in:admin,user',
        ]);

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->status = $request->status;
        $user->save();

        return redirect('admin/users')->with('success', 'User updated successfully');
   }

     public function destroy($id)
     {
          $user = User::find($id);
          $user->delete();

          return redirect('admin/users')->with('success', 'User deleted successfully');
     }
}
