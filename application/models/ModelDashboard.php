<?php



defined('BASEPATH') or exit('No direct script access allowed');

class ModelDashboard extends CI_Model
{
    public function getr_total_users()
    {
		$this->db->where('level !=', 1);
		$query = $this->db->get('user');

		return  $query->num_rows();
    }

	public function get_surat_masuK(){
		return $this->db->get('surat_masuk')->num_rows();
	}

	public function get_surat_keluar(){
		return $this->db->get('surat_keluar')->num_rows();
	}


	
}

/* End of file ModelName.php */
