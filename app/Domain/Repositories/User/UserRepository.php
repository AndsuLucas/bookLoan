<?php
namespace App\Domain\Repositories\User;
use App\Domain\Repositories\User\UserRepositoryAbstract;

class UserRepository extends UserRepositoryAbstract
{
    public function __construct(UserDataManagerInterface $userDataManager)
    {
        $this->dataManger = $userDataManager;
    }

    public function registerNewUser(array $data): bool
    {
        dd('create', $this->dataManger->create([]));
    }
}