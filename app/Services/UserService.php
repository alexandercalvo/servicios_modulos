<?php

namespace App\Services;

use App\Models\Usuario;
use App\Repositories\User\UserRepositoryInterface;
use App\Repositories\Usuario\UserRepositoryInterface as UsuarioUserRepositoryInterface;

class UserService
{
    /**
     * Create a new class instance.
     */
    public function __construct(protected UsuarioUserRepositoryInterface $userRepository)
    {

    }




    public function getAllUser(){

        return $this->userRepository->all();
    }

    public function crearteUser(array $userData){
        $user = $this->userRepository->create($userData);

        return $user;
    }

    public function updateUser(string $numberDocument, array $userData){

        return $this->userRepository->update($numberDocument, $userData);
    }


    public function findUser(string $numberDocument){

        return $this->userRepository->find($numberDocument);
    }

    public function deleteUser(string $numberDocument){

        return $this->userRepository->delete($numberDocument);
    }


}
