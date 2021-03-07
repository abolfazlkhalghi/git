<?php

namespace Khaleghi\Dashboard\Http\Controllers;

use app\Http\Controllers\Controller;


class DashboardController
{
    public function home()
        {
            return view('Dashboard::index');
        }
}
