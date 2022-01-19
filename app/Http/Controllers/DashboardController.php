<?php

namespace App\Http\Controllers;

use App\Traits\HasOwner;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    use HasOwner;

    public function index()
    {

        return view('dashboard.index');
    }
}
