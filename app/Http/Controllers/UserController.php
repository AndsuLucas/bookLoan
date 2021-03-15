<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Domain\Repositories\User\UserRepositoryAbstract;

class UserController extends Controller
{   
    private $userRepository;

    public function __construct(UserRepositoryAbstract $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function register(Request $request)
    {
    	if ($request->isMethod('GET')) {
    		dd('show a view');
    	}

        dd($this->userRepository->registerNewUser([]));
    }

    public function profile($id)
    {
        $this->userRepository->findById($id);
    }
}
