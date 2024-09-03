<?php

namespace App\Repositories\Usuario;

interface UserRepositoryInterface
{
    public function all();
    public function find(string $idUser);
    public function update(string $idUser, array $data);
    public function create(array $user);
    public function delete(string $idUser);

}
