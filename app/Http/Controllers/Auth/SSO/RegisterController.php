<?php

namespace App\Http\Controllers\Auth\SSO;

use App\Http\Controllers\Controller;
use App\Http\Requests\SignUpRequest;
use App\Utilities\Registration;

class RegisterController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(SignUpRequest $request, Registration $register)
    {
        if ($request->account_type == 'business') {
            try {
                $register->business($request->validated());

                return response()->json(
                    [
                        'redirect' => route('user.dashboard.index'),
                    ],
                    200
                );
            } catch (\Throwable $th) {
                throw $th;
            }
        }

        try {
            $register->user($request->validated());

            return response()->json(
                [
                    'redirect' => route('user.dashboard.index'),
                ],
                200
            );
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
