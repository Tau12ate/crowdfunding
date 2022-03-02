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
        return view('page/index');
    }
}
