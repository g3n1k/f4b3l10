<div class="wrapper wrapper-content">
            <div class="row animated fadeInRight">
                <div class="col-md-4">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Profile</h5>
                        </div>
                        <div>
                            <div class="ibox-content no-padding border-left-right">
                            <?php 
                                if($user->profile_picture == 'no-avatar.png'){

                                    echo '<img alt="image" class="img-responsive" src="uploads/profile/'.$user->profile_picture.'" />';

                                }else{

                                    echo '<img alt="image" class="img-responsive" src="uploads/files/'.$user->no_ktp."/".$user->profile_picture.'" />';

                                }
                            ?>
                            </div>
                            <div class="ibox-content profile-content">
                                <h4><strong><?php echo $userdata->nama;?> ( <?php echo $userdata->nik;?> )</strong></h4>
                                <p><i class="fa fa-birthday-cake"></i> <?php echo $userdata->tempat_lahir;?> , 
                                <?php
                                         if($userdata->tanggal_lahir == '0000-00-00')
                                            {
                                            echo 'Data Belum diubah.';
                                            }
                                        else
                                            {
                                            echo tanggal_indo($userdata->tanggal_lahir);
                                            }
                                ?></p>
								<hr>
                                <h5>
								<h4><strong>Alamat</strong></h4>
                                </h5>
                                <p>
								<?php echo $userdata->alamat;?>.
                                </p>

								<hr>

                                
                            </div>
                    </div>
                </div>
                    </div>
                <div class="col-md-8">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                        <?php   echo $this->session->flashdata('success');
                        echo $this->session->flashdata('error'); 
                        ?>
                            <h5>Detail</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">

						<div class="row">
                            
                                <div class="col-md-4">
                                    <h3>Citizenship & Other Information</h3>
                            <ul class="list-group clear-list m-t">
                                <li class="list-group-item fist-item">
                                <span class="pull-right">
                                    <?php echo $userdata->no_ktp;?>
                                    </span>
                                    KTP
                                </li>
                                <li class="list-group-item">
                                    <span class="pull-right">
                                    <?php echo $userdata->no_npwp;?>
                                    </span>
                                    NPWP
                                </li>
                                <li class="list-group-item">
                                    <span class="pull-right">
                                    <?php echo $userdata->no_kk;?>
                                    </span>
                                    Kartu Keluarga
                                </li>
                                <li class="list-group-item">
                                    <span class="pull-right">
                                    <?php echo $userdata->no_bpjs_kes;?>
                                    </span>
                                    BPJS Kesehatan
                                </li>
                                <li class="list-group-item">
                                    <span class="pull-right">
                                    <?php echo $userdata->no_bpjs_tk;?>
                                    </span>
                                    BPJS Ketenagakerjaan
                                </li>
                            </ul>

								
                                                                    

                                </div>
                                <div class="col-md-5">
                                    <h3>Contact Information</h3>
                            <ul class="list-group clear-list m-t">
                                <li class="list-group-item fist-item">
                                    <span class="pull-right">
                                    <?php echo $userdata->no_hp;?>
                                    </span>
                                    Handphone
                                </li>
                                <li class="list-group-item">
                                    <span class="pull-right">
                                    <?php echo @if_empty($userdata->alamat_email, "$emailaddress->USR_EMAIL");?>
                                    </span>
                                    Email
                                </li>
                                <li class="list-group-item">
                                    <span class="pull-right">
                                    <?php echo $userdata->nama_bank;?>
                                    </span>
                                    Nama Bank
                                </li>
                                <li class="list-group-item">
                                    <span class="pull-right">
                                    <?php echo $userdata->no_rekening;?>
                                    </span>
                                    Nomor Rekening
                                </li>
                               
                            </ul>

                                    

								</div>
								
								<div class="col-md-3">
								<span class="label label-primary pull-right">Active</span>
                                    <h3>Status</h3> 
                            <ul class="list-group clear-list m-t">
                                <li class="list-group-item fist-item">
                                    <span class="pull-right">
                                    <?php
                                         if($userdata->jenis_kelamin == '1')
                                            {
                                            echo 'Laki - Laki';
                                            }
                                        else if($userdata->jenis_kelamin == '2')
                                            {
                                            echo 'Perempuan';
                                            }
                                        else
                                            {
                                            echo 'Ini Wajib Di isi.';
                                            }
                                    ?>
                                    
                                    </span>
                                    Jenis Kelamin
                                </li>
                                <li class="list-group-item">
                                    <span class="pull-right">
                                    <?php
                                         if($userdata->agama == 'Islam')
                                            {
                                            echo 'Islam';
                                            }
                                        else if($userdata->agama == 'Kristen')
                                            {
                                            echo 'Kristen (Protestan)';
                                            }
										else if($userdata->agama == 'Hindu')
                                            {
                                            echo 'Hindu';
                                            }
										else if($userdata->agama == 'Budha')
                                            {
                                            echo 'Budha';
                                            }
										else if($userdata->agama == 'Katolik')
                                            {
                                            echo 'Katolik';
                                            }
                                        else if($userdata->agama == 'Konghucu')
                                            {
                                            echo 'Konghucu';
                                            }
										else
                                            {
                                            echo 'Ini Wajib Di isi.';
                                            }
                                    ?>
                                    </span>
                                    Agama
                                </li>
                                <li class="list-group-item">
                                    <span class="pull-right">
                                    <?php
                                         if($userdata->status_pernikahan == 'TK')
                                            {
                                            echo 'Tidak Kawin';
                                            }
                                        else if($userdata->status_pernikahan == 'K')
                                            {
                                            echo 'Menikah';
                                            }
                                        else
                                            {
                                            echo 'Ini Wajib Di isi.';
                                            }
                                    ?>
                                    </span>
                                    Marital Status
                                </li>
                                <li class="list-group-item">
                                    <span class="pull-right">
                                    <?php echo $userdata->jumlah_anak;?>
                                    </span>
                                    Jumlah Anak
                                </li>
                                
                                
                            </ul>
                                    

								</div>
								
							</div>
							
							<!-- posisi atas -->
							<hr>

							<div class="row">
                                <div class="col-md-4">
                                    <h3>Position</h3>
                            <ul class="list-group clear-list m-t">
                                <li class="list-group-item fist-item">
                                    <span class="pull-right">
                                    <?php echo @if_empty($kontrakkerja->nama_psa, "Belum Ditentukan");?>
                                    </span>
                                    ID
                                </li>
                                <li class="list-group-item">
                                    <span class="pull-right">
                                    <?php echo @if_empty($kontrakkerja->position_name, "Belum Ditentukan");?>
                                    </span>
                                    Posisi Kerja
                                </li>
                                <li class="list-group-item">
                                    <span class="pull-right">
                                    <?php echo @if_empty($kontrakkerja->unit, "Belum Ditentukan");?>
                                    </span>
                                    Unit Kerja
                                </li>
                               
                                
                                
                            </ul>	
								
                                

                                </div>
                                <div class="col-md-8">
                                    <h3>Pendidikan</h3>
                                    <div class="table-responsive">
                                    <table class="table table-hover no-margins">
                                <thead>
                                <tr>
                                    
                                    <th>Pendidikan Terakhir</th>
                                    <th>Nama Penyelenggara</th>
                                    <th>Jurusan</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                    <?php
                                         if($userdata->level_pendidikan == 'SD')
                                            {
                                            echo 'SEKOLAH DASAR';
                                            }
                                        else if($userdata->level_pendidikan == 'SMP')
                                            {
                                            echo 'SEKOLAH MENENGAH PERTAMA';
                                            }
										else if($userdata->level_pendidikan == 'SMA')
                                            {
                                            echo 'SEKOLAH MENENGAH ATAS';
                                            }
										else if($userdata->level_pendidikan == 'SMK')
                                            {
                                            echo 'SEKOLAH MENENGAH KEJURUAN';
                                            }
										else if($userdata->level_pendidikan == 'STM')
                                            {
                                            echo 'SEKOLAH TEKNIK MENENGAH';
                                            }
										else if($userdata->level_pendidikan == 'D1')
                                            {
                                            echo 'DIPLOMA 1';
                                            }
										else if($userdata->level_pendidikan == 'D2')
                                            {
                                            echo 'DIPLOMA 2';
                                            }
										else if($userdata->level_pendidikan == 'D3')
                                            {
                                            echo 'DIPLOMA 3';
                                            }
										else if($userdata->level_pendidikan == 'S1')
                                            {
                                            echo 'STRATA 1';
                                            }
										else if($userdata->level_pendidikan == 'S2')
                                            {
                                            echo 'MAGISTER';
                                            }
										else if($userdata->level_pendidikan == 'S3')
                                            {
                                            echo 'DOKTOR';
                                            }											
                                        else
                                            {
                                            echo 'Ini Wajib Di isi.';
                                            }
                                    ?>
                                    </td>
                                    <td><?php echo $userdata->penyelenggara_pendidikan;?></td>
                                    <td><?php echo $userdata->jurusan;?></td>
                                    
                                </tr>
                                
                                </tbody>
                            </table>
                                    </div>
								</div>
								
																
							</div>
							
                            <!-- posisi tengah -->
                            <!-- <a class="btn btn-primary pull-right" href="<?php echo base_url()."profile/edit";?>"> Edit Profil</a> -->
                            <div class="hr-line-dashed"></div>
                            
							<!-- tombol -->
                        </div>
                    </div>

                </div>
            </div>
        </div>



		<!-- modal form -->
		<div class="modal inmodal" id="myModal2" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content animated fadeIn">
<form action="<?php echo base_url()."profile/save";?>" method="post"  enctype="multipart/form-data">										
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <small>File Pendukung.</small>
                                        </div>
                                        <div class="modal-body">
                                        <input type="hidden" name="no_ktp" value="<?php echo @if_empty($user->NO_KTP, "");?>" class="form-control" maxlength="16">
						<div class="form-group"><label>Jenis</label>
                        <select name="tipeberkas" class="form-control">
						
                        <?php 
                            $_tipe_revisi = mdl_opt('bb_opt_user_tipe_file');
                            echo gen_option_html($_tipe_revisi, @if_empty($data->tipeberkas));
                        ?>
                     	</select> 
						</div>



<div class="form-group"><label>File Pendukung</label>

<div class="fileinput fileinput-new input-group" data-provides="fileinput">
<div class="form-control" data-trigger="fileinput">
<i class="glyphicon glyphicon-file fileinput-exists"></i>
<span class="fileinput-filename"></span>
</div>
<span class="input-group-addon btn btn-default btn-file">
<span class="fileinput-new">Select file</span>
<span class="fileinput-exists">Change</span>
<input type="file" name="file">
</span>
<a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
</div>

<?php if(isset($data->path_file)) { 
$this->load->config('fileupload_c');

$rule_upload = $this->config->item('profilupload');
?><br />
<a href="<?php echo base_url().$rule_upload['upload_path'].'/'.$data->path_file;?>" class="btn btn-white"><i class="fa fa-download"> <?php echo $data->path_file;?></i> </a>
<br />
<br />
<?php } ?>

						
									</div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
									</div>
</form>									
                                </div>
							</div>
</div>
		<!-- end modal -->