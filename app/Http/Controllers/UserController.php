<?php

namespace App\Http\Controllers;

use App\Services\Interfaces\IAuthService;
use App\Services\Interfaces\IUserService;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Mockery\Exception;

class UserController extends Controller
{
    protected IUserService  $user;
    protected IAuthService  $auth;

    function __construct(
        IUserService $user,
        IAuthService $auth)
    {
        $this->user = $user;
        $this->auth = $auth;
    }

    public function Login() : View
    {
        return view('usuario.login');
    }

    public function Logout() : View
    {
        $this->auth->logout();
        return view('usuario.login');
    }

    public function LoginUser(Request $request) : View
    {
        if(count(array($request)) > 0)
        {
            $response = $this->auth->login($request);
            if($response)
                return view('usuario.cadastrar');
        }
        return view('usuario.login');

    }

    public function Register() : View
    {
        return view('usuario.cadastrar');
    }

    public function NewRegister(Request $request) : View
    {
        if(count(array($request)) > 0)
        {
            try
            {
                if($this->user->getUser($request->input('email'), null))
                    return view('usuario.cadastrar');

                $this->user->postUser($request);
                return view('usuario.login');
            }
            catch(Exception $e)
            {
                return view('usuario.cadastrar');
            }
        }
        return view('usuario.cadastrar');

    }
}
