<?php

namespace App\Services\Interfaces;

interface IAuthService
{
    function login($request) : bool;
    function logout() : bool;
}
