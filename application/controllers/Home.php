<?php
defined('BASEPATH') or exit('No direct script access allowed');

// use Kreait\Firebase\Factory;
// use Kreait\Firebase\ServiceAccount;
class Home extends CI_Controller
{

	// protected $database;
	// protected $dbname = 'users';
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	// public function __construct(Database $database)
	// {
	// 		$this->database = $database;
	// }
	public function index()
	{
		// $this->load->library('firebase');
		// $firebase = $this->firebase->init();
		// $db = $firebase->getDatabase();

		// echo $db;
		$this->load->view('layout/header');
		$this->load->view('layout/main',['content'=>'v_homepage']);
		$this->load->view('layout/footer');
	}
}
