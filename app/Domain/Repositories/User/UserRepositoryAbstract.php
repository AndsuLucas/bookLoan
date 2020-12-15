<?php
namespace App\Domain\Repositories\User;
use App\Domain\Repositories\RepositoryInterface;

abstract class UserRepositoryAbstract implements RepositoryInterface
{
    public abstract function registerNewUser(array $userData): bool;
}