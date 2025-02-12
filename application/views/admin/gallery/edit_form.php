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

						<a href="<?php echo site_url('admin/gallery/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="" method="post" enctype="multipart/form-data">
						<!-- Note: atribut action dikosongkan, artinya action-nya akan diproses 
							oleh controller tempat vuew ini digunakan. Yakni index.php/admin/products/edit/ID --->

							<input type="hidden" name="id" value="<?php echo $gallery->gallery_id?>" />

							<div class="form-group">
								<label for="title">Title</label>
								<input class="form-control <?php echo form_error('title') ? 'is-invalid':'' ?>"
								 type="text" name="title" placeholder="Title" value="<?php echo $gallery->title ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('title') ?>
								</div>
							</div>

                            <div class="form-group">
								<label for="subtitle">Subtitle</label>
								<input class="form-control <?php echo form_error('subtitle') ? 'is-invalid':'' ?>"
								 type="text" name="subtitle" placeholder="subtitle" value="<?php echo $gallery->subtitle ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('subtitle') ?>
								</div>
							</div>

                            <div class="form-group">
								<label for="description">Description</label>
								<input class="form-control <?php echo form_error('description') ? 'is-invalid':'' ?>"
								 type="text" name="description" placeholder="description" value="<?php echo $gallery->description ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('description') ?>
								</div>
							</div>

                            <div class="form-group">
								<label for="image">Image</label>
								<input class="form-control <?php echo form_error('image') ? 'is-invalid':'' ?>"
								 type="file" name="image" />
                                 <input type="hidden" name="old_image" value="<?php echo $gallery->image ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('image') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="CreatedBy">Created By</label>
								<input class="form-control <?php echo form_error('createdby') ? 'is-invalid':'' ?>"
								 type="text" name="createdby" placeholder="createdby" value="<?php echo $gallery->createdby ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('createdby') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="CreatedOn">Created On</label>
								<input class="form-control <?php echo form_error('createdon') ? 'is-invalid':'' ?>"
								 type="text" name="createdon" placeholder="createdon" value="<?php echo $gallery->createdon ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('createdon') ?>
								</div>
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