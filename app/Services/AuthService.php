<?php

namespace App\Services;

use App\Services\Interfaces\IAuthService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Mockery\Exception;

class AuthService implements IAuthService
{
    function login($request) : bool
    {
        try
        {
            $credentials = ([
                'email' => $request->input('email'),
                'senha' => Hash::make($request->input('senha')),
            ]);
            $remember = $request->input('ativo') == 1;

            if(Auth::attempt($credentials, $remember))
            {
                $request->session()->regenerate();
                return true;
            }
            return false;
        }
        catch (Exception)
        {
            return false;
        }
    }

    function logout() : bool
    {
        Auth::logout();
        return true;
    }
}
