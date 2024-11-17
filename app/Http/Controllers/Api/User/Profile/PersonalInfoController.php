<?php

namespace App\Http\Controllers\Api\User\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\User\PersonalInfoRequest;
use App\Http\Resources\User\UserResource;
use Illuminate\Http\Request;

class PersonalInfoController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(PersonalInfoRequest $request)
    {
        auth()->user()->update($request->validated());

        return UserResource::make(auth()->user());
    }
}
