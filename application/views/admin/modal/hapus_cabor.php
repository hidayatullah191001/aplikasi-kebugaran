<!-- Modal -->
<div class="modal fade" id="hapusCabor<?=$dt['id'];?>" tabindex="-1" role="dialog" aria-labelledby="deleteUserModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Hapus <?=$dt['nama_cabor'] ?></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p>Yakin ingin menghapus data ini?</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<a class="btn btn-danger" href="<?=base_url('admin/hapus_cabor/').$dt['id'] ?>">Hapus</a>
			</div>
		</div>
	</div>
</div>