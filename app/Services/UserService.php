<?php

namespace App\Services;

use App\Models\Usuario;
use App\Repository\Interfaces\IUserRepository;
use App\Services\Interfaces\IUserService;
use Illuminate\Support\Facades\Hash;

class UserService implements IUserService
{
    private readonly IUserRepository $repository;

    public function __construct(IUserRepository $repository)
    {
        $this->repository = $repository;
    }

    function getUser($email, $id)
    {
        if(isset($email))
        {
            return $this->userExists($email);
        }
        return $this->repository->getUser($id);
    }
    private function userExists($email)
    {
        $user = $this->user::where('email', $email)->first();

        if($user != null) return true;
        return false;
    }
    function listUser($id)
    {
        return array();
    }

    function postUser($request)
    {
        return $this->repository->postUser(
            $this->buildUserModel($request));
    }

    private function buildUserModel($request) : Usuario
    {
        $data = new Usuario;

        $data->name = $request->input('nome');
        $data->sobrenome = $request->input('sobrenome');
        $data->dt_nascimento = $request->input('dt_nascimento');
        $data->celular = $request->input('celular');
        $data->email = $request->input('email');
        $data->senha = Hash::make($request->input('senha'));

        return $data;
    }
    function updateUser($request, $id)
    {
        return $this->repository->updateUser(
            $this->buildUserModel($request), $id);
    }

    function deleteUser()
    {
        // TODO: Implement deleteUser() method.
    }

    function searchUser()
    {
        // TODO: Implement searchUser() method.
    }
}
