<?php

namespace App\Http\Controllers;

use App\Http\Requests\Settings\Account\UpdateEmailRequest;
use App\Http\Requests\Settings\Account\UpdatePasswordRequest;

class SettingsAccountController extends Controller
{
    public function index()
    {
        return view('settings.account.index');
    }

    public function updateEmail(UpdateEmailRequest $request)
    {
        $request->user()->update([
            'email' => $request->new_email,
        ]);
        return response($request->user(), 200);
    }

    public function updatePassword(UpdatePasswordRequest $request)
    {
        $request->user()->update([
            'password' => bcrypt($request->password),
        ]);
        return response([], 200);
    }
}
