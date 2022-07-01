<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class WelcomeController extends Controller
{
    public function welcome(){
        return view('welcome');
    }



    // use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
