<?php

namespace App\Http\Controllers\Unauthenticated;

use App\Authority;
use App\Http\Controllers\Controller;

class AuthorityController extends Controller
{
    public function index()
    {
        return Authority::all();
    }

    public function show($id)
    {
        return Authority::find($id);
    }
}