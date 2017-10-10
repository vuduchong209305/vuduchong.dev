<?php if($this->session->flashdata()) : ?>
	<div class="alert alert-info">
		<button class="close" data-dismiss="alert">
			<i class="ace-icon fa fa-times"></i>
		</button>
		<h4 class="text-alert"><i class="ace-icon fa fa-hand-o-right"></i>
			<?= $this->session->flashdata('message') ?>
		</h4>
	</div>
<?php endif; ?>