<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index() {
        return view('panel.users.index', ['users'=>User::all()]);
    }

    public function new() {
        return view('panel.users.form');
    }

    public function add() {
        $data = $this->validate(request(), [
            'name'   => 'required|min:3',
            'email'  => 'required|email',
            'password'=> 'required',
            'role'   => 'required',
            'wallet'   => 'required',
            'bio'   => 'required|max:500'
        ]);
//        dd($data);
        $user = User::create($data);

        //if ($user instanceof User){}

        // checks...
        // set guarded values to Model
        $user->wallet = request('wallet');
        $user->role   = request('role');
        $user->save();

        return redirect()->back()->with(['success'=>true]);
    }

    public function edit($id) {
        $user = User::find($id);
        return view('panel.users.form')->with(['user'=>$user]);
    }

    public function update($id) {
        $data = $this->validate(request(), [
            'name'   => 'required|min:3',
            'email'  => 'required|email',
            //'password'=> 'required', //Ex.
            'role'   => 'required',
            'wallet'   => 'required',
            'bio'   => 'required|max:500'
        ]);
        $user = User::find($id);
        $user->update($data);
        return redirect()->route('panel.users')->with(['success'=>true]);
    }

    public function delete( User $user ) {
        dd($user);
        $user->delete();
        return redirect()->route('panel.users')->with(['success'=>true]);
    }
}
