<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Owner;

class Owners extends Controller
{
    public function index()
    {
        return view("owners/index", [
            "owners" => Owner::all()
        ]);
    }
}
