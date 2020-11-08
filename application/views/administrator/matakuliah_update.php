<div class="container-fluid">
	
	<div class="alert alert-success" role="alert">
    	<i class="fas fa-edit"></i> Form Edit Mata Kuliah
    </div>

    <?php foreach ($matakuliah as $mk) : ?>

    	<form method="post" action="<?php echo base_url('administrator/matakuliah/update_aksi') ?>">
    		<div class="form-group">
				<label>Nama Mata Kuliah</label>
				<input type="hidden" name="kode_matakuliah" value="<?php echo $mk->kode_matakuliah ?>">
				<input type="text" name="nama_matakuliah" class="form-control" value="<?php echo $mk->nama_matakuliah ?>">
				<?php echo form_error('nama_matakuliah','<div class="text-danger small ml-3">') ?>
			</div>
			<div class="form-group">
				<label>SKS</label>
				<select name="sks" class="form-control">
					<option><?php echo $mk->sks ?></option>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>6</option>
				</select>
				<?php echo form_error('sks','<div class="text-danger small ml-3">') ?>
			</div>
			<div class="form-group">
				<label>Semester</label>
				<select name="semester" class="form-control">
					<option><?php echo $mk->semester ?></option>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>6</option>
					<option>7</option>
					<option>8</option>
				</select>
				<?php echo form_error('semester','<div class="text-danger small ml-3">') ?>
			</div>
			<div class="form-group">
				<label>Program Studi</label>
				<select name="nama_prodi" class="form-control">
					<option><?php echo $mk->nama_prodi ?></option>
					<?php foreach ($prodi as $prd) : ?>
						<option value="<?php echo $prd->nama_prodi ?>"><?php echo $prd->nama_prodi ?></option>
					<?php endforeach ?>
				</select>
				<?php echo form_error('nama_prodi','<div class="text-danger small ml-3">') ?>
			</div>
			<button type="submit" class="btn btn-sm btn-primary">Simpan</button>
    	</form>

    <?php endforeach; ?>

</div>