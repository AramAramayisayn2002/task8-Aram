<?php
namespace App\Http\Controllers;


use App\Mail\UserMail;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
//
//        $user = User::query()->first();
//        $password = 'sdasd';
//        $r = Mail::to($user->email)->send(new UserMail($password));
//dd($r);
        return view('index');
    }

}
