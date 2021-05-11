<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {

        //$listAdmin = User::find($id);
        //dd($listAdmin);
        return view('backend.layout.dashboard');
    }
 }
