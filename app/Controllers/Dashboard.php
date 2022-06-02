<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\Users;

class Dashboard extends BaseController
{
  public function index($orderId)
  {
    $key = "SB-Mid-server-W--YHBiJx0tpkHjCkZqlDJOU";
    $key_encode = base64_encode($key);
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://api.sandbox.midtrans.com/v2/" . $orderId . "/status",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_POSTFIELDS => "\n\n",
      CURLOPT_HTTPHEADER => array(
        "Accept: application/json",
        "Content-Type: application/json",
        "Authorization: " . $key_encode . ": "
      ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);

    echo $response;
  }
}
