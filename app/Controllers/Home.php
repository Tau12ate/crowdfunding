<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        $auth = Session()->auth;
        if ($auth) {
            echo strlen($auth->id);
            echo sprintf("Data akun anda<br>ID: %s<br>Nama: %s<br>Email: %s<br><img src=\"%s\">", $auth->id, $auth->name, $auth->email, $auth->picture);
            echo "<br><a href=\"/logout\">Logout</a>";
            return;
        }
        echo "<a href=\"/redirect\">login</a>";
    }

    public function page()
    {
        $data = [
            'nav_active' => 'page'
        ];
        return view('page/index', $data);
    }

    public function services()
    {
        $data = [
            'nav_active' => 'services'
        ];
        return view('page/services', $data);
    }

    public function campaigns()
    {
        $data = [
            'nav_active' => 'campaigns'
        ];
        return view('page/campaigns', $data);
    }
    public function team()
    {
        $data = [
            'nav_active' => 'team'
        ];
        return view('page/team', $data);
    }
    public function contact()
    {
        $data = [
            'nav_active' => 'contact'
        ];
        return view('page/contact', $data);
    }
}
