<div class="wrapper wrapper-content">
	<div class="row animated fadeInRight">
	<!-- kotak kanan -->
		<div class="wrapper wrapper-content animated fadeInRight">
			<div class="row">			
					<div class="col-lg-3">               
							<div class="form-group"> 
								<input type='hidden' value='<?php echo $tgl_absen_reg;?>' id='inp_tanggal'/>
								<input type='hidden' value='<?php echo $tgl_absen_kel;?>' id='inp_tanggalkel'/>
								<input type='hidden' value='<?php echo $tgl_absen_h;?>' id='inp_tanggalabsenh'/>                       
								<select name="reg" id="inp_regional" class="form-control">
									<?php foreach($slc_regional as $_val) echo "<option value='".$_val."'>".$_val."</option>"; ?>
								</select>								
							</div>
					</div> 
			</div>
			<div class="row">           
				<!--<div class="col-lg-3">
					<div class="widget style1 yellow-bg">
						<div class="row">
							<div class="col-xs-4">
								<i class="fa fa-globe fa-3x"></i>
							</div>
							<div class="col-xs-8 text-right">
								<span> Regional </span>
								<h3 id='reg' class="font-bold"></h3>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="widget style1 yellow-bg">
						<div class="row">
							<div class="col-xs-4">
								<i class="fa fa-building fa-3x"></i>								
							</div>
							<div class="col-xs-8 text-right">
								<span>Kantor PSA</span>
								<h3 id='jumpsa' class="font-bold"></h3>								
							</div>
						</div>
					</div>
				</div>-->
				<div class="col-lg-6">
					<div class="widget style1 navy-bg">
						<div class="row">
							<div class="col-xs-4">															
								<a href="<?php echo base_url(); ?>dashboard/kryaktif/<?php //echo $slc_regional['0']; ?>"><i class="fa fa-users fa-3x" data-toggle="tooltip" data-placement="top" title="Klik Detail"></i></a>
							</div>
							<div class="col-xs-8 text-right">
								<span> Karyawan Aktif </span>
								<h3 id='aktifkontrak' class="font-bold"></h3>
							</div>
						</div>
					</div>
				</div>
				<!--<div class="col-lg-3">
					<div class="widget style1 lazur-bg">
						<div class="row">
							<div class="col-xs-4">
							<a href="<?php //echo base_url(); ?>dashboard/kehadiran/<?php //echo $slc_regional['0']; ?>"><i class="fa fa-id-badge fa-3x" data-toggle="tooltip" data-placement="top" title="Klik Detail"></i></a>
								
							</div>
							<div class="col-xs-8 text-right">
								<span>Kehadiran %</span>
								<h3 id='kehadiran' class="font-bold"></h3>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="widget style1 blue-bg">
						<div class="row">
							<div class="col-xs-4">
								
								<a href="<?php echo base_url(); ?>dashboard/kontrak/<?php //echo $slc_regional['0']; ?>"><i class="fa fa-clipboard fa-3x" data-toggle="tooltip" data-placement="top" title="Klik Detail"></i></a>
							</div>
							<div class="col-xs-8 text-right">
								<span> Habis Kontrak 60 Hari </span>
								<h3 id='kontrak' class="font-bold"></h3>
							</div>
						</div>
					</div>
				</div>-->
				<div class="col-lg-6">
					<div class="widget style1 navy-bg">
						<div class="row">
							<div class="col-xs-4">								
								<a href="<?php echo base_url(); ?>dashboard/register/<?php //echo $slc_regional['0']; ?>"><i class="fa fa-clipboard fa-3x" data-toggle="tooltip" data-placement="top" title="Klik Detail"></i></a>
							</div>
							<div class="col-xs-8 text-right">
								<span> Registered </span>
								<h3 id='regis' class="font-bold"></h3>
							</div>
						</div>
					</div>
				</div>						
			</div>
			
			<div class="row">
				<div class="col-lg-6">
						<div class="ibox float-e-margins">
							<div class="ibox-title">                  
								<a href=""><h5>Daily, <?php echo date('d F Y', strtotime($tgl_absen_reg))?></h5></a>						
							</div>                                                                            
								<div style="" id="absensiDailyPie"></div>                                                 
						</div>
				</div>
				<div class="col-lg-6">
					<div class="ibox float-e-margins">
						<div class="ibox-title">                  
							<a href=""><h5>Daily, <?php echo date('d F Y', strtotime($tgl_absen_reg))?></h5></a>
						</div>							                                  
						 <div style="margin-left:-30px; height:200%; width:80%; position:absolute;" id="flot-pie-chart"></div>
						<div style="" id="genderReg"></div>                       
					</div>
				</div>			
				<!--<div class="col-lg-4">
					<div class="ibox float-e-margins">
						<div class="ibox-title">                  
							<a href=""><h5>Daily, <?php echo date('d F Y', strtotime($tanggal))?></h5></a>
						</div>                                                     
						<div style="" id="pendidikanReg"></div>                         
					</div>
				</div>-->
				<div class="col-lg-12">
					<div class="ibox float-e-margins">
						<div class="ibox-title">                  
							<a href=""><h5>Daily, <?php echo date('d F Y', strtotime($tgl_absen_reg))?></h5></a>
						</div>                                                     
						<div style="" id="keluargaReg"></div>                         						
					</div>				
				</div>
				<!--<div class="col-lg-4">
					<div class="ibox float-e-margins">
						<div class="ibox-title">                  
							<a href=""><h5>Daily, <?php echo date('d F Y', strtotime($tanggal))?></h5></a>
						</div>                                                                           
							<div style="" id="kemitraanReg"></div>                         
					</div>
				</div>-->
				<div class="col-lg-12">
					<div class="ibox float-e-margins">
						<div class="ibox-title">                  
						Absensi hourly
						</div>                                                                           
							<div style="" id="perf_hourly"></div>                         
					</div>
				</div>
				<!--<div class="col-lg-12">
					<div class="ibox float-e-margins">
						<div class="ibox-title">                  
						All Region
						</div>                                                                           
							<div style="" id="absensi"></div>                         
					</div>
				</div>
				<div class="col-lg-12">
					<div class="ibox float-e-margins">
						<div class="ibox-title">                  
						Habis Kontrak
						</div>                                                                           
							<div style="" id="kontrak_allreg"></div>                         
					</div>
				</div>
				<div class="col-lg-12">
					<div class="ibox float-e-margins">
						<div class="ibox-title">                  
						Budget
						</div>                                                                           
							<div style="" id="cart_budget"></div>                         
					</div>
				</div>-->
			</div>
			
				
			
				<!--<div class="row">					
					<div class="col-lg-12">
						<div class="ibox float-e-margins">
							<div class="ibox-title">                  
								<a href=""><h5>Daily, <?php echo date('d F Y', strtotime($tanggal))?></h5></a>						
							</div>                                                                            
							<div style="" id="direktoratReg"></div>                                                 
						</div>
					</div>
				</div>-->				
			 
		<!-- kotak kanan -->	                    
	</div>					
</div>




