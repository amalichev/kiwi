<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;

class UserController extends Controller
{
    const ROLE_USER = 'user';
    const USER_LIMIT = 50;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        $roles = Role::all();

        foreach ($roles as $key => $role)
        {
            $data[$key]['title'] = $role->title;

            $users = User::where('role_id', $role->id)->orderBy('role_id')->orderBy('name')->get();

            $role->type == self::ROLE_USER && $users = $users->take(self::USER_LIMIT);

            $data[$key]['users'] = $users;
        }

        return view('users.listing', ['roles' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if ($user = User::find($id))
        {
            return view('users.view', ['user' => $user]);
        }

        return back()->with('message', ['text' => __('messages.user_not_found'), 'type' => 'danger']);
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
