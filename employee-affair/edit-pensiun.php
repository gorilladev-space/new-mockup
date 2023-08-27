<?php require '../layouts/head.php' ?>
<?php require 'layouts/header.php' ?>


      <!-- begin:: Content Head -->
						<div class="kt-subheader   kt-grid__item" id="kt_subheader">
							<div class="kt-container  kt-container--fluid ">
								<div class="kt-subheader__main">
									<h3 class="kt-subheader__title">
										<span class="kt-portlet__head-icon">
											<i class="kt-font-brand flaticon2-list-1"></i>
										</span>
										&nbsp;
										&nbsp;
											Edit Pegawai Pensiun
									</h3>

								</div>
								<div class="kt-subheader__toolbar">
									<div class="dropdown dropdown-inline" data-placement="left">
											<a href="pegawai-resign.php" class="btn btn-label btn-sm" data-toggle="dropdown" onclick="goBack()">
												<i class="flaticon-reply"></i> Kembali
                        <script>
function goBack() {
  window.history.back();
}
</script>
											</a>
										</div>
								</div>
							</div>
						</div>

						<!-- end:: Content Head -->

						<!-- begin:: Content -->
						<!-- begin:: Content -->

						<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
<div class="alert alert-elevate alert-solid-warning alert-bold" role="alert">
														<div class="alert-icon"><i class="fa fa-info-circle"></i></div>
														<div class="alert-text">A simple primary alert—check it out!</div>
														<div class="alert-close">
															<button type="button" class="close" data-dismiss="alert" aria-label="Close">
																<span aria-hidden="true"><i class="la la-close"></i></span>
															</button>
														</div>
														</div>
							<!--begin:: Portlet-->
              <div class="row">
              <div class="col-lg-12">
                <div class="kt-portlet kt-portlet--height-fluid-full" id="kt_page_portlet">

                    <div class="kt-portlet__body">
                      <div class="row">
					<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
							<div class="kt-wizard-v4" id="kt_wizard_v4" data-ktwizard-state="step-first">

								<!--begin: Form Wizard Nav -->
								<div class="kt-wizard-v4__nav">
									<div class="kt-wizard-v4__nav-items">

										<!--doc: Replace A tag with SPAN tag to disable the step link click -->
										<div class="kt-wizard-v4__nav-item" data-ktwizard-type="step" data-ktwizard-state="current">
											<div class="kt-wizard-v4__nav-body">
												<div class="kt-wizard-v4__nav-icon">
													<i class="flaticon2-checking"></i>
												</div>
												<div class="kt-wizard-v4__nav-label">
													<div class="kt-wizard-v4__nav-label-title">
														Form Pensiun
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														Isikan Detail Pensiun
													</div>
												</div>
													<div class="kt-wizard-v4__nav-number kt-block-center">
														1
													</div>
											</div>
										</div>
<div class="kt-wizard-v4__nav-item" data-ktwizard-type="step">
											<div class="kt-wizard-v4__nav-body">
												<div class="kt-wizard-v4__nav-icon">
													<i class="flaticon2-calendar-1"></i>
												</div>
												<div class="kt-wizard-v4__nav-label">
													<div class="kt-wizard-v4__nav-label-title">
														Atribut
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														SK Pensiun
													</div>
												</div>
												<div class="kt-wizard-v4__nav-number kt-block-center">
													2
												</div>
											</div>
										</div>
										<div class="kt-wizard-v4__nav-item" data-ktwizard-type="step">
											<div class="kt-wizard-v4__nav-body">
												<div class="kt-wizard-v4__nav-icon">
													<i class="flaticon2-calendar-1"></i>
												</div>
												<div class="kt-wizard-v4__nav-label">
													<div class="kt-wizard-v4__nav-label-title">
														Preview
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														SK Pensiun
													</div>
												</div>
												<div class="kt-wizard-v4__nav-number kt-block-center">
													3
												</div>
											</div>
										</div>
										<!--<div class="kt-wizard-v4__nav-item" data-ktwizard-type="step">
											<div class="kt-wizard-v4__nav-body">
												<div class="kt-wizard-v4__nav-icon">
													<i class="flaticon-notepad"></i>
												</div>
												<div class="kt-wizard-v4__nav-label">
													<div class="kt-wizard-v4__nav-label-title">
														Data Kasbon
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														Data Kasbon Pegawai
													</div>
												</div>
												<div class="kt-wizard-v4__nav-number kt-block-center">
													4
												</div>
											</div>
										</div>-->
										<!--<div class="kt-wizard-v4__nav-item" data-ktwizard-type="step">
											<div class="kt-wizard-v4__nav-body">
												<div class="kt-wizard-v4__nav-icon">
													<i class="flaticon2-box-1"></i>
												</div>
												<div class="kt-wizard-v4__nav-label">
													<div class="kt-wizard-v4__nav-label-title">
														Inventaris Kantor
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														Peralatan Pada Pegawai
													</div>
												</div>
												<div class="kt-wizard-v4__nav-number kt-block-center">
													5
												</div>
											</div>
										</div>-->


									</div>
								</div>

								<!--end: Form Wizard Nav -->
								<div class="kt-portlet">
									<div class="kt-portlet__body kt-portlet__body--fit">
										<div class="kt-grid">
											<div class="kt-grid__item kt-grid__item--fluid kt-wizard-v4__wrapper">

												<!--begin: Form Wizard Form-->
												<form class="kt-form" id="kt_form">

													<!--begin: Form Wizard Step 1-->
													<div class="kt-wizard-v4__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
														<div class="kt-form__section kt-form__section--first">

											<div class="row">
								<div class="col-xl-7">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Pensiun</div>
										 <div class="kt-portlet__body">
                      <div class="form-group row">
                       <div class="col-lg-4">
                          <label>Nama Pegawai Pensiun :</label>
						  <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Ir. Asrarudin Mamonto, MM">
                          
                        </div>
<div class="col-lg-2">
                          <label class="">NIP :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="000 000 000">
                      </div>
                        </div>
<div class="col-lg-2">
                          <label>Kantor :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pusat">
                        </div>
<div class="col-lg-4">
                          <label>Pangkat / Golongan :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Staf Muda / C.1">
                        </div>

                        
                        </div>
						 <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
                       <div class="col-lg-4">
                          <label>Department :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Electrical Egineer Supervisor Assistant">
                        </div>
<div class="col-lg-4">
                          <label>Bagian :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Electrical Egineer Supervisor Assistant">
                        </div>

                        <div class="col-lg-4">
                          <label class="">Jabatan :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Development">
                      </div>
                        </div>
                        </div>
<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-4">
                          <label>Ditetapkan di :</label>
                       <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Makassar">
                        </div>
						<div class="col-lg-4">
                          <label class="">Tanggal SK Pensiun :</label>
                          <div class="form-group">
                         <div class="input-group date">
													<input type="text" class="form-control form-control-sm" readonly="" placeholder="= Pilih Tanggal =" id="kt_datepicker_2">
													<div class="input-group-append">
														<span class="input-group-text">
															<i class="la la-calendar-check-o"></i>
														</span>
													</div>
												</div>
                      </div>
                        </div>
						<div class="col-lg-4">
                          <label class="">Tanggal Efektif Pensiun :</label>
                          <div class="form-group">
                         <div class="input-group date">
													<input type="text" class="form-control form-control-sm" readonly="" placeholder="= Pilih Tanggal =" id="kt_datepicker_2">
													<div class="input-group-append">
														<span class="input-group-text">
															<i class="la la-calendar-check-o"></i>
														</span>
													</div>
												</div>
                      </div>
                        </div>
                      </div>
						 <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-12">
                          <label>Keterangan Pensiun :</label>
                       <input type="text" class="form-control form-control-sm" placeholder="Isikan Keterangan Pensiun">
                        </div>
						
						
                      </div>

                      </div>
                    </div>
							<!--end:: Portlet-->


										</div>
<div class="col-xl-5">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Pejabat Pembuat SK</div><br>
										 <div class="kt-portlet__body">
                      <div class="form-group row">
                       <div class="col-lg-7">
                          <label>Nama Pegawai :</label>
						 <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Sri Suhartini, SE">

                        </div>
						<div class="col-lg-5">
                          <label>NIP :</label>
						 <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="238 004 032">
                        </div>
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						<div class="col-lg-7">
                          <label class="">Department :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pengembangan Usaha dan Kerjasama">
                        </div>
						<div class="col-lg-5">
                          <label class="">Bagian :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Umum dan Kepegawaian">
                        </div>
                        </div>
<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						<div class="col-lg-7">
                          <label class="">Jabatan :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Staff Administrasi Kepegawaian">
                        </div>
						<div class="col-lg-5">
                          <label class="">Pangkat / Golongan :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Staf Muda / C.1">
                        </div>
						

                        </div>
						
						
                    </div>
					  
                    </div>
							<!--end:: Portlet-->


										</div>
										
										



								</div>
														</div>
													</div>

													<!--end: Form Wizard Step 1-->

													<!--begin: Form Wizard Step 2-->
													<div class="kt-wizard-v4__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
														<div class="kt-form__section kt-form__section--first">

											<div class="row">
								
									
										 <div class="col-xl-4">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-half kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Menimbang</div><br>
										 <div class="kt-portlet__body">
                      <div class="form-group row">
                       <div class="col-lg-12">
                         
						  <div id="kt_repeater_3">
												<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_repeater_5">
																								<thead>
																								<tr style="text-align:center">
																								  <td width="1%" bgcolor="#f7fcff">No</td>
																								  <td width="800px" bgcolor="#f7fcff">Uraian</td>
																								   <td width="10px" bgcolor="#f7fcff" style="text-align:center">Aksi</td>
																								  </tr>
																								<thead>
																									<tbody data-repeater-list="">
																								<tr data-repeater-item>
																								  <td style="text-align:center">1</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="5" placeholder="bahwa pegawai perusahaan yang telah memasuki masa usia pensiun akan diberhentikan dengan hormat sebagai pegawai perusahaan berdasarkan Peraturan Perundang-Undangan yang berlaku."></textarea></td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
                                                                                                    
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">2</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="5" placeholder="bahwa untuk maksud huruf (a) diatas, perlu ditetapkan dengan Keputusan Direksi Perusahaan Umum Daerah Parkir Makassar Raya Kota Makassar."></textarea></td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
                                                                                                    
																								</tr>
																							</tbody>
																							<tfoot>
																								<tr>
																									<td colspan="6">
																										<button type="button" class="btn btn-success btn-sm float-right" href="javascript:;" data-repeater-create=""> <i class="fa fa-plus"></i> Tambah Data</button>
																									</td>
																								</tr>
																							</tfoot>
																						</table>
                                          </div>
                                          </div>
                                          </div>
                                          </div>
                                          </div>
<div class="kt-portlet kt-portlet--height-half kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Tembusan Surat</div><br>
										 <div class="kt-portlet__body">
                      <div class="form-group row">
                       <div id="kt_repeater_2">
												<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_repeater_3">
																								<thead>
																								<tr style="text-align:center">
																								  <td width="10px" bgcolor="#f7fcff">No</td>
																								  <td width="700px" bgcolor="#f7fcff">Tembusan Surat</td>
																								  <td width="50px" bgcolor="#f7fcff" style="text-align:center">Aksi</td>
																								  </tr>
																								<thead>
																									<tbody data-repeater-list="">
																								<tr data-repeater-item>
																								  <td style="text-align:center">1</td>
																									<td style="text-align:left"><select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="AK" >Dewan  Pengawas PERUMDA. Parkir Makassar Raya</option>
                              <option value="HI">Kabag. Pengelolaan PERUMDA. Parkir Makassar Raya</option>
                            </select></td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
                                                                                                    
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">2</td>
																									<td style="text-align:left"><select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="AK">Dewan  Pengawas PERUMDA. Parkir Makassar Raya</option>
                              <option value="HI" "select">Kabag. Pengelolaan PERUMDA. Parkir Makassar Raya</option>
                            </select></td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
                                                                                                    
																								</tr>
<tr data-repeater-item>
																								  <td style="text-align:center">3</td>
																									<td style="text-align:left"><select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="AK">Dewan  Pengawas PERUMDA. Parkir Makassar Raya</option>
                              <option value="HI">Kabag. Pengelolaan PERUMDA. Parkir Makassar Raya</option>
                              <option value="SU" "selected">Pertinggal</option>
                            </select></td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
                                                                                                    
																								</tr>
																							</tbody>
																							<tfoot>
																								<tr>
																									<td colspan="6">
																										<button type="button" class="btn btn-success btn-sm float-right" href="javascript:;" data-repeater-create=""> <i class="fa fa-plus"></i> Tambah Data</button>
																									</td>
																								</tr>
																							</tfoot>
																						</table>
                                          </div>
													
									
						
						
												
												</div>
									</div>
									
                      </div>

							<!--end:: Portlet-->
										</div>		
										
<div class="col-xl-4">
									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-half kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Menetapkan</div>
										 <div class="kt-portlet__body">
                      <div class="form-group row">
                       <div class="col-lg-12">
                          <label></label>
						  <div id="kt_repeater_3">
												<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_repeater_5">
																								<thead>
																								<tr style="text-align:center">
																								  <td width="1%" bgcolor="#f7fcff">#</td>
																								  <td width="800px" bgcolor="#f7fcff">Uraian</td>
																								   <td width="10px" bgcolor="#f7fcff" style="text-align:center">Aksi</td>
																								  </tr>
																								<thead>
																									<tbody data-repeater-list="">
																								<tr data-repeater-item>
																								  <td style="text-align:center">-</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="5" placeholder="KEPUTUSAN DIREKSI PERUSAHAAN UMUM DAERAH PARKIR MAKASSAR RAYA TENTANG PEMBERHENTIAN DENGAN HORMAT SAUDARA “Drs. MA’MUR SAID“ SEBAGAI PEGAWAI PERUSAHAAN KARENA TELAH MEMASUKI MASA USIA  PENSIUN "></textarea></td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
                                                                                                    
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">KESATU</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="5" placeholder="Memberhentikan Dengan Hormat sebagai Pegawai Perusahaan Umum Daerah Parkir Makassar Raya karena telah memasuki masa usia pensiun 58 tahun sesuai ketentuan peraturan perundang-undangan yang berlaku kepada :"></textarea></td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
                                                                                                    
																								</tr>
<tr data-repeater-item>
																								  <td style="text-align:center">KEDUA</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="8" placeholder="Pegawai yang telah diberhentikan dengan hormat sebagai pegawai perusahaan sebagaimana dimaksud Diktum Kesatu mendapat hak-hak kepegawaiannya berdasarkan peraturan perundang-undangan yang berlaku antara lain :
1.	Uang Pesangon
2.	Uang Penghargaan masa kerja
3.	Jaminan Hari Tua dari BPJS Ketenagakerjaan
"></textarea></td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
                                                                                                    
																								</tr>
<tr data-repeater-item>
																								  <td style="text-align:center">KETIGA</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Perhitungan dan penetapan pemberian uang pesangon dan uang penghargaan masa kerja ditetapkan oleh Direksi"></textarea></td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
                                                                                                    
																								</tr>
<tr data-repeater-item>
																								  <td style="text-align:center">KEEMPAT</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="5" placeholder="Keputusan ini mulai berlaku tanggal 01 Agustus 2022 dan selanjutnya Direksi Perumda Parkir Makassar Raya mengucapkan terima kasih atas pengabdian dan kerjasamanya selama ini.

"></textarea></td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
                                                                                                    
																								</tr>
<tr data-repeater-item>
																								  <td style="text-align:center">KELIMA</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Apabila dikemudian hari terdapat kekeliruan didalam penetapannya, maka akan dilakukan perbaikan sebagaimana mestinya."></textarea></td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
                                                                                                    
																								</tr>
																							</tbody>
																							<tfoot>
																								<tr>
																									<td colspan="6">
																										<button type="button" class="btn btn-success btn-sm float-right" href="javascript:;" data-repeater-create=""> <i class="fa fa-plus"></i> Tambah Data</button>
																									</td>
																								</tr>
																							</tfoot>
																						</table>
                                          </div>
													
									
						
						

                        </div>
                      </div>
                      </div>
                      </div>
                      </div>
<div class="col-xl-4">
									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Mengingat</div>
										 <div class="kt-portlet__body">
                      <div class="form-group row">
                       <div class="col-lg-12">
                          <label></label>
						  <div id="kt_repeater_3">
												<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_repeater_5">
																								<thead>
																								<tr style="text-align:center">
																								  <td width="1%" bgcolor="#f7fcff">No</td>
																								  <td width="800px" bgcolor="#f7fcff">Uraian</td>
																								   <td width="10px" bgcolor="#f7fcff" style="text-align:center">Aksi</td>
																								  </tr>
																								<thead>
																									<tbody data-repeater-list="">
																								<tr data-repeater-item>
																								  <td style="text-align:center">1</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Undang-Undang No. 29 Tahun 1959 tentang pembentukan Daerah-Daerah Tingkat II di Sulawesi Selatan (Lembaran Negara Republik Indonesia Nomor 1822);"></textarea></td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
                                                                                                    
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">2</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Undang–Undang Nomor 23 tahun 2014 tentang Pemerintah Daerah;  "></textarea></td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
                                                                                                    
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">3</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Undang-Undang Nomor 5 Tahun 2014 Tentang Aparatur Sipil Negara;"></textarea></td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
                                                                                                    
																								</tr>
<tr data-repeater-item>
																								  <td style="text-align:center">4</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="5" placeholder="Peraturan Pemerintah Nomor 86 tahun 1999 tentang Perubahan Nama Kota Ujung Pandang menjadi Kota Makassar dalam Wilayah Propinsi Sulawesi Selatan (Lembaran Negara Republik Indonesia tahun 1999 No.193);"></textarea></td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
                                                                                                    
																								</tr>
<tr data-repeater-item>
																								  <td style="text-align:center">5</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Undang-Undang No. 29 Tahun 1959 tentang pembentukan Daerah-Daerah Tingkat II di Sulawesi Selatan (Lembaran Negara Republik Indonesia Nomor 1822);"></textarea></td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
                                                                                                    
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">6</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Undang–Undang Nomor 23 tahun 2014 tentang Pemerintah Daerah;  "></textarea></td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
                                                                                                    
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">7</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Undang-Undang Nomor 5 Tahun 2014 Tentang Aparatur Sipil Negara;"></textarea></td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
                                                                                                    
																								</tr>
<tr data-repeater-item>
																								  <td style="text-align:center">8</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="5" placeholder="Peraturan Pemerintah Nomor 86 tahun 1999 tentang Perubahan Nama Kota Ujung Pandang menjadi Kota Makassar dalam Wilayah Propinsi Sulawesi Selatan (Lembaran Negara Republik Indonesia tahun 1999 No.193);"></textarea></td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
                                                                                                    
																								</tr>
																							</tbody>
																							<tfoot>
																								<tr>
																									<td colspan="6">
																										<button type="button" class="btn btn-success btn-sm float-right" href="javascript:;" data-repeater-create=""> <i class="fa fa-plus"></i> Tambah Data</button>
																									</td>
																								</tr>
																							</tfoot>
																						</table>
                                          </div>
													
									
						
						

                        </div>
                      </div>
                      </div>
                      </div>
                      </div>
							<!--end:: Portlet-->

  
                      </div>
                      </div>
                      </div>
							<!--end:: Portlet-->

													<!--end: Form Wizard Step 2-->

													<!--begin: Form Wizard Step 3-->
													<div class="kt-wizard-v4__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
														<div class="kt-form__section kt-form__section--first">

											

									<!--begin::Portlet-->
										
			
			<div class="tab-content" style="background:#f2f3f8;overflow:scroll;height:800px">
				<div class="tab-pane active" id="kt_tabs_1_1" role="tabpanel">
					<div class="bg-white w-50 ml-auto mr-auto mt-3">
						<img src="../assets/img/header.png" style="width: 700px; display:block; margin-left:auto;margin-right:auto;margin-bottom:20px;padding-top:20px;" />
						<table align="center" border="0" cellpadding="1" style="width: 600px; text-align:justify; line-height:1.5; font-family: Bookman Old Style; font-size: 12px;">
							<tr>
								<th colspan="6" class="text-center">
									<span style="text-align: center"><span style="font-family: Bookman Old Style; font-size: 12px;"><u>KEPUTUSAN DIREKSI PERUSAHAAN UMUM DAERAH PARKIR MAKASSAR RAYA</b></u></span><br /><span style="font-family: Bookman Old Style; font-size: 12px; margin-bottom:3rem">
														<b>Nomor : 088/20-S.Kep.Dir/PERUMDA-PMR/VII/2022</b></span>
								</th>
							</tr>
							<tr>
							  <td colspan="6">&nbsp;</td>
  </tr>
							<tr>
							  <td colspan="6"><p align="center"><span style="font-family: Bookman Old Style; font-size: 12px;">TENTANG</span></p></td>
  </tr>
							<tr>
							  <td colspan="6">&nbsp;</td>
  </tr>
							<tr>
							  <td colspan="6"><p align="center"><span style="font-family: Bookman Old Style; font-size: 12px;"><b>PEMBERHENTIAN DENGAN HORMAT SAUDARA “ Drs. MA’MUR SAID </b></span><br />
							    <span style="font-family: Bookman Old Style; font-size: 12px;"><b>“SEBAGAI PEGAWAI PERUSAHAAN KARENA  TELAH </b></span><br />
						      <span style="font-family: Bookman Old Style; font-size: 12px;"><b>MEMASUKI MASA USIA PENSIUN</b></span></p></td>
							</tr>
							<tr>
							  <td colspan="6">&nbsp;</td>
  </tr>
							<tr>
								<td colspan="6"><div align="center"><span style="font-family: Bookman Old Style; font-size: 12px;"><b>Dengan Rahmat Tuhan Yang Maha Esa</b></div></td>
							</tr>
							<tr>
							  <td colspan="6"><p align="center"><span style="font-family: Bookman Old Style; font-size: 12px;"><b>DIREKSI PERUSAHAAN UMUM DAERAH PARKIR MAKASSAR RAYA</b></span></p></td>
  </tr>
							<tr>
							  <td colspan="6">&nbsp;</td>
  </tr>
							<tr>
							  <td valign="top">Menimbang</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">:</td>
							  <td width="10" valign="top">a.</td>
							  <td>&nbsp;</td>
							  <td>bahwa pegawai perusahaan yang telah memasuki masa usia pensiun akan diberhentikan dengan hormat sebagai pegawai perusahaan berdasarkan Peraturan Perundang-Undangan yang berlaku.</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">b.</td>
							  <td>&nbsp;</td>
							  <td>bahwa untuk maksud huruf (a) diatas, perlu ditetapkan dengan Keputusan Direksi Perusahaan Umum Daerah Parkir Makassar Raya Kota Makassar.</td>
  </tr>
							<tr>
							  <td colspan="6" valign="top">&nbsp;</td>
  </tr>
							<tr>
							  <td valign="top">Mengingat</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td width="10" valign="top">1.</td>
							  <td>&nbsp;</td>
							  <td>Undang-Undang No. 29 Tahun 1959 tentang pembentukan Daerah-Daerah Tingkat II di Sulawesi Selatan (Lembaran Negara Republik Indonesia Nomor 1822);
						      <span style="text-align: justify"></span></td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">2.</td>
							  <td>&nbsp;</td>
							  <td>Undang–Undang Nomor 23 tahun 2014 tentang Pemerintah Daerah;</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">3.</td>
							  <td>&nbsp;</td>
							  <td>Undang-Undang Nomor 5 Tahun 2014 Tentang Aparatur Sipil Negara;</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">4.</td>
							  <td>&nbsp;</td>
							  <td>Peraturan Pemerintah Nomor 86 tahun 1999 tentang Perubahan Nama Kota Ujung Pandang menjadi Kota Makassar dalam Wilayah Propinsi Sulawesi Selatan (Lembaran Negara Republik Indonesia tahun 1999 No.193);</td>
  </tr>
<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">5.</td>
							  <td>&nbsp;</td>
							  <td>Peraturan Pemerintah Nomor 54 Tahun 2017 tentang Badan Usaha Milik Daerah</td>
  </tr>
<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">6.</td>
							  <td>&nbsp;</td>
							  <td>Peraturan Daerah Kota Makassar No. 10 Tahun 2000 tentang Ketentuan Pokok Badan Pengawas, Direksi dan Kepegawaian PD. Parkir Makassar Raya. (Lembaran Daerah Nomor 2 tahun 2000 seri D Nomor 2).</td>
  </tr>
<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">7.</td>
							  <td>&nbsp;</td>
							  <td>Peraturan Daerah Kota Makassar No. 16 Tahun 2006 tentang Perubahan atas Peraturan Daerah Kota Makassar No. 5 Tahun 1999 Tentang Pendirian Perusahaan Daerah Parkir Makassar Raya. </td>
  </tr>
<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">8.</td>
							  <td>&nbsp;</td>
							  <td>Peraturan Daerah Kota Makassar No. 17 Tahun 2006 tentang Pengelolaan Parkir Tepi Jalan Umum dalam Daerah Kota Makassar.</td>
  </tr>
<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">9.</td>
							  <td>&nbsp;</td>
							  <td>Keputusan Walikota Makassar No. 7040 tahun 1999 Tentang Struktur Organisasi dan Tata Kerja Perusahaan Daerah Parkir Makassar Raya .</td>
  </tr>
<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">10.</td>
							  <td>&nbsp;</td>
							  <td>Anggaran Belanja Perusahaan Daerah Parkir Makassar Raya Tahun 2022.</td>
  </tr>
							<tr>
							  <td colspan="6" valign="top">&nbsp;</td>
  </tr>
							<tr>
							  <td colspan="6" valign="top">&nbsp;</td>
  </tr>
  </table>
<img src="../assets/img/footer.png" style="width:700px; display:block; margin-left:auto;margin-right:auto;margin-bottom:20px;padding-bottom:20px" />
  
					</div>
						<div class="bg-white w-50 ml-auto mr-auto">
						<img src="../assets/img/header.png" style="width: 700px; display:block; margin-left:auto;margin-right:auto;margin-bottom:20px;padding-top:20px;" />
						<table align="center" border="0" cellpadding="1" style="width: 600px; text-align:justify; line-height:1.5; font-family: Bookman Old Style; font-size: 12px;">
							<tr>
							  <td colspan="12"><p align="center"><span style="font-family: Bookman Old Style; font-size: 12px; margin-bottom:3rem">
														<b>MEMUTUSKAN</b></p></td>
							</tr>
							<tr>
							  <td colspan="12">&nbsp;</td>
  </tr>
							<tr>
							  <td width="84" valign="top">Menetapkan</td>
							  <td width="1" valign="top">&nbsp;</td>
							  <td width="4" valign="top">:</td>
							  <td width="1" valign="top"></td>
							  <td width="1">&nbsp;</td>
							  <td colspan="7"><span style="font-family: Bookman Old Style; font-size: 12px; margin-bottom:3rem">
														<b>KEPUTUSAN DIREKSI PERUSAHAAN UMUM DAERAH PARKIR MAKASSAR RAYA TENTANG PEMBERHENTIAN DENGAN HORMAT SAUDARA “Drs. MA’MUR SAID“ SEBAGAI PEGAWAI PERUSAHAAN KARENA TELAH MEMASUKI MASA USIA  PENSIUN </b></td>
  </tr>
							<tr>
							  <td colspan="12" valign="top">&nbsp;</td>
  </tr>
							<tr>
							  <td rowspan="6" valign="top">KESATU</td>
							  <td rowspan="6" valign="top">&nbsp;</td>
							  <td rowspan="6" valign="top">&nbsp;</td>
							  <td rowspan="6" valign="top"></td>
							  <td rowspan="6">&nbsp;</td>
							  <td colspan="7">Memberhentikan Dengan Hormat sebagai Pegawai Perusahaan Umum Daerah Parkir Makassar Raya karena telah memasuki masa usia pensiun 58 tahun sesuai ketentuan peraturan perundang-undangan yang berlaku kepada :<br></td>
  </tr>
							<tr>
							  <td colspan="2">Nama</td>
							  <td>:</td>
							  <td colspan="4">Drs. Ma’mur Said</td>
  </tr>
							<tr>
							  <td colspan="2">Tempat Tgl Lahir</td>
							  <td>:</td>
							  <td colspan="4">Ujung Pandang, 15 Juli 1964</td>
  </tr>
							<tr>
							  <td colspan="2">Usia</td>
							  <td>:</td>
							  <td colspan="4"> 58 Tahun </td>
  </tr>
							<tr>
							  <td colspan="2">Masa Kerja</td>
							  <td>:</td>
							  <td colspan="4">23 Tahun </td>
  </tr>
							<tr>
							  <td colspan="2">Jabatan</td>
							  <td>:</td>
							  <td colspan="4">Staf Produksi </td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td>&nbsp;</td>
							  <td colspan="7">&nbsp;</td>
  </tr>
							<tr>
							  <td valign="top">KEDUA</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td width="1" valign="top">&nbsp;</td>
							  <td>&nbsp;</td>
							  <td colspan="7">Pegawai yang telah diberhentikan dengan hormat sebagai pegawai perusahaan sebagaimana dimaksud Diktum Kesatu mendapat hak-hak kepegawaiannya berdasarkan peraturan perundang-undangan yang berlaku antara lain : </td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td>&nbsp;</td>
							  <td width="16">1.</td>
							  <td>Uang Pesangon</td>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
							  <td width="231">&nbsp;</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td>&nbsp;</td>
							  <td>2.</td>
							  <td colspan="6">Uang Penghargaan masa kerja</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td>&nbsp;</td>
							  <td>3.</td>
							  <td colspan="6">Jaminan Hari Tua dari BPJS Ketenagakerjaan</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td>&nbsp;</td>
							  <td colspan="7">&nbsp;</td>
  </tr>
							<tr>
							  <td valign="top">KETIGA</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td>&nbsp;</td>
							  <td colspan="7">Segala Biaya yang timbul dari pelaksanaan Keputusan ini, akan dibebankan pada  Anggaran Belanja Perusahaan Umum Daerah Parkir Makassar Raya Kota Makassar Tahun Anggaran 2023;</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td>&nbsp;</td>
							  <td colspan="7">&nbsp;</td>
  </tr>
							<tr>
							  <td valign="top">KEEMPAT</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td>&nbsp;</td>
							  <td colspan="7">Ketentuan yang berkaitan dengan teknis pelaksanaan Keputusan ini akan diatur lebih lanjut dalam Surat Keputusan Direksi Perusahaan Umum Daerah Parkir Makassar Raya Kota Makassar;</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td>&nbsp;</td>
							  <td colspan="7">&nbsp;</td>
  </tr>
							<tr>
							  <td valign="top">KELIMA</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td>&nbsp;</td>
							  <td colspan="7">Keputusan ini berlaku terhitung mulai tanggal 01 Januari 2023 sampai dengan 31 Desember 2023.</td>
  </tr>
							<tr>
							  <td colspan="12" valign="top">&nbsp;</td>
  </tr>
							<tr>
							  <td colspan="6" rowspan="11" valign="top">&nbsp;</td>
							  <td width="92">&nbsp;</td>
							  <td width="6">&nbsp;</td>
							  <td width="5">&nbsp;</td>
							  <td width="99" style="text-align: left">Ditetapkan di </td>
							  <td width="10">:</td>
							  <td>Makassar</td>
  </tr>
							<tr>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
							  <td style="text-align: left"><u>Pada Tanggal</u></td>
							  <td>:</td>
							  <td><u>30 Desember 2022</u></td>
  </tr>
							<tr>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
							  <td colspan="2" rowspan="2" style="text-align: right"><span style="text-align: right"><img src="../assets/img/paraf.png" width="50" height="50" /></span></td>
							  <td>Direksi Perusahaan Umum Daerah </td>
  </tr>
							<tr>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
							  <td valign="top">Parkir Makassar Raya</td>
  </tr>
							<tr>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
  </tr>
							<tr>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
							  <td><img src="../assets/img/qrcode.jpg" width="75" height="75" /></td>
  </tr>
<tr>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
  </tr>
							<tr>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
							  <td><u><b>Yulianti Tomu, SE</b></u></td>
  </tr>
							<tr>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
							  <td>Direktur Utama</td>
  </tr>
							<tr>
							  <td colspan="6">&nbsp;</td>
  </tr>
							<tr>
							  <td colspan="6"><span style="font-family: Bookman Old Style; font-size: 12px; margin-bottom:3rem"></td>
  </tr>
							<tr>
							  <td colspan="6">&nbsp;</td>
  </tr>
							<tr>
							  <td colspan="12">&nbsp;</td>
  </tr>
							<tr>
							  <td colspan="12"><u>Tembusan disampaikan Kepada Yth.:</u></td>
  </tr>
							<tr>
							  <td colspan="12">1. Walikota Makassar;</td>
  </tr>
							<tr>
							  <td colspan="12">2.	Dewan Pengawas Perusahaan Umum Daerah Parkir Makassar Raya</td>
  </tr>
							<tr>
								<td colspan="12">3.	Pertinggal.</td>
							</tr>
							<tr>
								<td colspan="12">&nbsp;</td>
							</tr>
							<tr>
							  <td colspan="12">&nbsp;</td>
  </tr>
							
							
							  <td colspan="12" valign="top"><hr /></td>
  </tr>
							<tr>
							  <td colspan="12" valign="top"><span style="text-align:justify; line-height:1.5; font-family: Bookman Old Style; font-size: 10px;"><i>Sesuai dengan ketentuan yang berlaku, Perusahaan Umum Daerah Parkir Makassar Raya mengatur bahwa surat ini telah ditandatangani dan diverifikasi secara elektronik, sehingga tidak diperlukan tanda tangan basah pada Surat ini</i></span></td>
  </tr>
							<tr>
							  <td colspan="12" valign="top">&nbsp;</td>
  </tr>
						</table>
						<img src="../assets/img/footer.png" style="width:700px; display:block; margin-left:auto;margin-right:auto;margin-bottom:20px;padding-bottom:20px" />
					</div>
					

								<!--End:: App Content-->
							</div>
									</div>
						</div>
				
</div>
													<!--end: Form Wizard Step 3-->

													<!--begin: Form Wizard Step 4-->
													<div class="kt-wizard-v4__content" data-ktwizard-type="step-content">
														<div class="kt-form__section kt-form__section--first">
															<div class="kt-wizard-v4__form">
														<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead style="text-align:center">
											<tr>
												<th width="1%" bgcolor="#f7fcff">#</th>
												<th width="5%" bgcolor="#f7fcff">ID Kasbon</th>
												<th width="7%" bgcolor="#f7fcff">Waktu<br>Pengajuan</th>
												<th width="6%" colspan="2" bgcolor="#f7fcff">Nilai Pinjaman</th>
												<th width="1%" bgcolor="#f7fcff">Bunga</th>
												<th width="3%" bgcolor="#f7fcff">Tenor</th>
												<th width="4%" colspan="2" bgcolor="#f7fcff">Angsuran</th>
												<th width="6%" colspan="2" bgcolor="#f7fcff">Sisa Pinjaman</th>
												<th width="6%" bgcolor="#f7fcff">Progress Angsuran</th>
												<th width="1%" bgcolor="#f7fcff">Status Permohonan</th>
												<th width="2%" bgcolor="#f7fcff">Aksi</th>
											</tr>
										</thead>
										<tbody>


										  <tr>
												<td style="text-align:center" id="kt_table_1">1</td>
												<td style="text-align:center;">2/IM-KASBON/III/2019</td>
												<td style="text-align:center">12 Oktober 2019 - 09:00 WITA</td>
												<td style="text-align:left; border-right-color:#fff">Rp.</td>
												<td style="text-align:right">1.000.000,-</td>
												<td style="text-align:right">0 %</td>
												<td style="text-align:right">10 Bulan</td>
												<td style="text-align:left; border-right-color:#fff">Rp.</td>
												<td style="text-align:right">100.000,-</td>
												<td style="text-align:left; border-right-color:#fff">Rp.</td>
												<td style="text-align:right">200.000,-</td>
												<td style="text-align:center" nowrap><div class="progress">
												  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 80%">8 dari 10</div>
</div></td>
											  <td style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="Disetujui" data-html="true">
													    <i class="fa flaticon2-check-mark"></i>
												    </span></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<div class="kt-nav__link" data-toggle="modal" data-target="#modal_angsuran">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Angsuran</span>
																			</div>
																		</li>
																		<li class="kt-nav__item">
																			<div class="kt-nav__link" data-toggle="modal" data-target="#modal_pelunasan">
																				<i class="kt-nav__link-icon fa fa-money-bill-wave"></i>
																				<span class="kt-nav__link-text">Ajukan Pelunasan</span>
																			</div>
																		</li>

																	</ul>
																</div>
															</div></td>
										  </tr>
									    </tbody>
									</table>
													</div>
													</div>
													</div>

													<!--end: Form Wizard Step 4-->
<!--begin: Form Wizard Step 5-->
													<div class="kt-wizard-v4__content" data-ktwizard-type="step-content">
													<div class="kt-form__section kt-form__section--first">
															<div class="kt-wizard-v4__form">
														<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead style="text-align:center">
											<tr>
												<th width="1%" bgcolor="#f7fcff">#</th>
												<th width="3%" bgcolor="#f7fcff">ID Asset</th>
                                                <th width="2%" bgcolor="#f7fcff">QR Code</th>
                                                <th width="10%" bgcolor="#f7fcff">Nama Barang</th>
                                                <th width="7%" bgcolor="#f7fcff">Tipe Produk</th>
                                                <th width="7%" bgcolor="#f7fcff">Kategori Produk</th>
                                                <th width="7%" bgcolor="#f7fcff">Diserahkan Oleh</th>
												<th width="7%" bgcolor="#f7fcff">Waktu<br>Penyerahan</th>
												<th width="1%" bgcolor="#f7fcff">Status Penyerahan</th>
												<th width="2%" bgcolor="#f7fcff">Aksi</th>
											</tr>
										</thead>
										<tbody>


										  <tr>
												<td style="text-align:center" id="kt_table_1">1</td>
												<td style="text-align:center;">2/IM-KASBON/III/2019</td>
                                                <td style="text-align:center;"><i class="fa fa-qrcode"></i></td>
                                                <td style="text-align:left;">Laptop Asus Core i5</td>
                                                <td style="text-align:center">Elektronik</td>
                                                <td style="text-align:center">Laptop</td>
                                                <td style="text-align:center">&nbsp;</td>
												<td style="text-align:left">12 Oktober 2019 - 09:00 WITA</td>
											  <td style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="Disetujui" data-html="true">
													    <i class="fa flaticon2-check-mark"></i>
												    </span></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<div class="kt-nav__link" data-toggle="modal" data-target="#modal_detail_asset">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</div>
																		</li>
																		<li class="kt-nav__item">
																			<div class="kt-nav__link" data-toggle="modal" data-target="#modal_serah_terima_asset">
																				<i class="kt-nav__link-icon fa fa-luggage-cart"></i>
																				<span class="kt-nav__link-text">Serah Terima Barang</span>
																			</div>
																		</li>

																	</ul>
																</div>
															</div></td>
										  </tr>
									    </tbody>
									</table>
													</div>
													</div>
													</div>

													<!--end: Form Wizard Step 5-->

													<!--begin: Form Actions -->
													<div class="kt-form__actions">
														<button class="btn btn-secondary btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-prev">
															Previous
														</button>
														<button class="btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-submit">
															Submit
														</button>
														<button class="btn btn-brand btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-next">
															Next Step
														</button>
													</div>

													<!--end: Form Actions -->
												</form>

												<!--end: Form Wizard Form-->
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>


                    </div>
					<!--begin::Modal 1-->
									<div class="modal fade" id="modal_angsuran" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="flaticon2-list"></i></span>
												<h3 class="kt-portlet__head-title kt-font-info">DATA ANGSURAN</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
											<a href="#" class="btn btn-label-success btn-sm" data-toggle="dropdown">
												<i class="fa fa-print"></i> Print

												<!--<i class="flaticon2-plus"></i>-->
											</a>
											&nbsp;
												<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">X</button>
											</div>
										</div>

										<div class="kt-portlet__body">
											<div class="tab-content">
												<div class="tab-pane active" id="kt_tabs_7_1" role="tabpanel">
													<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_2">

  <tr style="text-align:center">
    <td width="1%" bgcolor="#f7fcff" >NO</td>
    <td width="12%" bgcolor="#f7fcff">No. Kwitansi</td>
    <td width="8%" bgcolor="#f7fcff">Tgl Pembayaran</td>
    <td width="7%" colspan="2" bgcolor="#f7fcff">Nominal Pembayaran</td>
    <td width="7%" colspan="2" bgcolor="#f7fcff">Sisa Kasbon</td>
    <td width="3%" bgcolor="#f7fcff">Kasir</td>
  </tr>
  <tr>
    <td style="text-align:center">1</td>
    <td style="text-align:center">8/IM-KOP/VIII/2019</td>
    <td style="text-align:left">28 Agustus 2019</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">100.000,-</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">200.000,-</td>
    <td style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Auto</span></td>
  </tr>
 <tr>
    <td style="text-align:center">2</td>
    <td style="text-align:center">7/IM-KOP/VIII/2019</td>
    <td style="text-align:left">28 Juli 2019</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">100.000,-</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">300.000,-</td>
    <td style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Auto</span></td>
  </tr>
  <tr>
    <td style="text-align:center">3</td>
    <td style="text-align:center">6/IM-KOP/VIII/2019</td>
    <td style="text-align:left">28 Juni 2019</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">100.000,-</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">400.000,-</td>
    <td style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Auto</span></td>
  </tr>
 <tr>
    <td style="text-align:center">4</td>
    <td style="text-align:center">5/IM-KOP/VIII/2019</td>
    <td style="text-align:left">28 Mei 2019</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">100.000,-</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">500.000,-</td>
    <td style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Auto</span></td>
  </tr>
  <tr>
    <td style="text-align:center">5</td>
    <td style="text-align:center">4/IM-KOP/VIII/2019</td>
    <td style="text-align:left">28 April 2019</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">100.000,-</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">600.000,-</td>
    <td style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Auto</span></td>
  </tr>
 <tr>
    <td style="text-align:center">5</td>
    <td style="text-align:center">3/IM-KOP/VIII/2019</td>
    <td style="text-align:left">28 Maret 2019</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">100.000,-</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">700.000,-</td>
    <td style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Auto</span></td>
  </tr>
  <tr>
    <td style="text-align:center">5</td>
    <td style="text-align:center">2/IM-KOP/VIII/2019</td>
    <td style="text-align:left">28 Februari 2019</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">100.000,-</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">800.000,-</td>
    <td style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Auto</span></td>
  </tr>
  <tr>
    <td style="text-align:center">5</td>
    <td style="text-align:center">1/IM-KOP/VIII/2019</td>
    <td style="text-align:left">28 Januari 2019</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">100.000,-</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">900.000,-</td>
    <td style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Auto</span></td>
  </tr>

</table>

												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
									<div class="kt-pagination  kt-pagination--danger">
													<select class="form-control kt-font-danger" style="width: 60px">
															<option value="10">10</option>
															<option value="20">20</option>
															<option value="30">30</option>
															<option value="50">50</option>
															<option value="100">100</option>
														</select>
														<span class="pagination__desc">
															Menampilkan 10 dari 230 Data
														</span>

													<div class="kt-pagination__toolbar">
														<ul class="kt-pagination__links">
														<li class="kt-pagination__link--first">
															<a href="#"><i class="fa fa-angle-double-left kt-font-danger"></i></a>
														</li>
														<li class="kt-pagination__link--next">
															<a href="#"><i class="fa fa-angle-left kt-font-danger"></i></a>
														</li>
														<li class="kt-pagination__link--active">
															<a href="#">1</a>
														</li>
														<li>
															<a href="#">2</a>
														</li>
														<li>
															<a href="#">3</a>
														</li>
														<li>
															<a href="#">...</a>
														</li>
														<li class="kt-pagination__link--prev">
															<a href="#"><i class="fa fa-angle-right kt-font-danger"></i></a>
														</li>
														<li class="kt-pagination__link--last">
															<a href="#"><i class="fa fa-angle-double-right kt-font-danger"></i></a>
														</li>
													</ul>
													</div>
												</div>
												<div class="tab-pane" id="kt_tabs_7_2" role="tabpanel">
													It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently.
												</div>
												<div class="tab-pane" id="kt_tabs_7_3" role="tabpanel">
													<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid-full">

										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											<div class="form-group row">
												<div class="col-lg-6">
														<label>No. Tanda Terima Berkas :</label>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="1/IM-TTD/XII/2019">

												</div>

												<div class="col-lg-6">
														<label>Waktu Penyerahan Berkas :</label>
														<div class="form-group">
													<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="31 Desember 2019 - 15:00 WITA">
												</div>
													</div>

												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
												<div class="col-lg-6">
														<label>Nama Pengirim Berkas :</label>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Muhammad Nasrullah, S.Kom">

												</div>

												<div class="col-lg-6">
														<label>Jabatan :</label>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Utama">

												</div>


												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
												<div class="col-lg-6">
														<label>Nama Penerima Berkas :</label>
														<input type="text" class="form-control form-control-sm">

												</div>

												<div class="col-lg-6">
														<label>Jabatan :</label>
														<input type="text" class="form-control form-control-sm" >

												</div>


												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
												<div class="col-lg-6">
														<label>Tanda Tangan Pengirim Berkas :</label>
														<textarea class="form-control" id="exampleTextarea" rows="3"></textarea>

												</div>

												<div class="col-lg-6">
														<label>Tanda Tangan Penerima Berkas :</label>
														<textarea class="form-control" id="exampleTextarea" rows="3"></textarea>

												</div>


												</div>
												</div>
												</div>
									</div>
									</div>

									<!--end::Portlet-->
												</div>
											</div>
											</div>

									</div>

									</div>
								</div>
							</div>
							<!--End::Modal 1-->
							<!--begin::Modal 2-->
									<div class="modal fade" id="modal_pelunasan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="flaticon2-list-1"></i></span>
												<h3 class="kt-portlet__head-title kt-font-info">FORM BAYAR ANGSURAN</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">X</button>
											</div>
										</div>
										<div class="kt-portlet__body">
											<div class="tab-content">
												<div class="tab-pane active" id="kt_tabs_7_1" role="tabpanel">
													<div class="form-group row">
												<div class="col-lg-4">
														<label>ID Kasbon :</label>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="1/IM-TTD/XII/2019">

												</div>

												<div class="col-lg-4">
														<label>Waktu Pengajuan :</label>
														<div class="form-group">
													<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="31 Desember 2019 - 15:00 WITA">
												</div>
													</div>

												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
												<div class="col-lg-4">
														<label>Nilai Pinjaman :</label>
														<div class="form-group">
													<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Rp.                                              1.000.000,-">
												</div>
													</div>

												<div class="col-lg-4">
														<label>Nilai Angsuran :</label>
														<div class="form-group">
													<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Rp.                                                100.000,-">
												</div>
													</div>
												<div class="col-lg-4">
														<label class="kt-font-danger">Sisa Angsuran :</label>
														<div class="form-group">
													<input type="text" class="form-control form-control-sm kt-font-danger" disabled="disabled" placeholder="Rp.                                                200.000,-">
												</div>
													</div>

												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
												<div class="col-lg-4">
														<label class="kt-font-danger">Bayar Angsuran :</label>
														<div class="form-group">
													<input type="text" class="form-control form-control-sm kt-font-danger" placeholder="Rp.                                                200.000,-">
												</div>
													</div>
												<div class="col-lg-8">
														<label>Upload Bukti Pembayaran :</label>
														<div class="dropzone dropzone-default dropzone-brand dz-clickable" id="kt_dropzone_2">
													<div class="dropzone-msg dz-message needsclick">
														<h3 class="dropzone-msg-title">Drop files here or click to upload.</h3>
														<span class="dropzone-msg-desc">Upload up to 10 files</span>
													</div>
												</div>

												</div>

												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
									<div class="kt-portlet__foot kt-align-right">
												<div class="">

													<button type="reset" class="btn btn-brand btn-sm">Kirim</button>
												</div>
											</div>




									</div>

									</div>
								</div>
							</div>
							<!--End::Modal 2-->

									</div>
									</div>

							<!--end:: Portlet-->


          </div>
        </div>
            </div>


									<!--End::Portlet-->
								</div>

									<!--end:: Widgets/Notifications-->
								</div>
							</div>
						</div>

						<!-- end:: Content -->
					</div>

						<!-- end:: Content -->
					</div>

  </div>
</div>

									<!--end: Datatable -->
								</div>
							</div>

            </div>
<!--begin::Page Scripts(used by this page) -->

<?php require '../layouts/footer.php' ?>
<?php require '../layouts/foot.php' ?>
