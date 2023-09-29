<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LoginController extends Controller
{
    public function login(Request $request)
    {

        $response = Http::post('https://eventmanager-t6f6ooyzca-uc.a.run.app/auth/login', [
            'login' => $request->input('login'),
            'password' => $request->input('password'),
        ]);

        $status = $response->status();

        if ($status == 200) {
            $token = $response->json();
            $request->session()->put('token', $token['token']);
            return redirect('/home');
        } else {
            return redirect('/login?error=login');
        }
    }
}
