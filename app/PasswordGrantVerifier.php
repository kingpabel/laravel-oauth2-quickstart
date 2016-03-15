<?php
/**
 * Created by Kingpabel.
 * User: kingpabel
 * Date: 3/13/16
 * Time: 3:02 AM
 */

namespace app;

use Illuminate\Support\Facades\Auth;

class PasswordGrantVerifier
{
    public function verify($username, $password)
    {
        $credentials = [
            'email'    => $username,
            'password' => $password,
        ];

        if (Auth::once($credentials)) {
            return Auth::user()->id;
        }

        return false;
    }
}