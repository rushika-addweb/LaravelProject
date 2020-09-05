<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event\UserCreated;

class UserAuthController extends Controller
{
    //
    public function index()
    {
         event (new UserCreated("You account has been send"));
    }
}
