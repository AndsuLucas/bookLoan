<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Domain\Repositories\User\UserRepositoryAbstract;

class UserController extends Controller
{   
    private $userRepository

    public function __construct(UserRepositoryAbstract $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function test()
    {
        dd($this->userRepository->registrer);
    }
}
