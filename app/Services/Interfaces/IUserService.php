<?php

namespace App\Services\Interfaces;

use App\Models\Usuario;
use App\Repository\Interfaces\IUserRepository;

interface IUserService
{
    public function __construct(IUserRepository $repository);
    function getUser($email, $id);
    function listUser($id);
    function postUser($request);
    function updateUser($request, $id);
    function deleteUser();
    function searchUser();
}
