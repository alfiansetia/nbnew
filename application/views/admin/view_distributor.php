<?php
if (!$this->session->userdata('id')) {
	redirect(base_url() . 'admin/login');
}
?>

<section class="content-header">
	<div class="content-header-left">
		<h1>View Distributor</h1>
	</div>
	<div class="content-header-right">
		<a href="<?php echo base_url(); ?>admin/distributor/add" class="btn btn-primary btn-sm">Add New</a>
		<button type="button" id="btn_import" class="btn btn-primary btn-sm">Import</button>
	</div>
</section>

<section class="content">
	<div class="row">
		<div class="col-md-12">

			<?php
			if ($this->session->flashdata('error')) {
			?>
				<div class="callout callout-danger">
					<p><?php echo $this->session->flashdata('error'); ?></p>
				</div>
			<?php
			}
			if ($this->session->flashdata('success')) {
			?>
				<div class="callout callout-success">
					<p><?php echo $this->session->flashdata('success'); ?></p>
				</div>
			<?php
			}
			?>

			<div class="box box-info">
				<div class="box-body table-responsive">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>SL</th>
								<th>Name</th>
								<th>Province</th>
								<th>City</th>
								<th>Photo</th>
								<th>Language</th>
								<th width="140">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$i = 0;
							foreach ($distributor as $row) {
								$i++;
							?>
								<tr>
									<td style="width:100px;"><?php echo $i; ?></td>
									<td><?php echo $row['name']; ?></td>
									<td><?php echo $row['provincename']; ?></td>
									<td><?php echo $row['cityname']; ?></td>
									<td style="width:250px;"><img src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>" alt="<?php echo $row['name']; ?>" style="width:150px;"></td>
									<td><?php echo $row['lang_name']; ?></td>
									<td>
										<a class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModal<?php echo $i; ?>">Details</a>
										<a href="<?php echo base_url(); ?>admin/distributor/edit/<?php echo $row['id']; ?>" class="btn btn-primary btn-xs">Edit</a>
										<a href="<?php echo base_url(); ?>admin/distributor/delete/<?php echo $row['id']; ?>" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure?');">Delete</a>
									</td>
								</tr>
								<div class="modal fade" id="myModal<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
												<h4 class="modal-title" id="myModalLabel">View Details</h4>
											</div>
											<div class="modal-body">
												<div class="rTable">
													<div class="rTableRow">
														<div class="rTableHead"><strong>Name</strong></div>
														<div class="rTableCell">
															<?php echo $row['name']; ?>
														</div>
													</div>
													<div class="rTableRow">
														<div class="rTableHead"><strong>Address</strong></div>
														<div class="rTableCell">
															<?php echo $row['address']; ?>
														</div>
													</div>
													<div class="rTableRow">
														<div class="rTableHead"><strong>City</strong></div>
														<div class="rTableCell">
															<?php echo $row['cityname']; ?>
														</div>
													</div>
													<div class="rTableRow">
														<div class="rTableHead"><strong>Province</strong></div>
														<div class="rTableCell">
															<?php echo $row['provincename']; ?>
														</div>
													</div>
													<div class="rTableRow">
														<div class="rTableHead"><strong>Phone</strong></div>
														<div class="rTableCell">
															<?php echo $row['phone']; ?>
														</div>
													</div>
													<div class="rTableRow">
														<div class="rTableHead"><strong>Url Google</strong></div>
														<div class="rTableCell">
															<?php echo $row['url_google']; ?>
														</div>
													</div>
													<div class="rTableRow">
														<div class="rTableHead"><strong>Url Maps</strong></div>
														<div class="rTableCell">
															<?php echo $row['url_maps']; ?>
														</div>
													</div>
													<div class="rTableRow">
														<div class="rTableHead"><strong>Latitude</strong></div>
														<div class="rTableCell">
															<?php echo $row['latitude']; ?>
														</div>
													</div>
													<div class="rTableRow">
														<div class="rTableHead"><strong>Longiitude</strong></div>
														<div class="rTableCell">
															<?php echo $row['longitude']; ?>
														</div>
													</div>
													<div class="rTableRow">
														<div class="rTableHead"><strong>Photo</strong></div>
														<div class="rTableCell">
															<img src="<?php echo base_url() . 'public/uploads/' . $row['photo']; ?>" alt="" style="width:120px;">
														</div>
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
							<?php
							}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="modal fade" id="modal_import" tabindex="-1" role="dialog" aria-labelledby="modal_import">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Import Data</h4>
			</div>
			<div class="modal-body">
				<form action="" id="form_import">

					<div class="form-group">
						<label for="" class="col-sm-2 control-label">File <span>*</span></label>
						<div class="col-sm-6">
							<input type="file" class="form-control" name="file" required>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button id="btn_modal_download" type="button" class="btn btn-success">Sample</button>
				<button id="btn_modal_submit" type="button" class="btn btn-primary">Submit</button>
			</div>
		</div>
	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
	$(document).ready(function() {
		$('#btn_import').click(function() {
			$('#modal_import').modal('show')
		})
		$('#btn_modal_submit').click(function() {
			$('#form_import').submit()
		})
		$('#btn_modal_download').click(function() {
			window.open('<?= base_url("public/file/distributor.xlsx") ?>', '_blank')
		})

		$('#form_import').on('submit', function(event) {
			event.preventDefault();
			$.ajax({
				url: "distributor/import",
				method: "POST",
				data: new FormData(this),
				contentType: false,
				cache: false,
				processData: false,
				success: function(result) {
					$('button').prop('disabled', false);
					alert(result.message)
					if (result.status) {
						$("#form_import").trigger('reset');
						window.location.reload()
					}
				},
				beforeSend: function() {
					$('button').prop('disabled', true);
				},
				error: function(xhr) {
					$('button').prop('disabled', false);
					alert('Server Error!')
				}
			})
		});


	})
</script>