<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SetupController extends Controller
{
    public function index() {
        return inertia('setup/Index', [
            "username" => "yannbanvi"
        ]);
    }
}
