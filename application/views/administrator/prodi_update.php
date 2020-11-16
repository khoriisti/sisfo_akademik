<div class="container-fluid">
	
	<div class="alert alert-success" role="alert">
    	<i class="fa fa-edit"></i> Form Edit Program Studi
    </div>

    <?php foreach ($prodi as $prd) : ?>

    	<form method="post" action="<?php echo base_url('administrator/prodi/update_aksi') ?>">
    		<div class="form-group">
				<label>Kode Prodi</label>
				<input type="hidden" name="id_prodi" value="<?php echo $prd->id_prodi ?>">
				<input type="text" name="kode_prodi" class="form-control" value="<?php echo $prd->kode_prodi ?>">
				<?php echo form_error('kode_prodi','<div class="text-danger small ml-3">') ?>
			</div>
			<div class="form-group">
				<label>Nama Prodi</label>
				<input type="text" name="nama_prodi" class="form-control" value="<?php echo $prd->nama_prodi ?>">
				<?php echo form_error('nama_prodi','<div class="text-danger small ml-3">') ?>
			</div>
			<div class="form-group">
				<label>Nama Jurusan</label>
				<select name="nama_jurusan" class="form-control">
					<option value="<?php echo $prd->nama_jurusan ?>"><?php echo $prd->nama_jurusan ?></option>
					<?php foreach ($jurusan as $jrs) : ?>
						<option value="<?php echo $jrs->nama_jurusan ?>"><?php echo $jrs->nama_jurusan ?></option>
					<?php endforeach ?>
				</select>
				<?php echo form_error('nama_jurusan','<div class="text-danger small ml-3">') ?>
			</div>
			<button type="submit" class="btn btn-primary">Simpan</button>
    	</form>

    <?php endforeach; ?>

</div>