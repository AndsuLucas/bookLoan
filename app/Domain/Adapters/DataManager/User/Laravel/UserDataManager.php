<?php
namespace App\Domain\Adapters\DataManager\User\Laravel;

use App\Domain\Adapters\DataManager\User\UserDataManagerInterface;
use App\Models\User;

class UserDataManager implements UserDataManagerInterface
{   
    private $userModel;

    public function __construct(User $user)
    {
        $this->userModel = $user;
    }

    public function create(array $userData): bool
    {
        return true;
    }


    public function findById(int $id): array
    {
        return ['username' => 'xablau'];
    }
}