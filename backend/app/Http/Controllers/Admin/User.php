<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class User extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function loginCode()
    {
        return response()->json([
            'code' => 0,
            'data' => captcha_src('math'),
        ]);
    }
}
