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

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/villa/add') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Villa Name</th>
                                        <th>Location Name</th>
                                        <th>City</th>
                                        <th>Title</th>
                                        <th>Price</th>
                                        <th>Description</th>
                                        <th>Photo</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($villa as $villa): ?>
									<tr>
										<td width="150">
											<?php echo $villa->villa_name ?>
										</td>
                                        <td>
											<?php echo $villa->location_name ?>
										</td>
                                        <td>
											<?php echo $villa->city ?>
										</td>
                                        <td>
											<?php echo $villa->title ?>
										</td>
                                        <td>
											<?php echo $villa->price ?>
										</td>
                                        <td>
											<?php echo $villa->description ?>
										</td>
                                        <td>
											<img src="<?php echo base_url('upload/villa/thumbnail/'.$villa->photo) ?>" width="64" />
										</td>
                                        <td>
											<a href="<?php echo site_url('admin/villa/edit/'.$villa->villa_id) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											<a onclick="deleteConfirm('<?php echo site_url('admin/villa/delete/'.$villa->villa_id) ?>')"
											 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
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
	<?php $this->load->view("admin/_partials/modal.php") ?>

	<?php $this->load->view("admin/_partials/js.php") ?>

    <script>
    function deleteConfirm(url){
        $('#btn-delete').attr('href', url);
        $('#deleteModal').modal();
    }
    </script>

</body>

</html>