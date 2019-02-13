<?php
class Blog extends CI_Controller 
{
	public function index()
	{
		$data['page_title'] = 'Your title';
		$this->load->view('main');//Подключение файла main
	}
}
?>