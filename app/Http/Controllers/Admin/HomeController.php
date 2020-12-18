<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\user;

class HomeController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $countUsers = User::all()->count();
        return view('admin.home', [
            'countUsers' => $countUsers
        ]);
    }
}
