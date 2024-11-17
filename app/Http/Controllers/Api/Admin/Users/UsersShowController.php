<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Admin\Users;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Routing\Controller;

final class UsersShowController extends Controller
{
    public function __invoke(Request $request, User $user): JsonResource
    {
        return  UserResource::make($user);
    }
}
