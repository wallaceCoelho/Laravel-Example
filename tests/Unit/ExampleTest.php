<?php

namespace Tests\Unit;

use App\Models\Model;
use App\Repository\UserRepository as User;
use Guzzle\Http\Client;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function testPostUser()
    {
        $client   = new Client('http://localhost');
        $request = $client->request([
            'form_params' => [
                'name' => 'abc',
                'sobrenome' => '123',
                'dt_nascimento' => '16-07-1997',
                'celular' => '13982148353',
                'email' => 'wall.coelho@hotmail.com',
                'senha' => 'admin'
            ]
        ]);
        $user = new User;

        $result = $user->postUser($request);

        $this->assertTrue($result);
    }
}
