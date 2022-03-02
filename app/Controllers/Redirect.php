<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Google\Client as Google_Client;
use Google_Service_Oauth2;
use App\Models\Users;
use App\Models\UsersGroups;
use Config\View;

require_once '..\vendor\autoload.php';
require_once '..\vendor\google\apiclient-services\autoload.php';
require_once '..\vendor\google\auth\autoload.php';

class Redirect extends BaseController
{
    public function index()
    {
        //
        $clientID = '861681463248-neq53uoabkuqirl1cn9a01mlqbpk7ueq.apps.googleusercontent.com';
        $clientSecret = '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';
        $redirectUri = 'http://localhost:8080/redirect'; //Harus sama dengan yang kita daftarkan

        $client = new Google_Client();
        $client->setClientId($clientID);
        $client->setClientSecret($clientSecret);
        $client->setRedirectUri($redirectUri);
        $client->addScope("email");
        $client->addScope("profile");

        if (isset($_GET['code'])) {
            $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
            if (isset($token['access_token'])) {
                $client->setAccessToken($token['access_token']);
                $Oauth = new Google_Service_Oauth2($client);
                $userInfo = $Oauth->userinfo->get();
                $users = new Users();
                $data = $users->where('google_id', $userInfo->id)->find();
                if (!$data) {
                    if ($users->insert([
                        'google_id' => $userInfo->id,
                        'email' => $userInfo->email,
                        'name' => $userInfo->name,
                        'picture' => $userInfo->picture
                    ])) {
                        $userInfo->group = 1;
                        // $userInfo->id = $data[0]['id'];
                        Session()->auth = $userInfo;
                        return redirect()->to('/dashboard');
                    }
                    return redirect()->back();
                }
                $groups = new UsersGroups();
                $group = $groups->where('user_id', $data[0]['id'])->find();
                $userInfo->group_id = $group[0]['group_id'];
                $userInfo->id = $data[0]['id'];
                Session()->auth = $userInfo;

                return redirect()->to('/dashboard');
            }
        }
        $auth = Session()->auth;

        if ($auth) {
            return redirect()->to('/dashboard');
        }
        // echo "<a href='" . $client->createAuthUrl() . "'>Google Login</a>";
        $data = [
            'auth_url' => $client->createAuthUrl()
        ];
        return view('page/login', $data);
    }
}
