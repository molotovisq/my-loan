<?php

namespace App\Http\Controllers;

use App\DTO\UserDTO;
use Illuminate\Http\Request;
use App\Services\UserService;
use App\Http\Requests\User\ShowUserRequest;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index(Request $request)
    {
        $users = $this->userService->getAll();

        return response()->json($users, 200);
    }

    public function show(ShowUserRequest $request)
    {
        $id = $request->id;

        $user = $this->userService->findById($id);

        return response()->json($user);
    }

    public function store(Request $request)
    {
        dd(123);
        $user = new UserDTO();

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');


        $storedUser = $this->userService->store($user);

        return response()->json($storedUser);
    }
}
