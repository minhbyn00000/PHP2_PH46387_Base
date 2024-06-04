<?php

namespace Asus\Base\Controllers\Admin;

use Asus\Base\Commons\Controller;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $this ->renderViewAdmin("dashboard",[]);
    }
}