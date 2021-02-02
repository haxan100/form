<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class SemuaModel extends CI_Model {
                        
public function Tambah($nama_tabel,$isi)
{
	return 	$this->db->insert($nama_tabel, $isi);
}
public function Ubah($nama_tabel,$nama_id,$isi,$id)
{
	$this->db->where($nama_id, $id);
	$sql = 	$this->db->update($nama_tabel, $isi);
	return $sql;
}
public function hapus($nama_tabel,$nama_id,$id)
{
	$this->db->where($nama_id, $id);
	return $this->db->delete($nama_tabel);
}
public function getAllByTabel($namaTabel)
	{
		return $this->db->get($namaTabel);
}
public function getNamaByForTabel($nama_id, $nama_cari, $nama_tabel)
{
	$this->db->where($nama_id, $nama_cari);
	return $this->db->get($nama_tabel)->result();
}
public function getNamaByForTabelNotIdUser($nama_id, $nama_cari, $nama_tabel,$id)
{
	$this->db->where($nama_id, $nama_cari);
	$this->db->where('id_user !=' , $id);
	$sql= $this->db->get($nama_tabel)->result();
	// var_dump($this->db->last_query());die;
	return $sql;
}
	public function getSemuaById($nama_table, $nama_id, $id)
	{
		$this->db->where($nama_id, $id);
		return $this->db->get($nama_table)->result();
	}
	public function getByID($namakolom,$namatabel,$namacari)
	{
		$this->db->where($namakolom, $namacari);
		$sql = $this->db->get($namatabel)->result();
		// var_dump($this->db->last_query());die;
		return $sql;
	}
	public function getproduk()

	{

		return $this->db->get('tbl_service_sulam')->result();
	}

                        
                            
                        
}
                        
/* End of file SemuaModel.php */
    
                        