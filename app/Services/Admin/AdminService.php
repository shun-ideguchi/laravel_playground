<?php

namespace App\Services\Admin;

use App\Repositories\Admin\AdminRepositoryInterface;
use Illuminate\Support\Facades\Hash;

class AdminService
{
    public function __construct(
        private AdminRepositoryInterface $admin_repository,
    ) {
    }

    /**
     * 
     */
    public function create(array $values)
    {
        $regist_body = [
            'name' => $values['name'],
            'email' => $values['email'],
            'password' => Hash::make($values['password']),
        ];
        $result = $this->admin_repository->create($regist_body);
        dd($result);
    }
}
