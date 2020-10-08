<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Update Data Barang</h1>
	</div>

	<div class="card" style="width: 60%">
		<div class="card-body">
		<?php foreach ($barang as $p) : ?>
			<form method="POST" action="<?php echo base_url('admin/dataBarang/updateDataAksi') ?>" enctype="multipart/form-data">

				<div class="form-group">
					<label>Kode Barang</label>
					<input type="hidden" name="id_barang" class="form-control" value="<?php echo $p->id_barang ?>">
					<input type="text" name="kode_barang" readonly="" class="form-control" value="<?php echo $p->kode_barang ?>">
					<?php echo form_error('kode_barang', '<div class"text-small text-danger"><div>') ?>
				</div>

				<div class="form-group">
					<label>Nama Barang</label>
					<input type="text" name="nama_barang" readonly="" class="form-control" value="<?php echo $p->nama_barang ?>">
					<?php echo form_error('nama_barang', '<div class"text-small text-danger"><div>') ?>
				</div>				

				<div class="form-group">
					<label>Harga Barang</label>
					<input type="number" name="harga_barang" readonly="" class="form-control" value="<?php echo $p->harga_barang ?>">
					<?php echo form_error('harga_barang', '<div class"text-small text-danger"><div>') ?>
				</div>								

				<div class="form-group">
					<label>Harga Jual</label>
					<input type="number" name="harga_jual" readonly="" class="form-control" value="<?php echo $p->harga_jual ?>">
					<?php echo form_error('harga_jual', '<div class"text-small text-danger"><div>') ?>
				</div>

				<div class="form-group">
					<label>Stok Barang</label>
					<input type="number" name="stok_barang" class="form-control" value="<?php echo $p->stok_barang ?>">
					<?php echo form_error('stok_barang', '<div class"text-small text-danger"><div>') ?>
				</div>

				<button type="submit" class="btn btn-primary">Simpan</button>								
			</form>	
		<?php endforeach; ?>
		</div>
		
	</div>



</div>