<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Campaigns extends BaseController
{
    public function detail($slug)
    {
        $data = [
            'nav_active' => 'campaigns',
            'slug' => $slug
        ];
        return view('campaigns/detail', $data);
    }
}
