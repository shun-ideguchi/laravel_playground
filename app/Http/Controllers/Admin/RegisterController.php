<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * 登録フォーム返却.
     * 
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function showRegistrationForm()
    {
        return view('admin.register');
    }

    public function register(RegisterRequest $request)
    {
        dd($request);
    }
}
