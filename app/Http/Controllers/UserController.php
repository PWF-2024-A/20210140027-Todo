<?php

namespace App\Http\Controllers;

use App\Models\clear;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('user.index');
    }
}
