<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Model_siswa extends CI_Model
{
    private $_table = "tbl_siswa";

    public $id_siswa;
    public $no_pendaftaran;
    public $nis;
    public $nisn;
    public $nik;
    public $nama_lengkap;
    public $no_hp_siswa;
    public $jurusan;

    public function rules()
    {
        return [
            ['field' => 'nama_lengkap',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'nis',
            'label' => 'Nis',
            'rules' => 'required'],
            
            ['field' => 'nisn',
            'label' => 'Nisn',
            'rules' => 'required'],
            ['field' => 'no_hp_siswa',
            'label' => 'Nomor HP',
            'rules' => 'required'],

            ['field' => 'jurusan',
            'label' => 'Jurusan',
            'rules' => 'required'],
            ['field' => 'ijazah',
            'label' => 'ijazah',
            'rules' => 'required'],

            ['field' => 'rekap_nilai',
            'label' => 'rekap_nilai',
            'rules' => 'required'],
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_siswa" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_siswa = uniqid();
        $this->nama_lengkap = $post["nama_lengkap"];
        $this->nis = $post["nis"];
        $this->nisn = $post["nisn"];
        $this->no_hp_siswa = $post["no_hp_siswa"];
        $this->jurusan = $post["jurusan"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
      $post = $this->input->post();
      $this->id_siswa = $post["id_siswa"];
      $this->no_pendaftaran = $post["no_pendaftaran"];
      $this->nama_lengkap = $post["nama_lengkap"];
      $this->nis = $post["nis"];
      $this->nisn = $post["nisn"];
      $this->nik = $post["nik"];
      $this->no_hp_siswa = $post["no_hp_siswa"];
      $this->jurusan = $post["jurusan"];
        return $this->db->update($this->_table, $this, array('id_siswa' => $post['id_siswa']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_siswa" => $id));
    }

    public function save_siswa()
    {
        $post = $this->input->post();
        $this->id_siswa = $post["id_siswa"];
        $this->ijazah = $post["ijazah"];
        $this->rekap_nilai = $post["rekap_nilai"];
        return $this->db->update($this->_table, $this, array('id_siswa' => $post['id_siswa']));
    }

    public function update_data($where, $data)
{
    $query = "INSERT INTO tbl_siswa (ijazah, rekap_nilai
        )VALUES
        ($data) WHERE (id_siswa = $where) ";
        $this->db->query($query);
    // $this->db->where($where);
    // $this->db->insert($table, $data);
}
}