<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Admin\Users;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Routing\Controller;

final class UsersIndexController extends Controller
{
    public function __invoke(Request $request): AnonymousResourceCollection
    {
    }
}
