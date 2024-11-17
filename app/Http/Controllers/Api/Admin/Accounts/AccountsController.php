<?php

namespace App\Http\Controllers\Api\Admin\Accounts;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AccountsController extends Controller
{
    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'name' => ['required'],
            'email' => ['required'],
            'password' => ['required'],
        ]);

        Admin::create($data);
    }

    public function update(Request $request, Admin $user)
    {
        $data = $this->validate($request, [
            'name' => ['required'],
            'email' => ['required'],
            'password' => ['required'],
        ]);

        $user->update($data);
    }

    public function delete(Request $request, Admin $user)
    {
        $user->delete();

        return response()->json([], Response::HTTP_NO_CONTENT);
    }
}
