<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class VoucherModel extends CI_Model {

	public function dt_voucher($post)
	{
		$from = 'tblvoucher v';
		$columns = array(
			'VoucherName',
			'VoucherStartDate',
			'VoucherEndDate',
			'VoucherQty',
			'VoucherPrice',
		);
		// untuk search
		$columnsSearch = array(
			'VoucherName',
			'VoucherStartDate',
			'VoucherEndDate',
			'VoucherQty',
			'VoucherPrice',
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
	public function dt_voucher_detail($post)
	{
		$id = $post['id'];

		$from = ' tblvouchercontent vd';
		$columns = array(
			'vd.VoucherID',
			'VoucherNumber',
			'VoucherEndDate',
		);
		// untuk search
		$columnsSearch = array(			
			'vd.VoucherID',
			'VoucherNumber',
			'VoucherEndDate',
		);
		$sql = "  SELECT * FROM tblvouchercontent vd
						left join tblvoucher v on v.VoucherID=vd.VoucherID
						where  vd.VoucherID= $id	
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
                        
                            
                        
}
                        
/* End of file VoucherModel.php */
    
                        