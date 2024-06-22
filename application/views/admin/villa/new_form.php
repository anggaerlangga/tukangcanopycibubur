<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/villa') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php echo site_url('admin/villa/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="kode_villa">Kode Villa*</label>
								<input class="form-control <?php echo form_error('kode_villa') ? 'is-invalid':'' ?>"
								 type="text" name="kode_villa" placeholder="Kode Villa" />
								<div class="invalid-feedback">
									<?php echo form_error('kode_villa') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="villa_name">Villa Name*</label>
								<input class="form-control <?php echo form_error('title') ? 'is-invalid':'' ?>"
								 type="text" name="villa_name" placeholder="Villa Name" />
								<div class="invalid-feedback">
									<?php echo form_error('villa_name') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="location_name">Location Name</label>
								<input class="form-control <?php echo form_error('location_name') ? 'is-invalid':'' ?>"
								 type="text" name="location_name" placeholder="Location Name" />
								<div class="invalid-feedback">
									<?php echo form_error('location_name') ?>
								</div>
							</div>

                            <!-- <div class="form-group">
								<label for="province">Province Name*</label>
								<select class="form-control" name="province">
									<option value="">No Selected</option>
									<?php foreach($city as $row):?>
									<option value="<?php echo $row->province;?>"><?php echo $row->province;?></option>
                       				 <?php endforeach;?>
								</select>
							</div> -->

                            <div class="form-group">
								<label for="city">City Name*</label>
								<select class="form-control" name="city">
									<option value="">No Selected</option>
									<?php foreach($city as $row):?>
									<option value="<?php echo $row->city_name;?>"><?php echo $row->city_name;?></option>
                       				 <?php endforeach;?>
								</select>
							</div>

                            <div class="form-group">
								<label for="title">Title</label>
								<input class="form-control <?php echo form_error('title') ? 'is-invalid':'' ?>"
								 type="text" name="title" placeholder="Title" />
								<div class="invalid-feedback">
									<?php echo form_error('title') ?>
								</div>
							</div>

                            <div class="form-group">
								<label for="price">Price</label>
								<input class="form-control <?php echo form_error('price') ? 'is-invalid':'' ?>"
								 type="text" name="price" placeholder="Price" />
								<div class="invalid-feedback">
									<?php echo form_error('price') ?>
								</div>
							</div>

                            <div class="form-group">
								<label for="description">Description</label>
								<textarea class="form-control <?php echo form_error('description') ? 'is-invalid':'' ?>"
								 name="description" placeholder="Description" rows="4" cols="50"></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('description') ?>
								</div>
							</div>

							<!-- <div class="form-group">
								<label for="file">Photo</label>
								<?php for ($i=1; $i <=5 ; $i++) :?>
									<input class="form-control" type="file" name="files<?php echo $i;?>">
								<?php endfor;?>
							</div> -->

							<!-- <div class="form-group">
								<label for="name">Photo Thumbnail</label>
								<input class="form-control-file <?php echo form_error('photo') ? 'is-invalid':'' ?>"
								 type="file" name="files[]" multiple />
								<div class="invalid-feedback">
									<?php echo form_error('photo') ?>
								</div>
							</div> -->

                            <div class="form-group">
								<label for="name">Photo Thumbnail</label>
								<input class="form-control-file <?php echo form_error('photo') ? 'is-invalid':'' ?>"
								 type="file" name="photo" />
								<div class="invalid-feedback">
									<?php echo form_error('photo') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="tamu">Jumlah Tamu</label>
								<input class="form-control <?php echo form_error('tamu') ? 'is-invalid':'' ?>"
								 type="text" name="tamu" placeholder="Jumlah Tamu" />
								<div class="invalid-feedback">
									<?php echo form_error('tamu') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="kamartidur">Jumlah Kamar Tidur</label>
								<input class="form-control <?php echo form_error('tamu') ? 'is-invalid':'' ?>"
								 type="text" name="kamartidur" placeholder="Jumlah K.Tidur" />
								<div class="invalid-feedback">
									<?php echo form_error('kamartidur') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="kamarmandi">Jumlah Kamar Mandi</label>
								<input class="form-control <?php echo form_error('kamarmandi') ? 'is-invalid':'' ?>"
								 type="text" name="kamarmandi" placeholder="Jumlah K.Mandi" />
								<div class="invalid-feedback">
									<?php echo form_error('kamarmandi') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="ruangkeluarga">Ruang Keluarga</label>
								<select class="form-control" name="ruangkeluarga">
									<option value="">No Selected</option>
									<option value="Y">Ada</option>
									<option value="N">Tidak Ada</option>
								</select>
								<div class="invalid-feedback">
									<?php echo form_error('ruangkeluarga') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="dapur">Dapur</label>
								<select class="form-control" name="dapur">
									<option value="">No Selected</option>
									<option value="Y">Ada</option>
									<option value="N">Tidak Ada</option>
								</select>
								<div class="invalid-feedback">
									<?php echo form_error('dapur') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="tempatparkir">Tempat Parkir</label>
								<select class="form-control" name="tempatparkir">
									<option value="">No Selected</option>
									<option value="Y">Ada</option>
									<option value="N">Tidak Ada</option>
								</select>
								<div class="invalid-feedback">
									<?php echo form_error('tempatparkir') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="wifi">Wifi</label>
								<select class="form-control" name="wifi">
									<option value="">No Selected</option>
									<option value="Y">Ada</option>
									<option value="N">Tidak Ada</option>
								</select>
								<div class="invalid-feedback">
									<?php echo form_error('wifi') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="kolamrenang">Kolam Renang</label>
								<select class="form-control" name="kolamrenang">
									<option value="">No Selected</option>
									<option value="Y">Ada</option>
									<option value="N">Tidak Ada</option>
								</select>
								<div class="invalid-feedback">
									<?php echo form_error('kolamrenang') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="recommended">Recommended</label>
								<select class="form-control" name="recommended">
									<option value="">No Selected</option>
									<option value="Y">Ya</option>
									<option value="N">Tidak</option>
								</select>
								<div class="invalid-feedback">
									<?php echo form_error('recommended') ?>
								</div>
							</div>

                            <!-- <div class="form-group">
								<label for="createdby">Created By</label>
								<input class="form-control <?php echo form_error('createdby') ? 'is-invalid':'' ?>"
								 type="text" name="createdby" placeholder="Created By" />
								<div class="invalid-feedback">
									<?php echo form_error('createdby') ?>
								</div>
							</div> -->

							<!-- <div class="form-group">
								<label for="createdon">Created On*</label>
								<input class="form-control <?php echo form_error('createdon') ? 'is-invalid':'' ?>"
								 type="date" name="createdon" placeholder="Created On" />
								<div class="invalid-feedback">
									<?php echo form_error('createdon') ?>
								</div>
							</div> -->

							<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>
				<!-- /.container-fluid -->

				<!-- Sticky Footer -->
				<?php $this->load->view("admin/_partials/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->


		<?php $this->load->view("admin/_partials/scrolltop.php") ?>

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>