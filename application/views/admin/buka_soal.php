<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	var maxField = 100; //Input fields increment limitation
	var addButton = $('.add_button'); //Add button selector
	var wrapper = $('.field_wrapper'); //Input field wrapper
	var fieldHTML = '<label>Pertanyaan</label><div class="form-group"><div class="form-line"><div class="form-line"><input type="text" name="pertanyaan[]" class="form-control" placeholder="Pertanyaan" required></div></div></br> <label>Pilihan A</label><div class="form-group"><div class="form-line"><div class="form-line"><input type="text" name="pilihan1[]" class="form-control" placeholder="Pilihan A" required></div></div></br> <label>Pilihan B</label><div class="form-group"><div class="form-line"><div class="form-line"><input type="text" name="pilihan2[]" class="form-control" placeholder="Pilihan B" required></div></div></br> <label>Pilihan C</label><div class="form-group"><div class="form-line"><div class="form-line"><input type="text" name="pilihan3[]" class="form-control" placeholder="Pilihan C" required></div></div></br> <label>Pilihan D</label><div class="form-group"><div class="form-line"><div class="form-line"><input type="text" name="pilihan4[]" class="form-control" placeholder="Pilihan D" required></div></div></br> <label>Jawaban</label><div class="form-group"><div class="form-line"><select class="form-control" name="jawaban[]"><option value="A">A</option><option value="B">B</option><option value="C">C</option><option value="D">D</option></select></div></div>' ; //New input field html 
	var x = 1; //Initial field counter is 1
	$(addButton).click(function(){ //Once add button is clicked
		if(x < maxField){ //Check maximum number of input fields
			x++; //Increment field counter
			$(wrapper).append(fieldHTML); // Add field html
		}
	});
	$(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
		e.preventDefault();
		$(this).parent('div').remove(); //Remove field html
		x--; //Decrement field counter
	});
});
</script>
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                   <b> SOAL TEST </b><br/><br/>
				   <button type="button" data-toggle="modal" data-target="#cari" class="btn bg-cyan waves-effect">Tambah Soal</button>
                    
                </h2>
            </div>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <?php foreach($tampil_detail_soal as $v) { ?>
				<div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <a href="<?php echo base_url("admin/edit_soal/$v->id_soal"); ?>" class="btn btn-info waves-effect">Ubah Soal</a>
                                <a href="<?php echo base_url("admin/hapus_detail_soal/$v->id_soal/$v->kode"); ?>" class="btn btn-danger waves-effect">Hapus</a>
                                
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <!-- <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li> -->
                            </ul>
                        </div>
                        <div class="body">
                            <div class="body table-responsive">
							 <P><?php echo $v->no; ?>. <?php echo $v->pertanyaan; ?> </P>
							 <br>
							 A. <input name="jawaban<?php echo $v->no; ?>" type="radio" id="radio_<?php echo $v->p1; ?>" class="radio-col-black" value="A">
							<label for="radio_<?php echo $v->p1; ?>"><?php echo $v->pilihan1; ?></label></br>
							B. <input name="jawaban<?php echo $v->no; ?>" type="radio" id="radio_<?php echo $v->p2; ?>" class="radio-col-black" value="B">
							<label for="radio_<?php echo $v->p2; ?>"><?php echo $v->pilihan2; ?></label></br>
							C. <input name="jawaban<?php echo $v->no; ?>" type="radio" id="radio_<?php echo $v->p3; ?>" class="radio-col-black" value="C">
							<label for="radio_<?php echo $v->p3; ?>"><?php echo $v->pilihan3; ?></label></br>
							D. <input name="jawaban<?php echo $v->no; ?>" type="radio" id="radio_<?php echo $v->p4; ?>" class="radio-col-black" value="D">
							<label for="radio_<?php echo $v->p4; ?>"><?php echo $v->pilihan4; ?></label>
                        <P>Jawaban. <?php echo $v->jawaban; ?> </P>
						</div>
                        </div>
                    </div>
                </div>
				<?php } ?>
				
				
            </div>
            <!-- #END# Basic Examples -->
            <!-- Exportable Table -->
            <!-- #END# Exportable Table -->
        </div>
    </section>
	<div class="modal fade" id="cari">
                          <div class="modal-dialog">
                            <div class="modal-content">

                              <!-- modal header -->
                                <div class="modal-header">
								<a href="javascript:void(0);" class="add_button" title="Tambah Soal"><img src="<?php echo base_url(); ?>assets/images/add.png"/></a>
                                    <button class="close" type="button" data-dismiss="modal">&times;</button>
                                    
                                </div>

                                <!-- modal untuk isi konten -->
                                <div class="modal-body">
                                <form role="form" action="<?php echo base_url("admin/penambahan_soal/$kode"); ?>" enctype="multipart/form-data" method="post">
								 <input type="hidden" name="id_ukm" class="form-control" value="<?php echo $v->id_ukm; ?>">
								 <input type="hidden" name="no" class="form-control" value="<?php echo $v->no; ?>">
								
									<label>Pertanyaan</label>  
								<div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="pertanyaan[]" class="form-control" placeholder="Pertanyaan" required>
                                        </div>
                                    </div>
									<label>Pilihan A</label>  
								<div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="pilihan1[]" class="form-control" placeholder="Pilihan A" required>
                                        </div>
                                    </div>
									<label>Pilihan B</label>  
								<div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="pilihan2[]" class="form-control" placeholder="Pilihan B" required>
                                        </div>
                                    </div>
									<label>Pilihan C</label>  
								<div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="pilihan3[]" class="form-control" placeholder="Pilihan C" required>
                                        </div>
                                    </div>
									<label>Pilihan D</label>  
								<div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="pilihan4[]" class="form-control" placeholder="Pilihan D" required>
                                        </div>
                                    </div>
									<label>Jawaban</label>  
								<div class="form-group">
                                        <div class="form-line">
                                            <select class="form-control" name="jawaban[]">
											<option value="A">A</option>
											<option value="B">B</option>
											<option value="C">C</option>
											<option value="D">D</option>
										</select>
                                        </div>
                                    </div>
									<hr />
									
									<div class="field_wrapper"></div>
                                </div>
                                <!-- modal untuk footer -->
                                <div class="modal-footer">
								<a href="javascript:void(0);" class="add_button" title="Tambah Soal"><img src="<?php echo base_url(); ?>assets/images/add.png"/></a>
                                    <button type="submit" class="btn bg-purple waves-effect">
                                    <i class="material-icons">save</i> Simpan Soal
                                </button>
                                </div>
                                </form>
                            </div>

                          </div>
                        </div>
                        </div>