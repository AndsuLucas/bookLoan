<?php
namespace App\Domain\Repositories\User;
use App\Domain\Repositories\User\UserRepositoryAbstract;

class UserRepository extends UserRepositoryAbstract
{
    public function __construct($dataManager)
    {
        $this->dataManger = $dataManger;
    }

    public function registerNewUser(array $data): bool
    {
        return true;
    }
}