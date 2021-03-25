<?php

namespace App\Controllers;

use App\Models\PinModel;

class Pin extends BaseController
{
    protected $pinModel;
    public function __construct()
    {
        $this->pinModel = new PinModel();
    }

    public function index()
    {
        $currentPage = $this->request->getVar('page_pin') ? $this->request->getVar('page_pin') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $pin = $this->pinModel->search($keyword);
        } else {
            $pin = $this->pinModel;
        }

        $data = [
            'title'         => 'Pin About You',
            'pin'           => $pin->paginate(6, 'pin'),
            'pager'         => $this->pinModel->pager,
            'currentPage'   => $currentPage,
            'background'    => 'bg1',
            'navbar1'       => true
        ];

        return view('pin/index', $data);
    }

    public function detail($id)
    {
        $data = [
            'title'         => 'Detail',
            'pin'           => $this->pinModel->getPin($id),
            'background'    => 'bg1'
        ];

        if (empty($data['pin'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Nama tidak ditemukan.');
        }

        return view('pin/detail', $data);
    }

    public function save()
    {
        $this->pinModel->save([
            'nama'          => $this->request->getVar('nama'),
            'panggilan'     => $this->request->getVar('panggilan'),
            'tanggalLahir'  => $this->request->getVar('tanggalLahir'),
            'alamat'        => $this->request->getVar('alamat')
        ]);

        session()->setFlashdata('pesan', 'Data was successfully added!');

        return redirect()->to('/pin' . $lastPage);
    }

    public function delete($id)
    {
        $this->pinModel->delete($id);
        session()->setFlashdata('pesan1', 'Data has been successfully deleted!');

        return redirect()->to('/pin');
    }

    public function update($id)
    {
        $this->pinModel->save([
            'id'            => $id,
            'nama'          => $this->request->getVar('nama'),
            'panggilan'     => $this->request->getVar('panggilan'),
            'tanggalLahir'  => $this->request->getVar('tanggalLahir'),
            'alamat'        => $this->request->getVar('alamat')
        ]);

        session()->setFlashdata('pesan2', 'Data has been successfully changed!');

        return redirect()->to('/pin/' . $id);
    }
}
