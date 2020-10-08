<?php 
class Dashboard extends CI_Controller{
	public function index()
	{
		$data['title'] = "Dashboard";
		$this->load->view('templatesAdmin/header', $data);
		$this->load->view('templatesAdmin/sidebar');
		$this->load->view('admin/dashboard',$data);
		$this->load->view('templatesAdmin/footer');
	}
}
 

 ?>