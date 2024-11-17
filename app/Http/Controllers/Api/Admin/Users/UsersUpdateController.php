<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Admin\Users;

use App\Models\User;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Routing\Controller;

final class UsersUpdateController extends Controller
{
    public function __invoke(UserUpdateRequest $request, User $user): JsonResource
    {
        $user->update($request->validated());

        return UserResource::make($user->refresh());
    }
}
