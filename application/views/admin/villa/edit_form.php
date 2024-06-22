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

				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('admin/villa/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="" method="post" enctype="multipart/form-data">
						<!-- Note: atribut action dikosongkan, artinya action-nya akan diproses 
							oleh controller tempat vuew ini digunakan. Yakni index.php/admin/products/edit/ID --->

							<input type="hidden" name="id" value="<?php echo $villa->villa_id?>" />

							<div class="form-group">
								<label for="kode_villa">Kode Villa*</label>
								<input class="form-control <?php echo form_error('kode_villa') ? 'is-invalid':'' ?>"
								 type="text" name="kode_villa" placeholder="Kode Villa" value="<?php echo $villa->kode_villa ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('kode_villa') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="villa_name">Villa Name*</label>
								<input class="form-control <?php echo form_error('villa_name') ? 'is-invalid':'' ?>"
								 type="text" name="villa_name" placeholder="Villa Name" value="<?php echo $villa->villa_name ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('villa_name') ?>
								</div>
							</div>

                            <div class="form-group">
								<label for="location_name">Location Name*</label>
								<input class="form-control <?php echo form_error('location_name') ? 'is-invalid':'' ?>"
								 type="text" name="location_name" placeholder="Location Name" value="<?php echo $villa->location_name ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('location_name') ?>
								</div>
							</div>

							<!-- <div class="form-group">
								<label for="province">Province Name*</label>
								<select class="form-control" name="province">
								    <option value="<?php echo $villa->province; ?>"><?php echo $villa->province;?></option>
									<?php foreach($city as $row):?>
									 <option value="<?php echo $row->province;?>"><?php echo $row->province;?></option>
                       				 <?php endforeach;?>
								</select>
							</div> -->
                            
                            <div class="form-group">
								<label for="city">City Name*</label>
								<select class="form-control" name="city">
									<option value="<?php echo $villa->city ?>"><?php echo $villa->city;?></option>
									<?php foreach($city as $row):?>
									<option value="<?php echo $row->city_name;?>"><?php echo $row->city_name;?></option>
                       				 <?php endforeach;?>
								</select>
							</div>

                            <div class="form-group">
								<label for="title">Title*</label>
								<input class="form-control <?php echo form_error('title') ? 'is-invalid':'' ?>"
								 type="text" name="title" placeholder="Title" value="<?php echo $villa->title ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('title') ?>
								</div>
							</div>

                            <div class="form-group">
								<label for="price">Price*</label>
								<input class="form-control <?php echo form_error('price') ? 'is-invalid':'' ?>"
								 type="text" name="price" placeholder="Price" value="<?php echo $villa->price ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('price') ?>
								</div>
							</div>

                            <div class="form-group">
								<label for="description">Description*</label>
								<input class="form-control <?php echo form_error('description') ? 'is-invalid':'' ?>"
								 type="text" name="description" placeholder="Description" rows="4" cols="50" value="<?php echo $villa->description ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('description') ?>
								</div>
							</div>

                            <div class="form-group">
								<label for="photo">Photo*</label>
								<input class="form-control-file <?php echo form_error('photo') ? 'is-invalid':'' ?>"
								 type="file" name="photo" />
                                 <input type="hidden" name="old_image" value="<?php echo $villa->photo ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('photo') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="tamu">Jumlah Tamu</label>
								<select class="form-control" name="tamu">
									<option value="<?php echo $villa->tamu ?>"><?php echo $villa->tamu;?></option>
									<option value="Y">Ya</option>
									<option value="N">Tidak</option>
								</select>
							</div>

							<div class="form-group">
								<label for="kamartidur">Kamar Tidur</label>
								<select class="form-control" name="kamartidur">
									<option value="<?php echo $villa->kamartidur ?>"><?php echo $villa->kamartidur;?></option>
									<option value="Y">Ya</option>
									<option value="N">Tidak</option>
								</select>
							</div>

							<div class="form-group">
								<label for="kamarmandi">Kamar Mandi</label>
								<select class="form-control" name="kamarmandi">
									<option value="<?php echo $villa->kamarmandi ?>"><?php echo $villa->kamarmandi;?></option>
									<option value="Y">Ya</option>
									<option value="N">Tidak</option>
								</select>
							</div>

							<div class="form-group">
								<label for="ruangkeluarga">Ruang Keluarga</label>
								<select class="form-control" name="ruangkeluarga">
									<option value="<?php echo $villa->ruangkeluarga ?>"><?php echo $villa->ruangkeluarga;?></option>
									<option value="Y">Ya</option>
									<option value="N">Tidak</option>
								</select>
							</div>

							<div class="form-group">
								<label for="dapur">Dapur</label>
								<select class="form-control" name="dapur">
									<option value="<?php echo $villa->dapur ?>"><?php echo $villa->dapur;?></option>
									<option value="Y">Ya</option>
									<option value="N">Tidak</option>
								</select>
							</div>

							<div class="form-group">
								<label for="tempatparkir">Tempat Parkir</label>
								<select class="form-control" name="tempatparkir">
									<option value="<?php echo $villa->tempatparkir ?>"><?php echo $villa->tempatparkir;?></option>
									<option value="Y">Ya</option>
									<option value="N">Tidak</option>
								</select>
							</div>

							<div class="form-group">
								<label for="wifi">Wifi</label>
								<select class="form-control" name="wifi">
									<option value="<?php echo $villa->wifi ?>"><?php echo $villa->wifi;?></option>
									<option value="Y">Ya</option>
									<option value="N">Tidak</option>
								</select>
							</div>

							<div class="form-group">
								<label for="kolamrenang">Kolam Renang</label>
								<select class="form-control" name="kolamrenang">
									<option value="<?php echo $villa->kolamrenang ?>"><?php echo $villa->kolamrenang;?></option>
									<option value="Y">Ya</option>
									<option value="N">Tidak</option>
								</select>
							</div>

							<div class="form-group">
								<label for="recommended">Recommended</label>
								<select class="form-control" name="recommended">
									<option value="<?php echo $villa->recommended ?>"><?php echo $villa->recommended;?></option>
									<option value="Y">Ya</option>
									<option value="N">Tidak</option>
								</select>
							</div>

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