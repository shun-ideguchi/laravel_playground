<?php

namespace App\Repositories\Admin;

use App\Models\Admin;
use App\Repositories\Admin\AdminRepositoryInterface;

class AdminRepository implements AdminRepositoryInterface
{
    /**
     * Admin User Create.
     * 
     * @param array $values
     */
    public function create(array $values)
    {
        return Admin::create($values);
    }
}
