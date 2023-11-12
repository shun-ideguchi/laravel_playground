<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Services\Admin\AdminService;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

// change extends controller
class RegisterController extends Controller
{
    public function __construct(
        private AdminService $admin_service,
    ) {
    }
    /**
     * return Regist Form.
     * 
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function showRegistrationForm()
    {
        return view('admin.register');
    }

    /**
     * regist Admin User.
     * 
     * @param RegisterRequest $request
     */
    public function register(RegisterRequest $request)
    {
        try {
            $request_arr = $request->toArray();
            $this->admin_service->create($request_arr);
            // TODO: transion require authpage & create session?
        } catch (QueryException $e) {
            Log::error($e->getMessage());
        }
    }
}
