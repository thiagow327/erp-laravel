<?php

namespace App\Policies;

use App\Models\User;

class ClientPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function create()
    {
        return true;
    }
}
