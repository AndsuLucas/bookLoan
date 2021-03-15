<?php
namespace App\Domain\Adapters\DataManager\User;

interface UserDataManagerInterface
{
    public function create(array $userData): bool;
    public function findById(int $id): array;
}