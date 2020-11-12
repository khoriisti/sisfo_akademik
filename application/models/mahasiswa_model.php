<?php 

	/**
	 * 
	 */
	class Mahasiswa_model extends CI_Model
	{
		
		public function tampil_data($table)
		{
			return $this->db->get($table);
		}

		public function ambil_id_mahasiswa($id)
		{
			$hasil = $this->db->where('id', $id)->get('mahasiswa');
			if($hasil->num_rows() > 0){
				return $hasil->result();
			}else {
				return false;
			}
		}

		public function insert_data($data, $table)
		{
			$this->db->insert($table, $data);
		}

		public function update_data($where, $data, $table)
		{
			$this->db->where($where);
			$this->db->update($table,$data);
		}

		public function hapus_data($where, $table)
		{
			$this->db->where($where);
			$this->db->delete($table);
		}

		public function hapus_datagambar($where, $table)
		{
			$this->db->where($where);
			$query = $this->db->get($table);
		    $row = $query->row();

		    $path = 'assets/uploads/'.$row->photo;

		    unlink($path);

			$this->db->delete($table, $where);
		}



	}

?>