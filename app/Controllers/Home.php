<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$currentPage = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

		$data = [
			'title'			=> 'Home | Nickzad Pratama',
			'background'	=> 'bg',
			'currentPage'	=> $currentPage,
			'navbar'		=> true
		];

		return view('home/index', $data);
	}

	public function about()
	{
		$currentPage = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

		$data = [
			'title'			=> 'About Me',
			'background'	=> 'bg',
			'currentPage'	=> $currentPage,
			'navbar'		=> true
		];

		return view('home/about', $data);
	}

	public function portfolio()
	{
		$currentPage = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

		$data = [
			'title'			=> 'Portfolio',
			'background'	=> 'bg',
			'currentPage'	=> $currentPage,
			'navbar'		=> true
		];

		return view('home/portfolio', $data);
	}

	public function contact()
	{

		$data = [
			'title'			=> 'Contact Me',
			'background'	=> false
		];

		return view('home/contact', $data);
	}

	public function message()
	{
		$email = \Config\Services::email();

		$nama = $this->request->getVar('nama');
		$from = $this->request->getVar('email');
		$pesan = $this->request->getVar('pesan');

		$email->setFrom($from);
		$email->setTo('pratamanickzad7@gmail.com');
		$email->setSubject('Form submission');
		$email->setMessage($nama . ' wrote the following: ' . '<br><br>' . $pesan);
		$email->send();

		session()->setFlashdata('pesan', 'Mail Sent. Thank you ' . $nama . ' I will contact you shortly.');

		$this->message2($nama, $from, $pesan);

		return redirect()->to('/contact#pesan');
	}

	public function message2($nama, $from, $pesan)
	{
		$email = \Config\Services::email();

		$email->setFrom('pratamanickzad7@gmail.com');
		$email->setTo($from);
		$email->setSubject('Copy of your form submission');
		$email->setMessage('Here is a copy of your message ' . $nama . '<br><br>' . $pesan);
		$email->send();
	}
}
