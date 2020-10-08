<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Tambah Data Barang</h1>
	</div>

	<div class="card" style="width: 60%">
		<div class="card-body">
			<form method="POST" action="<?php echo base_url('admin/dataBarang/tambahDataAksi') ?>" enctype="multipart/form-data">

				<div class="form-group">
					<label>Kode Barang</label>
					<input type="text" name="kode_barang" class="form-control">
					<?php echo form_error('kode_barang', '<div class"text-small text-danger"><div>') ?>
				</div>

				<div class="form-group">
					<label>Nama Barang</label>
					<input type="text" name="nama_barang" class="form-control">
					<?php echo form_error('nama_barang', '<div class"text-small text-danger"><div>') ?>
				</div>				

				<div class="form-group">
					<label>Harga Barang</label>
					<input type="number" name="harga_barang" class="form-control">
					<?php echo form_error('harga_barang', '<div class"text-small text-danger"><div>') ?>
				</div>								

				<div class="form-group">
					<label>Harga Jual</label>
					<input type="number" name="harga_jual" class="form-control">
					<?php echo form_error('tanggal_bekerja', '<div class"text-small text-danger"><div>') ?>
				</div>

				<div class="form-group">
					<label>Stok Barang</label>
					<input type="text" name="stok_barang" readonly="" class="form-control" value="0">
					<?php echo form_error('stok_barang', '<div class"text-small text-danger"><div>') ?>
				</div>

				<button type="submit" class="btn btn-primary">Simpan</button>								
			</form>	
		</div>
		
	</div>



</div>