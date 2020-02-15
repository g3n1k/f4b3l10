<div class="row">
            <div class="col-lg-12">
                <div class="wrapper wrapper-content animated fadeInUp">
                    <div class="ibox">
                        <div class="ibox-content">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="m-b-md">
                                        <a href="<?php echo base_url()."profile";?>" class="btn btn-white btn-xs pull-right">Cancel</a>
                                        <h2>Edit Profil</h2>
                                    </div>
                                    
                                </div>
                            </div>
                            
                            
                            <div class="row m-t-sm">
                                <div class="col-lg-12">
                                <div class="panel blank-panel">
                                <div class="panel-heading">
                                    <div class="panel-options">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a href="#tab-1" data-toggle="tab"><span class="text-muted">Data Personal</span></a></li>
                                            <li class=""><a href="#tab-2" data-toggle="tab"><span class="text-muted">Extra Data</span></a></li>
                                            <li class=""><a href="#tab-3" data-toggle="tab"><span class="text-muted">Privacy Data</span></a></li>
                                            <!-- <li class=""><a href="#tab-4" data-toggle="tab">Password Data</a></li> -->
                                        </ul>
                                    </div>
                                </div>

                                <div class="panel-body">
<!-- form -->
<form action="<?php echo base_url()."profile/change_profile";?>" method="post"  enctype="multipart/form-data">
                                <div class="tab-content">
                                    
                                <div class="tab-pane active" id="tab-1">
                                    <div class="feed-activity-list">
                                        
                                       <!-- feed -->
                                       <div class="col-sm-12">
                                           <!-- class row -->
                                       <div class="hr-line-dashed"></div>
                                        <div class="row">
										
										<div class="col-md-4">
                                                <label class="col-sm-4 control-label">Nama Lengkap</label>
                                                <input type="text" name="nama" value="<?php echo @if_empty($user->nama, "");?>" class="form-control" disabled>
                                                <input type="hidden" name="nama" value="<?php echo @if_empty($user->nama, "");?>" class="form-control">
                                            </div>
                                            
                                            <div class="col-md-4">
                                                <label class="col-sm-4 control-label">NIK</label>
                                                <input type="text" name="nik" value="<?php echo @if_empty($user->nik, "");?>" class="form-control" disabled>
                                                <input type="hidden" name="nik" value="<?php echo @if_empty($user->nik, "");?>" class="form-control">
                                            </div>
                                            
                                            <div class="col-md-4">
                                                <label class="col-sm-4 control-label">No KTP</label>
                                                <input type="text" name="no_ktp" value="<?php echo @if_empty($user->no_ktp, "");?>" class="form-control" disabled>
                                                <input type="hidden" name="no_ktp" value="<?php echo @if_empty($user->no_ktp, "");?>" class="form-control">
                                            </div>
                                            
                                        </div>
										
                                        <div class="hr-line-dashed"></div>
										
										<div class="row">
										<div class="col-md-4">
                                                 <label class="col-sm-4 control-label">Posisi Kerja</label>
												 <input type="text" name="position_name" value="<?php echo @if_empty($kontrakkerja->position_name, "");?>" class="form-control" disabled>
                                                <!-- <input type="hidden" name="position_name" value="<?php echo @if_empty($kontrakkerja->position_name, "");?>" class="form-control"> -->
                                             </div>
                                             <div class="col-md-4">
                                                 <label class="col-sm-4 control-label">Unit Kerja</label>
                                                 <input type="text" name="sub_unit" value="<?php echo @if_empty($kontrakkerja->unit, "");?>" class="form-control" disabled>
                                                <!-- <input type="hidden" name="sub_unit" value="<?php echo @if_empty($kontrakkerja->unit, "");?>" class="form-control"> -->
												 
                                             </div>
											 <div class="col-md-4">
                                                 <label class="col-sm-4 control-label">REGIONAL</label>
                                                 <input type="text" name="regional" value="<?php echo @if_empty($user->regional, "");?>" class="form-control" disabled>
                                                <input type="hidden" name="regional" value="<?php echo @if_empty($user->regional, "");?>" class="form-control">
												</div>
                                             <div class="col-md-4">
                                                 <label class="col-sm-4 control-label">ID</label>
                                                 <input type="text" name="id_psa" value="<?php echo @if_empty($kontrakkerja->nama_psa, "");?>" class="form-control" disabled>
                                                <!-- <input type="hidden" name="id_psa" value="<?php echo @if_empty($kontrakkerja->nama_psa, "");?>" class="form-control"> -->
												</div>
                                             
                                             
                                         </div>
										 
										 <div class="hr-line-dashed"></div>
                                        
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-sm-4 control-label">Handphone</label>
                                                <input type="text" name="no_gsm" value="<?php echo @if_empty($user->no_hp, "");?>" class="form-control" disabled>
                                                <input type="hidden" name="no_gsm" value="<?php echo @if_empty($user->no_hp, "");?>" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="col-sm-4 control-label">Email</label>
                                                <input type="email" name="email_addres" value="<?php echo @if_empty($user->alamat_email, "$emailaddress->USR_EMAIL");?>" class="form-control" disabled>
                                                <input type="hidden" name="email_addres" value="<?php echo @if_empty($user->alamat_email, "$emailaddress->USR_EMAIL");?>" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="col-sm-4 control-label">Jenis Kelamin</label>
                                                <select name="jenis_kelamin" class="form-control">
						                            <?php 
                                                        $jenkel = mdl_opt('hris_opt_jenis_kelamin');
                                                        echo gen_option_html($jenkel, @if_empty($user->jenis_kelamin));
                                                    ?>
                     	                        </select>
                                            </div>
                                            
                                        </div>
                                        <div class="hr-line-dashed"></div>
                                        
                                        <div class="row">
                                            <div class="col-md-4">
                                            &nbsp; &nbsp; <label class="control-label">Foto</label>
                                            
                                            
<div class="fileinput fileinput-new input-group" data-provides="fileinput">
<div class="form-control form-control-upload" data-trigger="fileinput">
<i class="fa fa-image"></i>
<span class="fileinput-filename"></span>
</div>
<span class="input-group-addon btn btn-default btn-file">
<span class="fileinput-new">Select file</span>
<span class="fileinput-exists">Change</span>
<input type="file" name="picture" id="picture">
</span>
<a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
</div><span>max size 500kb</span>

                                            </div>
                                            
                                        </div>
                                        <!-- class row -->
                                    </div>
                                        <!-- activity -->
                                      
                                    </div>

                                </div>
                                <div class="tab-pane" id="tab-2">

                                <div class="feed-activity-list">
                                        
                                        <!-- feed -->
                                        <div class="col-sm-12">
                                            <!-- class row -->
                                            <div class="hr-line-dashed"></div>
											
											 <div class="row">
                                             <div class="col-md-4">
                                                <label class="col-sm-4 control-label">Pendidikan Akhir</label>
                                                 <select name="lvl_pendidikan" class="form-control">
												 <?php 
                                                        $jemb = mdl_opt('hris_opt_pendidikan_terakhir');
                                                        echo gen_option_html($jemb, @if_empty($user->level_pendidikan));
                                                    ?>
                                                 </select>
                                             </div>
                                             <div class="col-md-4">
                                                 <label class="col-sm-4 control-label">Tempat Pendidikan</label>
                                                 <input type="text" name="penyelenggara_pendidikan" value="<?php echo @if_empty($user->penyelenggara_pendidikan, "");?>" class="form-control" disabled>
                                                 <input type="hidden" name="penyelenggara_pendidikan" value="<?php echo @if_empty($user->penyelenggara_pendidikan, "");?>" class="form-control">
                                             </div>
                                             <div class="col-md-4">
                                                 <label class="col-sm-4 control-label">Jurusan</label>
                                                 <input type="text" name="jurusan" value="<?php echo @if_empty($user->jurusan, "");?>" class="form-control" disabled>
                                                 <input type="hidden" name="jurusan" value="<?php echo @if_empty($user->jurusan, "");?>" class="form-control">
                                             </div>
                                             
                                         </div>
										 
										 <div class="hr-line-dashed"></div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-sm-4 control-label">NPWP</label>
                                                <input type="text" name="no_npwp" value="<?php echo @if_empty($user->no_npwp, "");?>" class="form-control" disabled>
                                                <input type="hidden" name="no_npwp" value="<?php echo @if_empty($user->no_npwp, "");?>" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="col-sm-4 control-label">Kartu Keluarga</label>
                                                <input type="text" name="no_kk" value="<?php echo @if_empty($user->no_kk, "");?>" class="form-control" disabled>
                                                <input type="hidden" name="no_kk" value="<?php echo @if_empty($user->no_kk, "");?>" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="col-sm-4 control-label">BPJS Kesehatan</label>
                                                <input type="text" name="no_bpjs_kes" value="<?php echo @if_empty($user->no_bpjs_kes, "");?>" class="form-control" disabled>
                                                <input type="hidden" name="no_bpjs_kes" value="<?php echo @if_empty($user->no_bpjs_kes, "");?>" class="form-control">
                                            </div>
											<div class="col-md-4">
                                                <label class="col-sm-4 control-label">BPJS Ketenagakerjaan</label>
                                                <input type="text" name="no_jamsostek" value="<?php echo @if_empty($user->no_bpjs_tk, "");?>" class="form-control" disabled>
                                                <input type="hidden" name="no_jamsostek" value="<?php echo @if_empty($user->no_bpjs_tk, "");?>" class="form-control">
                                            </div>
                                            
                                        </div>
                                        <div class="hr-line-dashed"></div>
                                         
                                        
                                         <div class="hr-line-dashed"></div>
                                         <div class="row">
                                             <div class="col-md-4">
                                                 <label class="col-sm-4 control-label">Nama Bank</label>
                                                 <input type="text" name="nama_bank" value="<?php echo @if_empty($user->nama_bank, "");?>" class="form-control" disabled>
                                                 <input type="hidden" name="nama_bank" value="<?php echo @if_empty($user->nama_bank, "");?>" class="form-control">
                                             </div>
                                             <div class="col-md-4">
                                                 <label class="col-sm-4 control-label">Nomor Rekening</label>
                                                 <input type="text" name="no_rekening" value="<?php echo @if_empty($user->no_rekening, "");?>" class="form-control" disabled>
                                                 <input type="hidden" name="no_rekening" value="<?php echo @if_empty($user->no_rekening, "");?>" class="form-control">
                                             </div>
                                             
                                         </div>
                                         <!-- class row -->
                                     </div>
                                         <!-- activity -->
                                       
                                     </div>

                                </div>
                                <div class="tab-pane" id="tab-3">

                                <div class="feed-activity-list">
                                        
                                        <!-- feed -->
                                        <div class="col-sm-12">
                                            <!-- class row -->
                                        <div class="hr-line-dashed"></div>
                                         <div class="row">
                                             <div class="col-md-4">
                                                 <label class="col-sm-4 control-label">Tempat Lahir</label>
                                                 <input type="text" name="kota_lahir" value="<?php echo @if_empty($user->tempat_lahir, "");?>" class="form-control" disabled>
                                                 <input type="hidden" name="kota_lahir" value="<?php echo @if_empty($user->tempat_lahir, "");?>" class="form-control">
                                             </div>
                                             <div class="col-md-4" id="data_1">
                                                 <label class="col-sm-4 control-label">Tanggal Lahir</label>
                                                 <?php
                                                        $tgllhr = $user->tanggal_lahir;
                                                        if($tgllhr == '0000-00-00')
                                                            {
                                                                $tgllhr = date('m/d/Y')  ;
                                                            }
                                                        else
                                                            {
                                                                $tgllhr = date('m/d/Y', strtotime($tgllhr));
                                                            }
                                                ?>
                                                 <input type="text" name="tgl_lahir" value="<?php echo $tgllhr; ?>" class="form-control input-group date">
                                             </div>
                                             <div class="col-md-4">
                                                 <label class="col-sm-4 control-label">Agama</label>
                                                 <select name="agama" class="form-control">
												 <?php 
                                                        $jemb = mdl_opt('hris_opt_agama');
                                                        echo gen_option_html($jemb, @if_empty($user->agama));
                                                  ?>
												</select>
                                             </div>
                                             
                                         </div>
                                         
                                         <div class="hr-line-dashed"></div>
                                         <div class="row">
                                             <div class="col-md-4">
                                                 <label class="col-sm-4 control-label">Marital Status</label>
                                                 <select name="susunan_keluarga" class="form-control">
						                            <?php 
                                                        $maritalstatus = mdl_opt('hris_opt_marital_status');
                                                        echo gen_option_html($maritalstatus, @if_empty($user->status_pernikahan));
                                                    ?>
                                                 </select>
                                             </div>
                                             <div class="col-md-4">
                                                 <label class="col-sm-4 control-label">Jumlah Anak</label>
                                                 <input type="text" name="jumlah_anak" value="<?php echo @if_empty($user->jumlah_anak, "0");?>" class="form-control" disabled>
                                                 <input type="hidden" name="jumlah_anak" value="<?php echo @if_empty($user->jumlah_anak, "0");?>" class="form-control">
                                             </div>
                                             <div class="col-md-4">
                                                 <label class="col-sm-4 control-label">Alamat Rumah</label>
                                                 <textarea class="form-control" name="jalan" value="<?php echo @if_empty($user->alamat, "");?>"><?php echo @if_empty($user->alamat, "");?></textarea>
                                             </div>
                                             
                                         </div>
                                         
                                         <!-- class row -->
                                     </div>
                                         <!-- activity -->
                                       
                                     </div>

                                </div>

                                <div class="tab-pane" id="tab-4">

                                <div class="feed-activity-list">
                                        
                                        <!-- feed -->
                                        <div class="col-sm-12">
                                            <!-- class row -->
                                        <div class="hr-line-dashed"></div>
                                         <div class="row">
                                             <div class="col-md-4">
                                                 <label class="col-sm-4 control-label">Belum Tersedia</label>
                                             </div>
                                             
                                         </div>
                                         <div class="hr-line-dashed"></div>
                                         <!-- class row -->
                                     </div>
                                         <!-- activity -->
                                       
                                     </div>

                                </div>
                                <!-- end tabs -->
                                </div>

<div class="ibox-content">

<button class="btn btn-primary pull-right" data-toggle="modal" type="submit"> Simpan Perubahan</button>

</div>
</form>
<!-- form -->
                                </div>

                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
