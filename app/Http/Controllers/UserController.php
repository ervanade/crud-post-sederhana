<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = User::latest()->paginate(5)->withQueryString();
        return view('Admin.UserManajemen', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('Admin/TambahUser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validate = $request->validate([
            'name' => 'required',
            'level' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5'
        ]);
        if ($validate) {
            User::create([
                'name' => $request->name,
                'level' => $request->level,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'remember_token' => Str::random(60),
            ]);
        }
        return redirect('/usermanajemen');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user = User::findorfail($id);
        return view('Admin.EditUser', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $user = User::findorfail($id);
        $this->validate($request, [
            'name' => 'required',
            'level' => 'required',
            'email' => 'required|email'
        ]);

        $user->update([
            'name' => $request->name,
            'level' => $request->level,
            'email' => $request->email
        ]);

        return redirect()->route('usermanajemen');
    }
    public function resetpassword($id)
    {
        //
        $user = User::findorfail($id);
        $user->update([
            'password' => bcrypt('password')
        ]);

        return redirect()->route('usermanajemen');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $user = User::findorfail($id)->delete();
        return redirect('/usermanajemen');
    }
}
