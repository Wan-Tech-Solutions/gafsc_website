<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\User\Profile;

use App\Http\Requests\PasswordUpdateRequest;
use App\Http\Resources\User\UserResource;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

final class PasswordController extends Controller
{
    public function __invoke(PasswordUpdateRequest $request): JsonResource
    {
        auth()->user()->update(
            [
                'password' => Hash::make($request->input('new_password')),
            ]
        );

        return UserResource::make(auth()->user());
    }
}
