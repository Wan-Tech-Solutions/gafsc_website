<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Admin\Users;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Symfony\Component\HttpFoundation\Response;

final class UsersDestroyController extends Controller
{
    public function __invoke(Request $request, User $user): JsonResource
    {
        $user->delete();

        return response()->json([], Response::HTTP_NO_CONTENT);
    }
}
