<div class="container-fluid">
	
	<div class="alert alert-success" role="alert">
    	<i class="fas fa-university"></i> Form Masuk Halaman Transkrip Nilai
    </div>

    <?php echo $this->session->flashdata('pesan'); ?>

	<form method="post" action="<?php echo base_url('administrator/transkrip_nilai/buat_transkrip_nilai') ?>">
		<div class="form-group">
			<label>NIM Mahasiswa</label>
			<input type="text" name="nim" placeholder="Masukkan NIM Mahasiswa" class="form-control">
			<?php echo form_error('nim','<div class="text-danger small ml-2">') ?>
		</div>

		<button type="submit" class="btn btn-primary">Proses</button>

	</form>

</div>