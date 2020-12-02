<div class="container-fluid">
	
	<div class="alert alert-success" role="alert">
    	<i class="fas fa-university"></i> Form Masuk Halaman KRS
    </div>

    <?php echo $this->session->flashdata('pesan'); ?>

	<form method="post" action="<?php echo base_url('administrator/krs/krs_aksi') ?>">
		<div class="form-group">
			<label>NIM Mahasiswa</label>
			<input type="text" name="nim" placeholder="Masukkan NIM Mahasiswa" class="form-control">
			<?php echo form_error('nim','<div class="text-danger small ml-3">') ?>
		</div>
		<div class="form-group">
			<label>Tahun Akademik / Semester</label>
			<?php 
				$query = $this->db->query('SELECT id_thn_akad, semester, CONCAT(tahun_akademik, "/") as thn_semester from tahun_akademik');

				$dropdowns = $query->result();

				foreach ($dropdowns as $dropdown){
					if ($dropdown->semester == 1) {
						$tampilSemester = "Ganjil";
					}else{
						$tampilSemester = "Genap";
					}

					$dropDownList[$dropdown->id_thn_akad] = $dropdown -> thn_semester . " " .$tampilSemester;
				}

				echo form_dropdown('id_thn_akad',$dropDownList,'', 'class="form-control" id="id_thn_akad"');
				echo form_error('id_thn_akad','<div class="text-danger small ml-3">')

			?>
		</div>

		<button type="submit" class="btn btn-primary mt-3">Proses</button>
		
	</form>

</div>