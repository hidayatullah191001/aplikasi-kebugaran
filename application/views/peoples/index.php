<div class="container">
	<h1 class="mt-3">List of People</h1>
	<div class="row mt-3">
		<div class="col-md-6">
			<form action="<?= base_url('peoples') ?>" method="post">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Search keyword..." name="keyword" autocomplete="off" autofocus>
					<div class="input-group-append">
						<input class="btn btn-primary" type="submit" name="submit">
					</div>
				</div>
			</form>
		</div>
	</div>
	<div class="row">
		<div class="col-md-10">
			<h5>Results : <?= $total_rows; ?></h5>
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Name</th>
						<th>Email</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					foreach ($peoples as $p) :?>	
						<tr>
							<th><?= ++$start; ?></th>
							<td><?= $p['name'];?></td>
							<td><?= $p['email']; ?></td>
							<td>
								<a href="" class="badge badge-warning">detail</a>
								<a href="" class="badge badge-success">edit</a>
								<a href="" class="badge badge-danger">delete</a>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
				<?php if(empty($peoples)) : ?>
					<tr>
						<td colspan="4">
							<div class="alert alert-danger" role="alert">
								Data not found!
							</div>
						</td>
					</tr>
				<?php endif; ?>
			</table> 
			<?= $this->pagination->create_links(); ?>
		</div>
	</div>
</div>