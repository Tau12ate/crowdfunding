<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\DonasiModel;
use CodeIgniter\I18n\Time;

class Donasi extends ResourceController
{
    use ResponseTrait;
    // all users
    public function index()
    {
        $model = new DonasiModel();
        $data['produk'] = $model->orderBy('id', 'DESC')->findAll();
        return $this->respond($data);
    }
    // create
    public function create()
    {
        $model = new DonasiModel();
        $data = [
            'campaign_id' => $this->request->getVar('campaign_id'),
            'gross_amount' => $this->request->getVar('gross_amount'),
            'donatur_name' => $this->request->getVar('donatur_name'),
            'donatur_email' => $this->request->getVar('donatur_email'),
            'donatur_phone' => $this->request->getVar('donatur_phone'),
            'status' => $this->request->getVar('status'),
            'payment_type' => $this->request->getVar('payment_type'),
            'created_at' => Time::now(),
            'deleted_at' => Time::now(),

        ];
        $model->insert($data);
        $response = [
            'status'   => 201,
            'error'    => null,
            'messages' => [
                'success' => 'Data donasi berhasil ditambahkan.'
            ]
        ];
        return $this->respondCreated($response);
    }
    // single user
    public function show($id = null)
    {
        $model = new DonasiModel();
        $data = $model->where('id', $id)->first();
        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('Data tidak ditemukan.');
        }
    }
    // update
    public function update($id = null)
    {
        $model = new DonasiModel();
        $id = $this->request->getVar('id');
        $data = [
            'nama_produk' => $this->request->getVar('nama_produk'),
            'harga'  => $this->request->getVar('harga'),
        ];
        $model->update($id, $data);
        $response = [
            'status'   => 200,
            'error'    => null,
            'messages' => [
                'success' => 'Data produk berhasil diubah.'
            ]
        ];
        return $this->respond($response);
    }
    // delete
    public function delete($id = null)
    {
        $model = new DonasiModel();
        $data = $model->where('id', $id)->delete($id);
        if ($data) {
            $model->delete($id);
            $response = [
                'status'   => 200,
                'error'    => null,
                'messages' => [
                    'success' => 'Data produk berhasil dihapus.'
                ]
            ];
            return $this->respondDeleted($response);
        } else {
            return $this->failNotFound('Data tidak ditemukan.');
        }
    }
}
