<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\Users;

class Auth extends BaseController
{
    public function login()
    {
        $users = new Users();
        $email = $this->request->getPost('email');

        $get_user = $users->get_user($email);

        if ($get_user['email'] == $email) {
            session()->set('email', $get_user['email']);
            return redirect()->to('/dashboard');
        } else {
            return redirect()->to('/login');
        }
    }
}
