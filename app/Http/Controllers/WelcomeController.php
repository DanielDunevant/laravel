<?php

namespace App\Http\Controllers;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
       /* $users = User::all();
        dd($users);
        foreach($users as $user){
            echo $user->name."<br>";
        }*/
        $user = new User();
        $user->name = "New";
        $user->email = "email@email.com";
        $user->created_at = Carbon::now();
        $user->updated_at = Carbon::now();
        $user->password = "kjhg";
        $user->save();
    }
}
