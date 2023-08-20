<?php
class User extends CI_Controller {
	public function __construct()
	{
		parent :: __construct();
		$this->load->model('user_mod');
	}

	function index() {
		$qury = $this->db->select('*')->from('user')->order_by('nama','ASC');
		 $res = $this->db->get()->result_array();  
		$this->load->view('user', $data=array('user' => $res));
	}


	function simpan() {
		$user = $this->input->post('username');
		$this->db->from('user')->where('username', $user);
		$ceks = $this->db->get()->result_array();
		if ($ceks<>NULL) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
			Data telah digunakan !!!
	  </div>');
		redirect('user');
		} else {
		$this->user_mod->simpan();
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
		Berhasil Menambahkan Data !!!
	  </div>');
		redirect('user');
	}
}


	function tambah() {
		$this->load->view('user_tam');
	}

	

	function hapus($id) {
		$this->db->delete('user', ['id_user' => $id]);
		$this->session->set_flashdata('pes', '<div class="alert alert-info" role="alert">
		Berhasil menghapus data !!
	  </div>'); 
		redirect('user');
	}

	function edit($id2) {
		$qur = $this->db->select('*')->from('user')->where('id_user', $id2);
		$ak  = $this->db->get()->result_array();
		$this->load->view('user_up', $s= array('user' => $ak));
	}

	function update() {
		$data3 = array(
			'nama' => $this->input->post('nama'),
			'level' => $this->input->post('level'), 
		);
		$this->db->update('user', $data3, $we=array('id_user' => $this->input->post('user_id')));
		$this->session->set_flashdata('pes', '<div class="alert alert-info" role="alert">
		Berhasil megupdate data !!
	  </div>'); 
		redirect('user');
	} 
}
