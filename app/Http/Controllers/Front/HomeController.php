<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function home(Request $req)
    {
        return redirect()->route("admin.dashboard");
    }

}
