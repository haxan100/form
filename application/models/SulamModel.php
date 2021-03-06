<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class SulamModel extends CI_Model {

	public function dt_harga_sulam($post)
	{
		$from = ' tbl_service_sulam';
		$columns = array(
			'ServiceName',
			'Price',
		);
		// untuk search
		$columnsSearch = array(
			'ServiceName',
			'Price',
		);
		$sql = "  SELECT * from $from
		
		";
		$where = "";
		if (isset($post['status']) && $post['status'] != 'default') {
			if ($where != "") $where .= "AND";
			$where .= " (status='" . $post['status'] . "')";
		}
		if (isset($post['tipe']) && $post['tipe'] != 'default') {
			if ($where != "") $where .= "AND";
			$where .= " (tipe_user='" . $post['tipe'] . "')";
		}
		$whereTemp = "";
		if (isset($post['date']) && $post['date'] != '') {
			$date = explode(' / ', $post['date']);
			if (count($date) == 1) {
				$whereTemp .= "(created_at LIKE '%" . $post['date'] . "%')";
			} else {
				// $whereTemp .= "(created_at BETWEEN '".$date[0]."' AND '".$date[1]."')";

				$whereTemp .= "(date_format(created_at, \"%Y-%m-%d\") >='$date[0]' AND date_format(created_at, \"%Y-%m-%d\") <= '$date[1]')";
			}
		}

		if ($whereTemp != '' && $where != '') $where .= " AND (" . $whereTemp . ")";
		else if ($whereTemp != '') $where .= $whereTemp;
		// search
		if (isset($post['search']['value']) && $post['search']['value'] != '') {
			$search = $post['search']['value'];
			// create parameter pencarian kesemua kolom yang tertulis
			// di $columns
			$whereTemp = "";
			for ($i = 0; $i < count($columnsSearch); $i++) {
				$whereTemp .= $columnsSearch[$i] . ' LIKE "%' . $search . '%"';
				// agar tidak menambahkan 'OR' diakhir Looping
				if ($i < count($columnsSearch) - 1) {
					$whereTemp .= ' OR ';
				}
			}
			if ($where != '') $where .= " AND (" . $whereTemp . ")";
			else $where .= $whereTemp;
		}
		if ($where != '') $sql .= ' where  (' . $where . ')';
		//SORT Kolom
		$sortColumn = isset($post['order'][0]['column']) ? $post['order'][0]['column'] : 1;
		$sortDir    = isset($post['order'][0]['dir']) ? $post['order'][0]['dir'] : 'asc';
		$sortColumn = $columns[$sortColumn - 1];
		// $sql .= " Group by u.no_hp";
		$sql .= " ORDER BY {$sortColumn} {$sortDir}";
		// var_dump($sql);
		// die();
		$count = $this->db->query($sql);
		// hitung semua data
		$totaldata = $count->num_rows();		// memberi Limit
		$start  = isset($post['start']) ? $post['start'] : 0;
		$length = isset($post['length']) ? $post['length'] : 10;
		$sql .= " LIMIT {$start}, {$length}";
		$data  = $this->db->query($sql);
		return array(
			'totalData' => $totaldata,
			'data' => $data,
		);
	}
	public function dt_sulam_alis($post)
	{
		$from = 'tbl_data_survey_sulam_alis ta';
		$columns = array(
			'name',
			'ta.IDService',
		);
		// untuk search
		$columnsSearch = array(
			'name',
			'ta.IDService',
			'ta.Nomor_Service',
		);
		$sql = "  SELECT * from $from
		left join tbl_service_sulam ss on ss.IDService = ta.IDService
		
		";
		$where = "";
		if (isset($post['status']) && $post['status'] != 'default') {
			if ($where != "") $where .= "AND";
			$where .= " (status='" . $post['status'] . "')";
		}
		if (isset($post['tipe']) && $post['tipe'] != 'default') {
			if ($where != "") $where .= "AND";
			$where .= " (tipe_user='" . $post['tipe'] . "')";
		}
		$whereTemp = "";
		if (isset($post['date']) && $post['date'] != '') {
			$date = explode(' / ', $post['date']);
			if (count($date) == 1) {
				$whereTemp .= "(created_at LIKE '%" . $post['date'] . "%')";
			} else {
				// $whereTemp .= "(created_at BETWEEN '".$date[0]."' AND '".$date[1]."')";

				$whereTemp .= "(date_format(created_at, \"%Y-%m-%d\") >='$date[0]' AND date_format(created_at, \"%Y-%m-%d\") <= '$date[1]')";
			}
		}

		if ($whereTemp != '' && $where != '') $where .= " AND (" . $whereTemp . ")";
		else if ($whereTemp != '') $where .= $whereTemp;
		// search
		if (isset($post['search']['value']) && $post['search']['value'] != '') {
			$search = $post['search']['value'];
			// create parameter pencarian kesemua kolom yang tertulis
			// di $columns
			$whereTemp = "";
			for ($i = 0; $i < count($columnsSearch); $i++) {
				$whereTemp .= $columnsSearch[$i] . ' LIKE "%' . $search . '%"';
				// agar tidak menambahkan 'OR' diakhir Looping
				if ($i < count($columnsSearch) - 1) {
					$whereTemp .= ' OR ';
				}
			}
			if ($where != '') $where .= " AND (" . $whereTemp . ")";
			else $where .= $whereTemp;
		}
		if ($where != '') $sql .= ' where  (' . $where . ')';
		//SORT Kolom
		$sortColumn = isset($post['order'][0]['column']) ? $post['order'][0]['column'] : 1;
		$sortDir    = isset($post['order'][0]['dir']) ? $post['order'][0]['dir'] : 'asc';
		$sortColumn = $columns[$sortColumn - 1];
		// $sql .= " Group by u.no_hp";
		$sql .= " ORDER BY {$sortColumn} {$sortDir}";
		// var_dump($sql);
		// die();
		$count = $this->db->query($sql);
		// hitung semua data
		$totaldata = $count->num_rows();		// memberi Limit
		$start  = isset($post['start']) ? $post['start'] : 0;
		$length = isset($post['length']) ? $post['length'] : 10;
		$sql .= " LIMIT {$start}, {$length}";
		$data  = $this->db->query($sql);
		return array(
			'totalData' => $totaldata,
			'data' => $data,
		);
	}
	public function dt_eyelish($post)
	{
		$from = 'tbl_data_survey_eyelash ta';
		$columns = array(
			'name',
			'ta.Nomor_Service',

		);
		// untuk search
		$columnsSearch = array(
			'name',
			'ta.Nomor_Service',
		);
		$sql = "  SELECT * from $from
		
		
		";
		$where = "";
		if (isset($post['status']) && $post['status'] != 'default') {
			if ($where != "") $where .= "AND";
			$where .= " (status='" . $post['status'] . "')";
		}
		if (isset($post['tipe']) && $post['tipe'] != 'default') {
			if ($where != "") $where .= "AND";
			$where .= " (tipe_user='" . $post['tipe'] . "')";
		}
		$whereTemp = "";
		if (isset($post['date']) && $post['date'] != '') {
			$date = explode(' / ', $post['date']);
			if (count($date) == 1) {
				$whereTemp .= "(created_at LIKE '%" . $post['date'] . "%')";
			} else {
				// $whereTemp .= "(created_at BETWEEN '".$date[0]."' AND '".$date[1]."')";

				$whereTemp .= "(date_format(created_at, \"%Y-%m-%d\") >='$date[0]' AND date_format(created_at, \"%Y-%m-%d\") <= '$date[1]')";
			}
		}

		if ($whereTemp != '' && $where != '') $where .= " AND (" . $whereTemp . ")";
		else if ($whereTemp != '') $where .= $whereTemp;
		// search
		if (isset($post['search']['value']) && $post['search']['value'] != '') {
			$search = $post['search']['value'];
			// create parameter pencarian kesemua kolom yang tertulis
			// di $columns
			$whereTemp = "";
			for ($i = 0; $i < count($columnsSearch); $i++) {
				$whereTemp .= $columnsSearch[$i] . ' LIKE "%' . $search . '%"';
				// agar tidak menambahkan 'OR' diakhir Looping
				if ($i < count($columnsSearch) - 1) {
					$whereTemp .= ' OR ';
				}
			}
			if ($where != '') $where .= " AND (" . $whereTemp . ")";
			else $where .= $whereTemp;
		}
		if ($where != '') $sql .= ' where  (' . $where . ')';
		//SORT Kolom
		$sortColumn = isset($post['order'][0]['column']) ? $post['order'][0]['column'] : 1;
		$sortDir    = isset($post['order'][0]['dir']) ? $post['order'][0]['dir'] : 'asc';
		$sortColumn = $columns[$sortColumn - 1];
		// $sql .= " Group by u.no_hp";
		$sql .= " ORDER BY {$sortColumn} {$sortDir}";
		// var_dump($sql);
		// die();
		$count = $this->db->query($sql);
		// hitung semua data
		$totaldata = $count->num_rows();		// memberi Limit
		$start  = isset($post['start']) ? $post['start'] : 0;
		$length = isset($post['length']) ? $post['length'] : 10;
		$sql .= " LIMIT {$start}, {$length}";
		$data  = $this->db->query($sql);
		return array(
			'totalData' => $totaldata,
			'data' => $data,
		);
	}
	public function getSulamSatu($id)
	{
		$this->db->from('tbl_data_survey_sulam_alis sa');		
		$this->db->where('id_survey_sulam', $id);
		$this->db->join('tbl_service_sulam ts', 'ts.IDService = sa.IDService', 'left');
		
		$sql = $this->db->get()->row();
		return $sql;
		
		
	}
	public function getSulamDua($id)
	{
		$this->db->from('tbl_data_survey_eyelash sa');
		$this->db->where('id_survey_eyelash', $id);

		$sql = $this->db->get()->row();
		return $sql;
	}
                        
                            
                        
}
/* End of file SulamModel.php */
    
                        