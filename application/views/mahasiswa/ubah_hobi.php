<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                   <b> EDIT HOBBY </b>
                    
                </h2>
            </div>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <!-- <h2>
                                HORIZONTAL LAYOUT
                            </h2> -->
							<a href="<?php echo base_url('mahasiswa/data_mahasiswa'); ?>" class="btn btn-warning m-t-15 waves-effect">Kembali</a>
                            <ul class="header-dropdown m-r--5">
                                <!-- <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                    </ul>
                                </li> -->
                            </ul>
                        </div>
                        <div class="body">
						<?php foreach($ubah_hobi as $v) { ?>
                            <form class="form-horizontal" action="<?php echo base_url("mahasiswa/simpan_hobi/$v->id_detail_mahasiswa"); ?>" method="post">
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label>Hobby</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="hobby" class="form-control" value="<?php echo $v->hobby; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div> 
								<div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label>Prestasi</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="prestasi" class="form-control" value="<?php echo $v->prestasi; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
								 <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label>Minat</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="minat" class="form-control" value="<?php echo $v->minat; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
						<?php } ?>
                                <div class="row clearfix">
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
            <!-- Exportable Table -->
            <!-- #END# Exportable Table -->
        </div>
    </section>
	