<?php

namespace Admin\PhpBase\Controllers\Admin;

use Admin\PhpBase\Commons\Controller;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $this->renderViewAdmin(__FUNCTION__);
    }
}