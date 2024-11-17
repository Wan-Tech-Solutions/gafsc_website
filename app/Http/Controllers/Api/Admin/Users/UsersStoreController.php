<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Admin\Users;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Routing\Controller;

final class UsersStoreController extends Controller
{
    public function __invoke(UserStoreRequest $request): JsonResource
    {
    }
}
