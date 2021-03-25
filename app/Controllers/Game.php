<?php

namespace App\Controllers;

class Game extends BaseController
{
    protected $gameModel;

    public function index()
    {
        $data = [
            'title'         => 'Game Sederhana',
            'background'    => 'bg2',
            'navbar1'       => true
        ];

        return view('game/index', $data);
    }

    public function suit()
    {
        $data = [
            'title'         => 'Suit Jawa',
            'background'    => 'bg2',
            'navbar2'       => true
        ];

        return view('game/suitJawa', $data);
    }

    public function hasilSuit($pilihan)
    {
        $comp = rand(1, 3);
        if ($comp == 1) {
            $comp = 'orang';
        } else if ($comp == 2) {
            $comp = 'gajah';
        } else {
            $comp = 'semut';
        }

        if ($pilihan == $comp) {
            $hasil = 'SERI!';
        } else if ($pilihan == 'orang') {
            $hasil = ($comp == 'gajah') ? 'KALAH!' : 'MENANG!';
        } else if ($pilihan == 'gajah') {
            $hasil = ($comp == 'orang') ? 'MENANG!' : 'KALAH!';
        } else {
            $hasil = ($comp == 'orang') ? 'KALAH!' : 'MENANG!';
        }

        if ($hasil == 'MENANG!') {
            session()->setFlashdata('pesan', 'Kamu memilih ' . $pilihan . ' dan komputer memilih ' . $comp . ' maka hasilnya adalah ' . $hasil);
        } elseif ($hasil == 'KALAH!') {
            session()->setFlashdata('pesan1', 'Kamu memilih ' . $pilihan . ' dan komputer memilih ' . $comp . ' maka hasilnya adalah ' . $hasil);
        } else {
            session()->setFlashdata('pesan2', 'Kamu memilih ' . $pilihan . ' dan komputer memilih ' . $comp . ' maka hasilnya adalah ' . $hasil);
        }

        return redirect()->to('/game/suit');
    }

    public function tebak($awal = '')
    {
        $data = [
            'title'         => 'Tebak Angka',
            'background'    => 'bg2',
            'navbar2'       => true,
            'tahap'         => 3,
            'awal'          => $awal
        ];

        return view('game/tebakAngka', $data);
    }

    public function hasilTebak($pilihan, $tahap, $comp)
    {
        $comp = rand(1, 10);
        if ($comp == 1) {
            $comp = '1';
        } else if ($comp == 2) {
            $comp = '2';
        } else if ($comp == 3) {
            $comp = '3';
        } else if ($comp == 4) {
            $comp = '4';
        } else if ($comp == 5) {
            $comp = '5';
        } else if ($comp == 6) {
            $comp = '6';
        } else if ($comp == 7) {
            $comp = '7';
        } else if ($comp == 8) {
            $comp = '8';
        } else if ($comp == 9) {
            $comp = '9';
        } else if ($comp == 10) {
            $comp = '10';
        }

        if ($pilihan < $comp) {
            session()->setFlashdata('pesan1', 'Pilihan kamu terlalu rendah,' . '<br>' . 'Ayo masih ada ' . $tahap . ' kesempatan lagi!');
        } elseif ($pilihan == $comp) {
            session()->setFlashdata('pesan', 'Anda BENAR..!' . '<br>' . 'angka yang dimaksud adalah ' . $comp);
        } else {
            session()->setFlashdata('pesan2', 'Pilihan kamu terlalu besar,' . '<br>' . 'Ayo masih ada ' . $tahap . ' kesempatan lagi!');
        }

        $data = [
            'title'         => 'Tebak Angka',
            'background'    => 'bg2',
            'navbar2'       => true,
            'tahap'         => $tahap,
            'comp'          => $comp
        ];

        return view('game/tebakAngka', $data);
    }

    public function hasilTebak2($pilihan, $tahap, $comp)
    {
        if ($pilihan < $comp) {
            session()->setFlashdata('pesan3', 'Pilihan kamu terlalu rendah,' . '<br>' . 'Ayo masih ada ' . $tahap . ' kesempatan lagi!');
        } elseif ($pilihan == $comp) {
            session()->setFlashdata('pesan6', 'Anda BENAR..!' . '<br>' . 'angka yang dimaksud adalah ' . $comp);
        } else {
            session()->setFlashdata('pesan4', 'Pilihan kamu terlalu besar,' . '<br>' . 'Ayo masih ada ' . $tahap . ' kesempatan lagi!');
        }

        $data = [
            'title'         => 'Tebak Angka',
            'background'    => 'bg2',
            'navbar2'       => true,
            'tahap'         => $tahap,
            'comp'          => $comp
        ];

        return view('game/tebakAngka', $data);
    }

    public function hasilTebak3($pilihan, $comp)
    {
        if ($pilihan == $comp) {
            session()->setFlashdata('pesan7', 'Anda BENAR..!' . '<br>' . 'angka yang dimaksud adalah ' . $comp);
        } else {
            session()->setFlashdata('pesan5', 'Anda GAGAL!' . '<br>' . 'angka yang dimaksud adalah ' . $comp);
        }

        return redirect()->to('/game/tebak');
    }
}
