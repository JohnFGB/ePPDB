<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panel_siswa extends CI_Controller {

	public function index()
	{
		$ceks = $this->session->userdata('no_pendaftaran');
		if(!isset($ceks)) {
			redirect('');
		}else{
			$data['user']   	 = $this->db->get_where('tbl_siswa', "no_pendaftaran='$ceks'");
			$data['judul_web'] = "Dashboard";

			$this->load->view('siswa/header', $data);
			$this->load->view('siswa/dashboard', $data);
			$this->load->view('siswa/footer');
		}
	}

	public function bayar()
	{
		$ceks = $this->session->userdata('no_pendaftaran');
		if(!isset($ceks)) {
			redirect('');
		}else{
			$data['user']   	 = $this->db->get_where('tbl_siswa', "no_pendaftaran='$ceks'");
			$data['judul_web']   = "Bayar";
			$data['midtrans']    = $this->db->get('tbl_pembayaran')->result();
			$this->load->view('siswa/header', $data);
			$this->load->view('siswa/bayar', $data);
			$this->load->view('siswa/footer');
		}
	}

	public function pengumuman()
	{
		$ceks = $this->session->userdata('no_pendaftaran');
		if(!isset($ceks)) {
			redirect('');
		}else{
			$data['user']   	 = $this->db->get_where('tbl_siswa', "no_pendaftaran='$ceks'");
			$data['judul_web'] = "Pengumuman";

			$this->load->view('siswa/header', $data);
			$this->load->view('siswa/pengumuman', $data);
			$this->load->view('siswa/footer');
		}
	}

	public function biodata()
	{
		$ceks = $this->session->userdata('no_pendaftaran');
		if(!isset($ceks)) {
			redirect('logcs');
		}else{
			$data['user']  			  = $this->db->get_where('tbl_siswa', "no_pendaftaran='$ceks'");
 			$data['judul_web'] 		= "Biodata ".ucwords($data['user']->row()->nama_lengkap);

					$this->load->view('siswa/header', $data);
					$this->load->view('siswa/biodata', $data);
					$this->load->view('siswa/footer');
		}
	}


	public function cetak() {
		$ceks = $this->session->userdata('no_pendaftaran');
		if(!isset($ceks)) {
			redirect('logcs');
		}
		$data['user'] 			= $this->db->get_where('tbl_siswa', "no_pendaftaran='$ceks'")->row();
		$data['judul_web'] 	= "Cetak Bukti Pendaftaran ".ucwords($data['user']->nama_lengkap);

		$data['thn_ppdb'] 	= date('Y', strtotime($data['user']->tgl_siswa));

		$this->db->select_sum('rata_rata_nilai');
		$data['nilai_rapor'] 	= $this->db->get_where('tbl_rapor', "no_pendaftaran='$ceks'")->row()->rata_rata_nilai / 5;

		$this->db->select_sum('nilai_usbn');
		$data['nilai_usbn'] 	= $this->db->get_where('tbl_nilai_usbn', "no_pendaftaran='$ceks'")->row()->nilai_usbn / 7;

		$this->db->select_sum('nilai_unbk');
		$data['nilai_unbk'] 	= $this->db->get_where('tbl_nilai_unbk', "no_pendaftaran='$ceks'")->row()->nilai_unbk / 4;

		$this->load->view('siswa/cetak', $data);
	}


	public function rekap_nilai() {
		$ceks = $this->session->userdata('no_pendaftaran');
		if(!isset($ceks)) {
			redirect('logcs');
		}
		$data['user'] 			= $this->db->get_where('tbl_siswa', "no_pendaftaran='$ceks'")->row();
		$data['judul_web'] 	= "Cetak Rekap Nilai ".ucwords($data['user']->nama_lengkap);

		$data['thn_ppdb'] 	= date('Y', strtotime($data['user']->tgl_siswa));

		$this->db->select_sum('rata_rata_nilai');
		$data['nilai_rapor'] 	= $this->db->get_where('tbl_rapor', "no_pendaftaran='$ceks'")->row()->rata_rata_nilai;

		$this->db->select_sum('nilai_usbn');
		$data['nilai_usbn'] 	= $this->db->get_where('tbl_nilai_usbn', "no_pendaftaran='$ceks'")->row()->nilai_usbn;

		$this->db->select_sum('nilai_unbk');
		$data['nilai_unbk'] 	= $this->db->get_where('tbl_nilai_unbk', "no_pendaftaran='$ceks'")->row()->nilai_unbk;

		$this->load->view('siswa/rekap_nilai', $data);
	}

	public function cetak_lulus() {
		$ceks = $this->session->userdata('no_pendaftaran');
		if(!isset($ceks)) {
			redirect('logcs');
		}
		$this->db->like('tgl_siswa', date('Y'), 'after');
		$data['user'] 			= $this->db->get_where('tbl_siswa', "no_pendaftaran='$ceks'")->row();
		$data['judul_web'] 	= "Cetak Bukti Lulus ".ucwords($data['user']->nama_lengkap);

		if ($data['user']->status_pendaftaran != 'lulus') {
			redirect('404');
		}

		$data['thn_ppdb'] 	= date('Y', strtotime($data['user']->tgl_siswa));
		$data['v_ket'] 			= $this->db->get_where('tbl_pengumuman', "id_pengumuman='1'")->row();

		$this->load->view('siswa/cetak_lulus', $data);
	}

	public function logout() {
		if ($this->session->userdata('no_pendaftaran') != '') {
			$this->session->sess_destroy();
		}
		 redirect('');
	}
	public function input_data()
	{
		$siswa = $this->Model_siswa;
		$ceks = $this->session->userdata('no_pendaftaran');

		if(!isset($ceks)) {
			redirect('');
		}else{
			$data['user']   	 = $this->db->get_where('tbl_siswa', "no_pendaftaran='$ceks'");
			$data['judul_web']   = "Input Data";
			$data['siswa']    = $this->db->get('tbl_siswa')->result();
			$this->load->view('siswa/header', $data);
			$this->load->view('siswa/input', $data);
			$this->load->view('siswa/footer');
		}
	}
	public function input_data_save()
	{
		$siswa = $this->Model_siswa;
		$ceks = $this->session->userdata('no_pendaftaran');
		$data['user']   	 = $this->db->get_where('tbl_siswa', "no_pendaftaran='$ceks'");
		$idSiswa = $this->session->userdata('id_siswa');

		$id = $this->input->post('id_siswa');
		$no_pendaftaran = $this->input->post('no_pendaftaran');
		$ijazah = $_FILES['ijazah'];
		$rekap_nilai = $_FILES['rekap_nilai'];

		if ($ijazah = '') {

		} else {
			$config['upload_path'] = './assets/foto';
			$config['allowed_types'] = 'jpg|png|pdf';

			$this->upload->initialize($config);

			if (!$this->upload->do_upload('ijazah')) {
				$this->session->set_flashdata('gagal', 'Gagal Ditambah');
				redirect('panel_siswa/input_data');
			// $this->Model_siswa->update_data($where, $data);
			} else {
				$ijazah = $this->upload->data('file_name');
				$query = "UPDATE tbl_siswa SET ijazah='$ijazah' WHERE id_siswa='$id'";
				$this->db->query($query);
				$this->session->set_flashdata('success', 'Berhasil Ditambah');
	
			}
		}
		if ($rekap_nilai = '') {

		} else {
			$config['upload_path'] = './assets/foto';
			$config['allowed_types'] = 'jpg|png|pdf';

			$this->upload->initialize($config);

			if (!$this->upload->do_upload('rekap_nilai')) {
				$this->session->set_flashdata('gagal', 'Gagal Ditambah');
				redirect('panel_siswa/input_data');

			// $this->Model_siswa->update_data($where, $data);
			} else {
				$rekap_nilai = $this->upload->data('file_name');
				$query = "UPDATE tbl_siswa SET rekap_nilai='$rekap_nilai' WHERE id_siswa='$id'";
				$this->db->query($query);
				$this->session->set_flashdata('success', 'Berhasil Ditambah');
			}
		}
		redirect('panel_siswa/input_data');
		
		// $data = array(
		// 	'ijazah' => $ijazah,
		// 	'rekap_nilai' => $rekap_nilai,
		// );

		// $where = array(
		// 	'$id' => $idSiswa
		// );

		// $this->Model_siswa->update_data($where, $data, 'tbl_siswa');
		
	}
}
