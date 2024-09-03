<?php

namespace App\Repositories\User;

use App\Models\User;
use App\Models\usuario;

use App\Repositories\Usuario\UserRepositoryInterface;

class UserRepositoryImpl implements UserRepositoryInterface
{
    /**
     * Create a new class instance.
     */
    public function __construct(protected User $userModel)
    {

    }

    public function all(){
      return $this->userModel->all();
    }

    public function create(array $user){

        return $this->userModel->create($user);
    }

    public function update(string $documentNumber, array $user){

        $userModel = $this->userModel->where('document_number', $documentNumber)->firstorFail();
        $userModel->update($user);
        return $userModel;

    }

    public function find(string $documentNumber){
        return $this->userModel->where('document_number', $documentNumber)->first();


    }

    public function delete(string $documentNumber){
       $user = $this->userModel->where('document_number', $documentNumber)->firstorFail();
       return $user->delete();
    }
}
