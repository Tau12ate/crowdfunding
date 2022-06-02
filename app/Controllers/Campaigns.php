<?php

namespace App\Controllers;

require_once '..\vendor\autoload.php';
// require_once '..\midtrans\midtrans-php\Midtrans.php';

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\CampaignsModel;
use App\Models\DonasiModel;
use CodeIgniter\I18n\Time;

class Campaigns extends BaseController
{
    protected $campaignsModel;
    protected $donasiModel;

    public function __construct()
    {
        $this->campaignsModel = new CampaignsModel();
        $this->donasiModel = new DonasiModel();
    }

    public function detail($slug)
    {

        $data = [
            'nav_active' => 'campaigns',
            'slug' => $slug,
            'campaign' => $this->campaignsModel->where('slug', $slug)->first(),
        ];

        return view('campaigns/detail', $data);
    }

    public function donasi($slug)
    {
        $data = [
            'nav_active' => 'campaigns',
            'slug' => $slug,
            'campaign' => $this->campaignsModel->where('slug', $slug)->first(),
        ];

        // dd($data['slug']);
        return view('campaigns/donasi', $data);
    }

    public function donasiAmount($slug)
    {
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = 'SB-Mid-server-W--YHBiJx0tpkHjCkZqlDJOU';
        // \Midtrans\Config::$serverKey = 'Mid-server-Y5EKVyvET_Azhd9JIy0em_zQ';
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
            'item_details' => array(
                array(
                    'id' => $this->request->getVar('campaign-id'),
                    'price' => intval(preg_replace("/[^0-9]/", "", $this->request->getVar('jumlah-donasi'))),
                    'quantity' => 1,
                    'name' => $this->request->getVar('campaign'),
                )
            ),
            'customer_details' => array(
                'first_name' => $this->request->getVar('nama'),
                'last_name' => '',
                'email' => $this->request->getVar('email'),
                'phone' => $this->request->getVar('telp'),
            ),
            'callbacks' => array(
                'finish' => 'https://localhost:8080/dashboard/test',
            ),
        );

        // foreach ($params['item_details'] as $item) {
        //     dd($item['quantity']);
        // };

        $data = [
            'nav_active' => 'campaigns',
            'slug' => $slug,
            'snapToken' => \Midtrans\Snap::getSnapToken($params),
            'campaign_id' => $this->request->getVar('campaign-id'),
            'gross_amount' => intval(preg_replace("/[^0-9]/", "", $this->request->getVar('jumlah-donasi'))),
            'donatur_name' => $this->request->getVar('nama'),
            'donatur_email' => $this->request->getVar('email'),
            'donatur_phone' => $this->request->getVar('telp'),

        ];
        return view('campaigns/donasiamount', $data);
    }

    public function charge($slug)
    {
        $data = [
            'nav_active' => 'campaigns',
            'slug' => $slug,
        ];
        return view('campaigns/charge', $data);
    }

    public function test()
    {
        // $data = [
        //     'campaign_id' => $this->request->getVar('campaign_id'),
        //     'gross_amount' => $this->request->getVar('gross_amount'),
        //     'donatur_name' => $this->request->getVar('donatur_name'),
        //     'donatur_email' => $this->request->getVar('donatur_email'),
        //     'donatur_phone' => $this->request->getVar('donatur_phone'),
        //     'status' => $this->request->getVar('status'),
        //     'payment_type' => $this->request->getVar('payment_type'),
        //     'created_at' => Time::now(),
        //     'deleted_at' => Time::now(),

        // ];
        // echo json_encode($data);
        helper(['form', 'url']);
        $insert = $this->Book_model->book_add($data);
        echo json_encode(array("status" => TRUE));
        $result = $this->donasiModel->save([
            'campaign_id' => $this->request->getVar('campaign_id'),
            'gross_amount' => $this->request->getVar('gross_amount'),
            'donatur_name' => $this->request->getVar('donatur_name'),
            'donatur_email' => $this->request->getVar('donatur_email'),
            'donatur_phone' => $this->request->getVar('donatur_phone'),
            'status' => $this->request->getVar('status'),
            'payment_type' => $this->request->getVar('payment_type'),

        ]);

        echo json_encode($result);

        // if ($result) {
        //     echo json_encode('ok');
        // } else {
        //     echo json_encode('gagal');
        // }

        // echo json_encode('ok');
    }
}
