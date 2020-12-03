<?php
namespace App\Domain\Adapters\DataManager\User\Laravel;

interface UserDataManagerInterface
{
    public function create(array $userData): bool;
    public function findByEmail(string $emailAddress): array;
}