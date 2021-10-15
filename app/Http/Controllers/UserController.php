<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //get all users
    public function getAllUsers()
    {
       $users = User::orderBy('created_at', 'desc')->get();
       return response()->json([
         'users' => $users
       ]);
       
    }

    public function saveUser(Request $request)
    {

      $user = new User;
      if($request ->has('avatar') && !empty($request->avatar))
      {
        $avatarName = time() . '.' . $request->avatar->getClientOriginalExtension();
        $request->avatar->move(public_path('images/gallery'),$avatarName);
        $path = ('public/images/gallery'.$avatarName);
        $user->avatar = $path;
      }

      $user->name = $request->name;
      $user->surname = $request->surname;
      $user->role = $request->role;
      $user->email = $request->email;
      $user->password = Hash::make($request -> password);
      $user->phone = $request->phone;
      $user->address = $request->address;

      if($user->save())
      {
        return response()->json(['status' => true, 'message' => 'User Added Successfully']);
        
      }
      else{
        return response()->json(['status' => false, 'message' =>'There is some problem']);
      }
      
    }
}
