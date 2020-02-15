<div class="row">
            <div class="col-lg-12">
                <div class="wrapper wrapper-content animated fadeInUp">
                    <div class="ibox">
                        <div class="ibox-content">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="m-b-md">
                                        
                                        <?php 
                                if($data->profile_picture == 'no-avatar.png'){

                                    echo '<img alt="image" class="img-rounded pull-right" width="100" height="100" src="'.base_url().'uploads/profile/'.$data->profile_picture.'" />';

                                }else{

                                    echo '<img alt="image" class="img-rounded pull-right" width="100" height="100" src="'.base_url().'uploads/files/'.$data->no_ktp."/".$data->profile_picture.'" />';

                                }
                            ?>
                                        <h2>Edit Profil</h2>
                                    </div>
                                    
                                </div>
                            </div>
                            
                            <?php   
                                echo $this->session->flashdata('success');
                            ?>
                            
                            <div class="row m-t-sm">
                                <div class="col-lg-12">
                                <div class="panel blank-panel">
                                <div class="panel-heading">
                                    <div class="panel-options">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a href="#tab-1" data-toggle="tab">User Data</a></li>
                                            <li class=""><a href="#tab-2" data-toggle="tab">User Kontrak</a></li>
                                            <!-- <li class=""><a href="#tab-3" data-toggle="tab">User Gaji</a></li> -->
                                            <li class=""><a href="#tab-3" data-toggle="tab">User Files</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="panel-body">
<!-- form -->
<form action="<?php echo base_url()."profile/admin/editdatanaker/";?>" method="post"  enctype="multipart/form-data">
<input type="hidden" name="data_id" value="<?php echo @if_empty($data->data_id, "");?>" class="form-control">
<input type="hidden" name="no_pkwt" value="<?php echo @if_empty($kontrakkerja->no_pkwt, "");?>" class="form-control">
                                <div class="tab-content">
                                    
                                <div class="tab-pane active" id="tab-1">
                                    <div class="feed-activity-list">
                                        
                                       <!-- feed -->
                                       <div class="col-sm-12">
                                           <!-- class row -->
                                       <div class="hr-line-dashed"></div>
                                        <div class="row">
										
										
                                            
                                            <div class="col-md-4">
                                                <label class="col-sm-4 control-label">NIK</label>
                                                <input type="text" name="nik" value="<?php echo @if_empty($data->nik, "");?>" class="form-control">
                                                
                                            </div>
                                            
                                            <div class="col-md-4">
                                                <label class="col-sm-4 control-label">Nama Lengkap</label>
                                                <input type="text" name="nama" value="<?php echo @if_empty($data->nama, "");?>" class="form-control">
                                                
                                            </div>
                                            
                                        </div>
										
                                        <div class="hr-line-dashed"></div>
										
										<div class="row">
										<div class="col-md-4">
                                                 <label class="col-sm-4 control-label">Usia</label>
                                                 <?php $tanggal = new DateTime($data->tanggal_lahir); $today = new DateTime('today'); $y = $today->diff($tanggal)->y; ?>
                                                 <input type="text" name="usia" value="<?php echo @if_empty($y, "$data->usia");?>" class="form-control" disabled>
                                                 <input type="hidden" name="usia" value="<?php echo @if_empty($y, "$data->usia");?>" class="form-control">
                                                
                                             </div>
                                             <div class="col-md-4">
                                                 <label class="col-sm-4 control-label">Tempat Lahir</label>
                                                 <input type="text" name="tempat_lahir" value="<?php echo @if_empty($data->tempat_lahir, "");?>" class="form-control">
                                                
												 
                                             </div>
											 <div class="col-md-4" id="data_1">
                                                 <label class="col-sm-4 control-label">Tanggal Lahir</label>
                                                 <?php
                                                        $tgllhr = $data->tanggal_lahir;
                                                        if(!$tgllhr)
                                                            {
                                                                $tgllhr = date('m/d/Y')  ;
                                                            }
                                                        else
                                                            {
                                                                $tgllhr = date('m/d/Y', strtotime($tgllhr));
                                                            }
                                                ?>
                                                 <input type="text" name="tanggal_lahir" value="<?php echo $tgllhr; ?>" class="form-control input-group date">
                                             </div>
                                             
                                         </div>
										 
										 <div class="hr-line-dashed"></div>
                                        
                                        <div class="row">
                                        <div class="col-md-4">
                                                 <label class="col-sm-4 control-label">Agama</label>
                                                 <select name="agama" class="form-control">
												 <?php 
                                                        $jemb = mdl_opt('hris_opt_agama');
                                                        echo gen_option_html($jemb, @if_empty($user->agama));
                                                  ?>
												</select>
                                             </div>
                                            <div class="col-md-4">
                                                <label class="col-sm-4 control-label">No KTP</label>
                                                <input type="text" name="no_ktp" value="<?php echo @if_empty($data->no_ktp, "");?>" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="col-sm-4 control-label">Jenis Kelamin</label>
                                                <select name="jenis_kelamin" class="form-control">
						                            <?php 
                                                        $jenkel = mdl_opt('hris_opt_jenis_kelamin');
                                                        echo gen_option_html($jenkel, @if_empty($data->jenis_kelamin));
                                                    ?>
                     	                        </select>
                                            </div>
                                            
                                        </div>
                                        <div class="hr-line-dashed"></div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-sm-4 control-label">No KK</label>
                                                <input type="text" name="no_kk" value="<?php echo @if_empty($data->no_kk, "");?>" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="col-sm-4 control-label">No NPWP</label>
                                                <input type="text" name="no_npwp" value="<?php echo @if_empty($data->no_npwp, "");?>" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                 <label class="col-sm-4 control-label">Alamat</label>
                                                 <textarea class="form-control" name="alamat" value="<?php echo @if_empty($data->alamat, "");?>"><?php echo @if_empty($data->alamat, "");?></textarea>
                                             </div>
                                            
                                        </div>
                                        <div class="hr-line-dashed"></div>
                                        <div class="row">
                                        <div class="col-md-4">
                                                 <label class="col-sm-4 control-label">Status Pernikahan</label>
                                                 <select name="status_pernikahan" class="form-control">
						                            <?php 
                                                        $maritalstatus = mdl_opt('hris_opt_marital_status');
                                                        echo gen_option_html($maritalstatus, @if_empty($data->status_pernikahan));
                                                    ?>
                                                 </select>
                                             </div>
                                            <div class="col-md-4">
                                                <label class="col-sm-4 control-label">Domisili</label>
                                                <input type="text" name="domisili" value="<?php echo @if_empty($data->domisili, "");?>" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="col-sm-4 control-label">Jumlah Anak</label>
                                                <input type="text" name="jumlah_anak" value="<?php echo @if_empty($data->jumlah_anak, "0");?>" class="form-control">
                                            </div>
                                            
                                        </div>
                                        <div class="hr-line-dashed"></div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-sm-4 control-label">Regional</label>
                                                <select name="regional" class="form-control" id="regional">
						                            <?php 
                                                        $regional_ = mdl_opt('bb_opt_regional');
                                                        echo gen_option_html($regional_, @if_empty($data->regional));
                                                    ?>
                                                 </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label class="col-sm-4 control-label">BPJS KES</label>
                                                <input type="text" name="no_bpjs_kes" value="<?php echo @if_empty($data->no_bpjs_kes, "");?>" class="form-control">
                                            </div>
											<div class="col-md-4">
                                                <label class="col-sm-4 control-label">BPJS TK</label>
                                                <input type="text" name="no_bpjs_tk" value="<?php echo @if_empty($data->no_bpjs_tk, "");?>" class="form-control">
                                            </div>
                                            
                                        </div>
                                        <div class="hr-line-dashed"></div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-sm-4 control-label">Alamat Email</label>
                                                <input type="email" name="alamat_email" value="<?php echo @if_empty($data->alamat_email, "");?>" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="col-sm-4 control-label">NO HP</label>
                                                <input type="text" name="no_hp" value="<?php echo @if_empty($data->no_hp, "");?>" class="form-control">
                                            </div>
											<div class="col-md-4">
                                                <label class="col-sm-4 control-label">Golongan Darah</label>
                                                <input type="text" name="golongan_darah" value="<?php echo @if_empty($data->golongan_darah, "");?>" class="form-control">
                                            </div>
                                            
                                        </div>
                                        <div class="hr-line-dashed"></div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-sm-4 control-label">Faskes</label>
                                                <input type="text" name="kode_faskes_i" value="<?php echo @if_empty($data->kode_faskes_i, "");?>" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="col-sm-4 control-label">Nama Bank</label>
                                                <input type="text" name="nama_bank" value="<?php echo @if_empty($data->nama_bank, "$banknumber->bank");?>" class="form-control">
                                            </div>
											<div class="col-md-4">
                                                <label class="col-sm-4 control-label">No Rekening</label>
                                                <input type="text" name="no_rekening" value="<?php echo @if_empty($data->no_rekening, "$banknumber->account_number");?>" class="form-control">
                                            </div>
                                            
                                        </div>
                                        <div class="hr-line-dashed"></div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-sm-4 control-label">Nama Ibu Kandung</label>
                                                <input type="text" name="nama_ibu_kandung" value="<?php echo @if_empty($data->nama_ibu_kandung, "");?>" class="form-control">
                                            </div>
                                            <div class="col-md-4" id="data_1">
                                                 <label class="col-sm-4 control-label">Tanggal Pendidikan</label>
                                                 <?php
                                                        $tglpend = $data->tanggal_level_pendidikan;
                                                        if(!$tglpend)
                                                            {
                                                                $tglpend = date('m/d/Y')  ;
                                                            }
                                                        else
                                                            {
                                                                $tglpend = date('m/d/Y', strtotime($tglpend));
                                                            }
                                                ?>
                                                 <input type="text" name="tanggal_level_pendidikan" value="<?php echo $tglpend; ?>" class="form-control input-group date">
                                             </div>
											<div class="col-md-4">
                                                <label class="col-sm-4 control-label">Penyelenggara</label>
                                                <input type="text" name="penyelenggara_pendidikan" value="<?php echo @if_empty($data->penyelenggara_pendidikan, "");?>" class="form-control">
                                            </div>
                                            
                                        </div>
                                        <div class="hr-line-dashed"></div>

                                        <div class="row">
                                        <div class="col-md-4">
                                                <label class="col-sm-4 control-label">Pendidikan</label>
                                                <select name="level_pendidikan" class="form-control">
												 <?php 
                                                        $jemb = mdl_opt('hris_opt_pendidikan_terakhir');
                                                        echo gen_option_html($jemb, @if_empty($data->level_pendidikan));
                                                    ?>
                                                 </select>
                                            </div>
                                        <div class="col-md-4">
                                            <label class="col-sm-4 control-label">Jurusan</label>
                                            <input type="text" name="jurusan" value="<?php echo @if_empty($data->jurusan, "");?>" class="form-control">
                                        </div>
                                        <div class="col-md-4">
                                            <label class="col-sm-4 control-label">Access Login</label>
                                            <select name="usr_access" class="form-control">
												 <?php 
                                                        $acclogin = mdl_opt('sista_opt_access_login');
                                                        echo gen_option_html($acclogin, @if_empty($data->usr_access));
                                                    ?>
                                                 </select>
                                            
                                        </div>    
                                            
                                        </div>
                                        <div class="hr-line-dashed"></div>
                                        
                                        
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
                                         <table class="footable table table-stripped" data-page-size="20" data-filter=#filter>
                                <thead>
                                <tr>

                                <th>NIK</th><th>No PKWT</th><th data-hide="phone,tablet">Regional</th><th data-hide="phone,tablet">WiTel</th>
                                <th data-hide="phone,tablet">Nama Posisi</th><th data-hide="phone,tablet">Kontrak</th><th data-hide="phone,tablet">Efektif</th>
                                <th data-hide="phone,tablet">Berakhir</th><th data-hide="phone,tablet">Kategori</th><th data-hide="phone,tablet">Status Alert</th>

                                </tr>
                                </thead>
                                <tbody>
<?php
foreach($kontrakkerja as $_){
echo "<tr>";
echo "<td>".$_->nik."</td>";
echo "<td>".$_->no_pkwt."</td>";
echo "<td>".$_->regional."</td>";
echo "<td>".$_->witel."</td>";
echo "<td>".$_->position_name."</td>";
echo "<td>".$_->kontrak_ke."</td>";
echo "<td>".tanggal_indo($_->tanggal_efektif)."</td>";
echo "<td>".tanggal_indo($_->tanggal_berakhir)."</td>";
echo "<td>".$_->kategori."</td>";
echo "<td>".$_->status_alert."</td>";
echo "</tr>";
}
?>
                                </tbody>
                                
                            </table>
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
                                         <table class="footable table table-stripped toggle-arrow-tiny" data-page-size="5">
                                <thead>
                                <tr>

                                <th>Tahun</th><th>Bulan</th><th>Total</th>

                                </tr>
                                </thead>
                                <tbody>
<?php
$_bln = json_decode(mdl_opt('bb_opt_bulan'), true);
foreach($list_gaji as $var=>$_){
echo "<tr>";
echo "<td>".$_->tahun."</td>";
echo "<td>".$_bln[$_->bulan]."</td>";
echo "<td>".number_format((int)$_->total)."</td>";
echo "</tr>";
}
?>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="5">
                                        <ul class="pagination pull-right"></ul>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>
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
                                        <table class="footable table table-stripped" data-page-size="20" data-filter=#filter>
                                <thead>
                                <tr>

                                <th>NIK</th><th>Tipe Berkas</th><th data-hide="phone,tablet">KTP Folder</th><th data-hide="phone,tablet">Nama File</th>

                                </tr>
                                </thead>
                                <tbody>
<?php
foreach($userfilesview as $_){
echo "<tr>";
echo "<td>".$_->nik."</td>";
echo "<td>".$_->tipeberkas."</td>";
echo "<td>".$_->folder_name."</td>";
echo "<td><a href=".base_url()."uploads/files/".$_->folder_name."/".$_->path_file." target='_blank'>".$_->path_file."</a></td>";
echo "</tr>";
}
?>
                                </tbody>
                                
                            </table>
                                         <div class="hr-line-dashed"></div>
                                         <!-- class row -->
                                     </div>
                                         <!-- activity -->
                                       
                                     </div>

                                </div>
                                <!-- end tabs -->
                                </div>

<div>
<a href="<?php echo base_url()."profile";?>" class="btn btn-white btn-xs pull-left">Cancel</a>
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
