<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Services\UserService;
use App\Http\Request\StoreUserRequest;
use App\Http\Requests\StoreUserRequest as RequestsStoreUserRequest;
use App\Http\Requests\StoreUpdateRequest;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{
    public function __construct(protected UserService $userService)
    {
    }

    public function store(RequestsStoreUserRequest $request)
    {
        $user = $this->userService->crearteUser($request->validated());

        return response()->json([
            'message' => 'User created successfully',
            'data' => $user
        ], 201);
    }

    public function update(StoreUpdateRequest $request, string $documentNumber)
    {

        $user = $this->userService->updateUser($documentNumber, $request->validate());

        return response()->json([
            'message' => 'User updated successfully',
            'data' => $user
        ]);
    }


 public function find(int $userId): JsonResponse
    {
        $user = $this->userService->findUser($userId);

        return response()->json([
            'data' => $user
        ]);
    }

    public function delete(string $documentNumber): JsonResponse
    {
        $this->userService->deleteUser($documentNumber);

        return response()->json([
            'message' => 'User deleted successfully'
        ], 204);
    }

    public function getAll(): JsonResponse
    {
        $users = $this->userService->getAllUser();

        return response()->json([
            'data' => $users
        ]);
    }
}

