<?php
namespace App\Domain\Repositories\User;
use App\Domain\Repositories\User\UserRepositoryAbstract;
use App\Domain\Adapters\DataManager\User\UserDataManagerInterface;

class UserRepository extends UserRepositoryAbstract
{
    public function __construct(UserDataManagerInterface $userDataManager)
    {
        $this->dataManager = $userDataManager;
    }

    public function registerNewUser(array $data): bool
    {
        dd('create', $this->dataManager->create([]));
    }

    public function findById(int $id): array
    {
    	dd("findById($id)", $this->dataManager->findById($id));
    }
}