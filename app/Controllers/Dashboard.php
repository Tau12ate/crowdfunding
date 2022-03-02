<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\Users;

class Dashboard extends BaseController
{
    public function index()
    {
        $users = new Users();
        //
        $auth = Session()->auth;
        // dd(session()->get('email'));

        if ($auth || session()->get('email') != '') {

            if ($auth) {
                echo strlen($auth->id);
                echo sprintf("Data akun anda<br>ID: %s<br>Nama: %s<br>Email: %s<br><img src=\"%s\">", $auth->id, $auth->name, $auth->email, $auth->picture);
                echo "<br><a href=\"/logout\">Logout</a>";
                return;
            }

            if (session()->get('email')) {
                $get_user = $users->get_user(session()->get('email'));
                echo strlen($get_user['id']);
                echo sprintf("Data akun anda<br>ID: %s<br>Nama: %s<br>Email: %s<br><img src=\"%s\">", $get_user['id'], $get_user['name'], $get_user['email'], $get_user['picture']);
                echo '<br>ok';
                echo "<br><a href=\"/logout\">Logout</a>";
                return;
            }
        } else {
            return redirect()->to('/login');
        }
    }
}
