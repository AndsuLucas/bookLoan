<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

        $id = $this->userRepository->registerNewUser([]);
        return redirect()->route('viewProfile', ['id' => $id]);
    }

    public function profile($id)
    {
        $this->userRepository->findById($id);
    }
}
