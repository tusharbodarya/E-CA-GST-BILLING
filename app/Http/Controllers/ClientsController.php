<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClientGroups;
use Illuminate\Support\Facades\Auth;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientGroups = ClientGroups::where('is_deleted', 1)->get();
        return view('tbl-files/tbl-clientgroups')->with(['clientGroups' => $clientGroups]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add-files/add-clientgroups');
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
            "groupname" => 'required',
            "description" => 'required'
        ]);

        $clientGroups = new ClientGroups;
        $clientGroups->name = $request->groupname;
        $clientGroups->description = $request->description;
        $clientGroups->is_user = Auth::user()->id;
        $save = $clientGroups->save();
        if ($save) {
            return back()->with('success', 'Client Groups has been Successfuly added.');
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
        $clientGroups = ClientGroups::where('id', $id)->get();
        return $clientGroups;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clientGroups = ClientGroups::where('id', $id)->first();
        return view('edit-files/edit-clientgroups')->with(['clientGroups' => $clientGroups]);
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
            "groupname" => 'required',
            "description" => 'required'
        ]);

        ClientGroups::where('id', $id)
        ->update([
            'name' => $request->groupname,
            'description' => $request->description
        ]);

        return redirect('/clientGroups')->with('success', 'Client Groups has been Successfuly Updated.');
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
}
