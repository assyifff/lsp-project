<section class="content-header" style="background-color: #57B049; color: white; padding-bottom: 15px">
	<h1>
	  Halaman <?php echo @$judul; ?>
	  <small style="color: white"><?php echo @$deskripsi; ?></small>
	</h1>
	<ol class="breadcrumb">
	  <?php
	  	for ($i=0; $i<count($this->session->flashdata('segment')); $i++) { 
	  		if ($i == 0) {
	  		?>
				<li><i class="fa fa-dashboard"></i> <?php echo @$judul; ?></li>
	  		<?php
	  		} elseif ($i == (count($this->session->flashdata('segment'))-1)) {
  			?>
				<li class="active"> <?php echo @$judul; ?> </li>
	  		<?php
	  		} else {
  			?>
				<li> <?php echo @$judul; ?> </li>
	  		<?php
	  		}

	  		if ($i == 0 && $i == (count($this->session->flashdata('segment'))-1)) {
	  		?>
				<li class="active" style="color: white"> Here </li>
	  		<?php
	  		}
	  	}
	  ?>
	</ol>
</section>