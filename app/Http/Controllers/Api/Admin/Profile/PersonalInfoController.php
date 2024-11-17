<?php

namespace App\Http\Controllers\Api\Admin\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Admin\PersonalInfoRequest;
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
        // dd($request->validated());
        auth()->user()->update($request->validated());

        return UserResource::make(auth()->user());
    }
}
