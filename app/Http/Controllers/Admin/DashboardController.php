<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\EstimateRequest;
use App\Models\Category;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard.dashboard', get_defined_vars());
    }
}
