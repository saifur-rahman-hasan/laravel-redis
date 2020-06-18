<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class AppController extends Controller
{
    public function index()
    {
        $users = Redis::get('users');
        $decodedUsers = json_decode($users);

        return response()->json( $decodedUsers );
    }
}
