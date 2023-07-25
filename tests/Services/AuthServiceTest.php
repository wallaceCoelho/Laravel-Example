<?php

namespace Tests\Services;

use App\Services\AuthService;
use Illuminate\Http\Request;
use PHPUnit\Framework\TestCase;

class AuthServiceTest extends TestCase
{

    public function testLogin()
    {
        $userControl = new AuthService();
        $request = $this->requestReturn();

        $response = $userControl->login($request);

        $this->assertTrue($response);
    }

    public function testLogout()
    {

    }
    private function requestReturn() : Request
    {
        $request = new Request();
        return $request->merge([
            'email' => 'wacoelho.dev4@gmail.com',
            'senha' => 'admin',
            'active' => 1
        ]);
    }
}
