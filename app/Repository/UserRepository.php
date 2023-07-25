<?php
declare(strict_types=1);
namespace App\Repository;

use App\Models\Usuario;
use App\Repository\Interfaces\IUserRepository;
use Illuminate\Database\Eloquent\MassAssignmentException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Mockery\Exception;

class UserRepository implements IUserRepository
{
    private Usuario $user;

    public function __construct(Usuario $user)
    {
        $this->user = $user;
    }

    function getUser($id)
    {
        try
        {
            return $this->user::findOrFail($id);
        }
        catch (ModelNotFoundException $e)
        {
            $msg = $e->getMessage();
            throw new Exception(message: "ERRO: ${$msg}");
        }
    }

    function listUser($id)
    {
        try
        {
            return $this->user::all();
        }
        catch (ModelNotFoundException $e)
        {
            $msg = $e->getMessage();
            throw new Exception(message: "ERRO: ${$msg}");
        }
    }

    function postUser($data)
    {
        try
        {
            return $data->save();
        }
        catch (MassAssignmentException $e)
        {
            $msg = $e->getMessage();
            throw new Exception(message: "ERRO: ${$msg}");
        }
    }

    function updateUser($data, $id)
    {
        try
        {
            return $this->user::find($id)->update($data);
        }
        catch (ModelNotFoundException $e)
        {
            $msg = $e->getMessage();
            throw new Exception(message: "ERRO: ${$msg}");
        }

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
