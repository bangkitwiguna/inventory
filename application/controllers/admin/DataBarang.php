<?php 
class dataBarang extends CI_Controller{
	public function index()
	{
		$data['title']="Data Barang";
		$data['barang']=$this->inventoryModel->get_data('barang')->result();
		$this->load->view('templatesAdmin/header', $data);
		$this->load->view('templatesAdmin/sidebar');
		$this->load->view('admin/dataBarang',$data);
		$this->load->view('templatesAdmin/footer');
	}

	public function tambahData()
	{
		$data['title']="Tambah Data Barang";
		$this->load->view('templatesAdmin/header', $data);
		$this->load->view('templatesAdmin/sidebar');
		$this->load->view('admin/formTambahDataBarang',$data);
		$this->load->view('templatesAdmin/footer');
	}

	public function tambahDataAksi()
	{

		$this->_rules();

		if($this->form_validation->run() == FALSE){
			$this->tambahData();
		} else{
			$kode_barang			= $this->input->post('kode_barang');
			$nama_barang			= $this->input->post('nama_barang');
			$harga_barang			= $this->input->post('harga_barang');
			$harga_jual				= $this->input->post('harga_jual');
			$stok_barang			= $this->input->post('stok_barang');					

			$data = array(
				'kode_barang'			=> $kode_barang,
				'nama_barang'			=> $nama_barang,
				'harga_barang'			=> $harga_barang,
				'harga_jual'			=> $harga_jual,
				'stok_barang'			=> $stok_barang,
			);

		$this->inventoryModel->insert_data($data,'barang');
		redirect('admin/dataBarang');

		}
	}

	public function updateData($id_barang)
	{
		$where = array('id_barang' => $id_barang);
		$data['title']="Update Stok Barang";
		$data['barang'] = $this->db->query("SELECT * FROM barang WHERE id_barang='$id_barang'")->result();
		$this->load->view('templatesAdmin/header', $data);
		$this->load->view('templatesAdmin/sidebar');
		$this->load->view('admin/formUpdateDataBarang',$data);
		$this->load->view('templatesAdmin/footer');
	}

	public function updateDataAksi()
	{
		$this->_rules();

		if($this->form_validation->run() == FALSE){
			$this->updateData();
		} else{
			$id_barang 				= $this->input->post('id_barang');
			$kode_barang			= $this->input->post('kode_barang');
			$nama_barang			= $this->input->post('nama_barang');
			$harga_barang			= $this->input->post('harga_barang');
			$harga_jual				= $this->input->post('harga_jual');
			$stok_barang			= $this->input->post('stok_barang');		

			$data = array(
				'kode_barang'			=> $kode_barang,
				'nama_barang'			=> $nama_barang,
				'harga_barang'			=> $harga_barang,
				'harga_jual'			=> $harga_jual,
				'stok_barang'			=> $stok_barang,
			);

			$where = array(
				'id_barang' => $id_barang
			);

		$this->inventoryModel->update_data('barang',$data,$where);
		redirect('admin/dataBarang');

		}
	}	

	public function _rules()
	{
		$this->form_validation->set_rules('kode_barang','Kode Barang','required');
		$this->form_validation->set_rules('nama_barang','Nama Barang','required');
		$this->form_validation->set_rules('harga_barang','Harga Barang','required');
		$this->form_validation->set_rules('harga_jual','Harga Jual','required');
		$this->form_validation->set_rules('stok_barang','Stok Barang','required');
	}

}

 ?>