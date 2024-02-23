<?php

namespace App\Http\Controllers\backend;

use Carbon\Carbon;
use App\Models\Application;
use Illuminate\Http\Request;
use App\Models\AskAppointment;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Notification;


class DashboardController extends Controller
{
    public function index(Request $request){

        return view('dashboard');
    }
    
}
