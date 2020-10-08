    <!-- Begin Page Content -->
	<div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
      </div>
	
      <?php echo $this->session->flashdata('pesan') ?>

      <a class="mb-2 mt-2 btn btn-sm btn-success" href="<?php echo base_url('admin/dataBarang/tambahData') ?>"><i class ="fas fa-plus"></i>Tambah Barang</a>

      <table class = "table table-stripped table-bordered">
      	<tr>
      		<th class ="text-center">No</th>
      		<th class ="text-center">Kode Barang</th>
      		<th class ="text-center">Nama Barang</th>
      		<th class ="text-center">Harga Barang</th>
      		<th class ="text-center">Harga Jual</th>
      		<th class ="text-center">Stok</th> 		
      		<th class ="text-center">Action</th>

      	</tr>

      	<?php $no=1; foreach ($barang as $p) : ?>
      	<tr>
      		<td><?php echo $no++ ?></td>
      		<td><?php echo $p->kode_barang ?></td>
      		<td><?php echo $p->nama_barang ?></td>
      		<td><?php echo $p->harga_barang ?></td>
      		<td><?php echo $p->harga_jual ?></td>
      		<td><?php echo $p->stok_barang ?></td>
      		<td>
		      	<center>
		      		<a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/dataBarang/updateData/'.$p->id_barang) ?>"><i class="fas fa-edit"></i>Update Stok Barang</a>
		      	</center>

		    </td>
      	</tr>
      <?php endforeach ?>

      </table>


	</div>
