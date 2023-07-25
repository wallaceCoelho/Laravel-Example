<?php

namespace App\Repository\Interfaces;

use App\Models\Usuario;

interface IUserRepository
{
    public function __construct(Usuario $user);
    function getUser($id);
    function listUser($id);
    function postUser($data);
    function updateUser($data, $id);
    function deleteUser();
    function searchUser();
}
