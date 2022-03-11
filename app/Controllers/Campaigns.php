<?php

namespace App\Controllers;

require_once '..\vendor\autoload.php';
// require_once '..\midtrans\midtrans-php\Midtrans.php';

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

    public function donasi($slug)
    {
        $data = [
            'nav_active' => 'campaigns',
            'slug' => $slug
        ];
        return view('campaigns/donasi', $data);
    }

    public function donasiAmount($slug)
    {
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = 'SB-Mid-server-3_TLbhDMx7ZKqQvaf6YCdECI';
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;
        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => intval(preg_replace("/[^0-9]/", "", $this->request->getVar('jumlah-donasi'))),
            ),
            'customer_details' => array(
                'first_name' => $this->request->getVar('nama'),
                'last_name' => '',
                'email' => $this->request->getVar('email'),
                'phone' => $this->request->getVar('telp'),
            ),
        );

        $data = [
            'nav_active' => 'campaigns',
            'slug' => $slug,
            'snapToken' => \Midtrans\Snap::getSnapToken($params)
        ];
        return view('campaigns/donasiamount', $data);
    }

    public function coba()
    {
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = 'SB-Mid-server-3_TLbhDMx7ZKqQvaf6YCdECI';
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;
        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => 10000,
            ),
            'customer_details' => array(
                'first_name' => 'budi',
                'last_name' => 'pratama',
                'email' => 'budi.pra@example.com',
                'phone' => '08111222333',
            ),
        );
        $data = [
            'snapToken' => \Midtrans\Snap::getSnapToken($params)
        ];
        // $snapToken = \Midtrans\Snap::getSnapToken($params);
        return view('campaigns/coba', $data);
    }
}
