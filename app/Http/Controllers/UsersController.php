<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;

class UsersController extends Controller
{
    public function index()
    {
    	$users = User::paginate(10);
    	return view('admin.users.show', compact('users'))->withTitle('Users');
    }

    public function create()
    {
    	return view('admin.users.create')->withTitle('Add Users');
    }

    public function store(Request $request)
    {
    	$this->validate($request,[
    		'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed'
    	]);

		User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        return redirect('admin/users')->with('message', 'User Add Successfully');
    }

     public function edit($id)
    {
    	$user = User::findOrFail($id);
    	return view('admin.users.edit', compact('user'))->withTitle('Edit User');
    }

    public function update(Request $request, $id)
    {
    	$this->validate($request,[
    		'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|email|max:255'
    	]);

    	$user = User::findOrFail($id);
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->isAdmin = $request->permission;
         if ($request->password === '') {
            $user->password = $user->password;
        }else{
            $user->password = bcrypt($request->password);
        }
        $user->save();
        return redirect('admin/users')->with('message', 'User Edited Successfully');

    }

    public function destroy($id)
    {
    	$user = User::findOrFail($id)->delete();
        return redirect('admin/users')->with('message', 'User Deleted Successfully');
    }
}
