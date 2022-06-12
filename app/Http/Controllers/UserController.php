<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('is_deleted', 1)->get();
        return view('tbl-files/tbl-users')->with(['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add-files/add-users');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $User = new User;
        $User->name = $request->name;
        $User->email = $request->email;
        $User->gstno = $request->gstno;
        $User->role = $request->role;
        $User->bankname = $request->bankname;
        $User->acno = $request->acno;
        $User->ifsc = $request->ifsc;
        $User->password = Hash::make($request->password);
        $save = $User->save();
        if ($save) {
            return back()->with('success', 'User has been Successfuly added.');
        } else {
            return back()->with('fail', 'Somthing Went wrong, try Again Later');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::where('id', $id)->get();
        return $user;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::where('id', $id)->first();
        return view('edit-files/edit-user')->with(['user' => $user]);
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
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        User::where('id', $id)
        ->update([
            'name' => $request->name,
            'gstno' => $request->gstno,
            'role' => $request->role,
            'bankname' => $request->bankname,
            'acno' => $request->acno,
            'ifsc' => $request->ifsc,
            'password' => Hash::make($request->password)
        ]);

        return redirect('/users')->with('success', 'User has been Successfuly Updated.');
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
    }


    public function employees()
    {
        $users = User::where('role', 'employee')->get();
        return view('tbl-files/tbl-employees')->with(['users' => $users]);
    }
}
