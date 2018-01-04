<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin');
    }

    public function showUsers()
    {
        // $users = DB::select('select * from users', [1]);
        // return view('admin.show', ['users' => $users]);
    }

    public function updateUser()
    {

    }

    public function deleteUser()
    {

    }

    public function listDeletedUsers()
    {

    }
}
