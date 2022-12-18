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
											Detail Gaji Pegawai Bulanan

									</h3>
								<span class="kt-subheader__separator kt-subheader__separator--v"></span>
									<div class="kt-subheader__group" id="kt_subheader_search">
										<span class="kt-subheader__desc" id="kt_subheader_total" style="color:#ff0000">
											Periode Januari 2019 </span>
										<form class="kt-margin-l-20" id="kt_subheader_search_form">

										</form>
									</div>

								</div>
           <div class="kt-subheader__toolbar">
			<div class="dropdown dropdown-inline" ddata-placement="left">
				<a href="gaji-pegawai-bulanan.php" class="btn btn-label-primary btn-sm">
					<i class="flaticon-reply"></i> Kembali</button>
					<!--<i class="flaticon2-plus"></i>-->
				</a>
				<a href="#" class="btn btn-label-success btn-sm" data-toggle="dropdown">
                    <i class="flaticon2-printer"></i> Export Data</button>
                    <!--<i class="flaticon2-plus"></i>-->
                </a>
                <div class="dropdown-menu dropdown-menu-fit dropdown-menu-md dropdown-menu-right">
                    <!--begin::Nav-->
                    <ul class="kt-nav">
                        <li class="kt-nav__item">
                            <a href="#" class="kt-nav__link">
                                <i class="kt-nav__link-icon fa fa-file-pdf"></i><span class="kt-nav__link-text">PDF</span>
                            </a>
                          </li>
                        <li class="kt-nav__item">
                            <a href="#" class="kt-nav__link">
                                <i class="kt-nav__link-icon fa fa-file-excel"></i><span class="kt-nav__link-text">Excel</span>
                            </a>
                        </li>
                    </ul>
                    <!--end::Nav-->
                </div>
			</div>
                
                
            </div>
        </div>
    </div>
    <!-- end:: Content Head -->

	<!-- begin:: Content -->
	<div class="row">
		<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
            <!-- begin:: Alert -->
            <div class="alert alert-elevate alert-solid-warning alert-bold" role="alert">
                <div class="alert-icon"><i class="fa fa-info-circle"></i></div>
                <div class="alert-text">A simple primary alert—check it out!</div>
                <div class="alert-close">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"><i class="la la-close"></i></span>
                    </button>
                </div>
            </div>
            <!-- end:: Alert -->

            <!--begin::Filter-->
			<div class="kt-portlet" id = "login_Box_Div" >
				<div class="kt-portlet__head">
					<div class="kt-portlet__head-label">
						<h3 class="kt-portlet__head-title">
							Filter Data
						</h3>
					</div>
				</div>

				<!--begin::Form-->
				<form class="kt-form">
					<div class="kt-portlet__body">
                        <div class="form-group row">
						<div class="col-lg-2">
                                <label class="">Periode Gaji :</label>
                                 <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="2">Januari</option>
                                      <option value="2">Februari</option>
                                      <option value="2">Maret</option>
                                     
                                  </select>
                            </div>
							<div class="col-lg-1">
                                <label class="">Tahun :</label>
                                 <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="2" selected="">2019</option>
                                      <option value="2">2018</option>
                                      <option value="2">2017</option>
                                     
                                  </select>
                            </div>
                            <div class="col-lg-3">
                                <label>Nama Pegawai :</label>
    	                       
        							<select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="2">9130037 - Maghfirah Sharifudin Andy Omar S.Psi</option>
                                      <option value="3" selected="">9130038 - Maghfirah Sharifudin Andy Omar S.Psi</option>
                                      
                                  </select>
        					
                            </div>
                            <div class="col-lg-2">
                                <label>Departemen :</label>
								
                                <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="2">Direksi</option>
                                      <option value="3">Finance</option>
                                      <option value="4">SDM & UMUM</option>
                                      <option value="5" selected="">Infrastruktur</option>
                                      <option value="6">Information Technology</option>
                                      <option value="12">Creative</option>
                                      <option value="12" >Commercial & Business Development</option>
                                  </select>
                            </div>
                            <div class="col-lg-2">
                                <label class="">Jabatan :</label>
								  <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="2">Electrical Engineering Supervisor</option>
                                      <option value="2" selected="">Electrical Engineering Supervisor Assistant</option>
                                      <option value="2">Electrical Engineering</option>
                                     
                                  </select>
                             
                            </div>
							<div class="col-lg-2">
                                <label class="">Kantor :</label>
                                 <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="2">Pusat</option>
                                      <option value="2">Cabang Sulawesi Barat</option>
                                      <option value="2">Cabang Bandung</option>
                                     
                                  </select>
                            </div>
							
							
                        </div>
                    </div>
					<div class="kt-portlet__foot text-center">
						<div class="kt-form__actions">
							<button type="reset" class="btn btn-outline-brand btn-sm">Reset</button>
							<button type="reset" class="btn btn-primary btn-sm"><i class="flaticon-interface-6"></i>Filter Data</button>
						</div>
					</div>
				</form>
				<!--end::Form-->
			</div>
            <!--begin::End-->

			

			<div class="kt-portlet kt-portlet--mobile ">
				<div class="kt-portlet__body">
					<!--begin: Datatable -->
					<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead>
											<tr style="text-align:center">
											  <th width="1%" rowspan="2" bgcolor="#f7fcff" id="kt_table_2">#</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Tahun</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Periode Gaji</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Foto</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">NIP</th>
											  <th width="3%" rowspan="2" bgcolor="#f7fcff">Nama Pegawai</th>
											  <th width="3%" rowspan="2" bgcolor="#f7fcff">Department</th>
											  <th width="3%" rowspan="2" bgcolor="#f7fcff">Jabatan</th>
											  <th width="3%" rowspan="2" bgcolor="#f7fcff">Tanggal Mulai Kerja</th>
											  <th width="3%" rowspan="2" bgcolor="#f7fcff">Kantor</th>
											  <th width="3%" colspan="2" rowspan="2" bgcolor="#f7fcff">Pendapatan Kotor</th>
											  <th width="1%" colspan="2" rowspan="2" bgcolor="#f7fcff">Potongan</th>
											  <th width="1%" colspan="2" rowspan="2" bgcolor="#f7fcff">Pendapatan Bersih</th>
											 
											  <th width="2%" rowspan="2" bgcolor="#f7fcff">Aksi</th>
										  </tr>
											<tr style="text-align:center">
							              </tr>
										</thead>
										<tbody>
											<tr>
												<td id="kt_table_1">1</td>
												<td nowrap="nowrap" style="text-align:center">2019</td>
												<td nowrap="nowrap" style="text-align:center">Januari</td>
								
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" >
														<img src="../assets/media/users/100_6.jpg" alt="image">
													</a></td>
												<td style="text-align:center" nowrap>9130001</td>
												<td style="text-align:left" nowrap>Muhammad Nasrullah, S.Kom</td>
												<td nowrap="nowrap" style="text-align:center">Direksi</td>
												<td style="text-align:left" nowrap>Direktur Utama</td>
												<td style="text-align:center" nowrap>24 September 2008</td>
												<td style="text-align:center" nowrap>Pusat</td>
												<td width="1%" style="text-align:center" nowrap>Rp.</td>
												<td width="3%" style="text-align:right" nowrap>5.000.000,-</td>
												<td width="1%" style="text-align:center" nowrap>Rp.</td>
												<td width="3%" style="text-align:right" nowrap>500.000,-</td>
												<td width="1%" style="text-align:center" nowrap>Rp.</td>
												<td width="3%" style="text-align:right" nowrap>4.500.000-</td>
												
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	
																		<li class="kt-nav__item">
																			<a href="print-slip-gaji.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-print"></i>
																				<span class="kt-nav__link-text">Print Slip Gaji</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="pegawai-edit.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-user-edit"></i>
																				<span class="kt-nav__link-text">Edit</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">

																			<a href="pegawai-hapus.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="hr-pegawai-log.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-users"></i>
																				<span class="kt-nav__link-text">History Log</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div></td>
										  </tr>
											<tr>
												<td id="kt_table_1">2</td>
												<td nowrap="nowrap" style="text-align:center">2019</td>
												<td nowrap="nowrap" style="text-align:center">Januari</td>
									
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" >
														<img src="../assets/media/users/100_7.jpg" alt="image">
													</a></td>
												<td style="text-align:center" nowrap>9130002</td>
												<td style="text-align:left" nowrap>Maghfirah Sharifudin Andy Omar S.Psi</td>
												<td nowrap="nowrap" style="text-align:center">HR &amp; GA</td>
												<td style="text-align:left" nowrap>HR Staff</td>
												<td style="text-align:center" nowrap>24 September 2008</td>
												<td style="text-align:center" nowrap>Pusat</td>
												<td width="1%" nowrap style="text-align:center">Rp.</td>
												<td width="3%" nowrap style="text-align:right">5.000.000,-</td>
												<td width="1%" nowrap style="text-align:center">Rp.</td>
												<td width="3%" nowrap style="text-align:right">500.000,-</td>
												<td width="1%" nowrap style="text-align:center">Rp.</td>
												<td width="3%" nowrap style="text-align:right">4.500.000-</td>
												
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	
																		<li class="kt-nav__item">
																			<a href="print-slip-gaji.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-print"></i>
																				<span class="kt-nav__link-text">Print Slip Gaji</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="pegawai-edit.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-user-edit"></i>
																				<span class="kt-nav__link-text">Edit</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">

																			<a href="pegawai-hapus.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="hr-pegawai-log.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-users"></i>
																				<span class="kt-nav__link-text">History Log</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div></td>
										  </tr>
											<tr>
												<td id="kt_table_1">3</td>
												<td nowrap="nowrap" style="text-align:center">2019</td>
												<td nowrap="nowrap" style="text-align:center">Januari</td>
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" >
														<img src="../assets/media/users/100_8.jpg" alt="image">
													</a></td>
												<td style="text-align:center" nowrap>9130003</td>
												<td style="text-align:left" nowrap>Ade Rismawan</td>
												<td nowrap="nowrap" style="text-align:center">Infrastructure</td>
												<td style="text-align:left" nowrap>Electrical Engineer Supervisor Assistant</td>
												<td style="text-align:center" nowrap>24 September 2008</td>
												<td style="text-align:center" nowrap>Pusat</td>
												<td width="1%" nowrap style="text-align:center">Rp.</td>
												<td width="3%" nowrap style="text-align:right">5.000.000,-</td>
												<td width="1%" nowrap style="text-align:center">Rp.</td>
												<td width="3%" nowrap style="text-align:right">500.000,-</td>
												<td width="1%" nowrap style="text-align:center">Rp.</td>
												<td width="3%" nowrap style="text-align:right">4.500.000-</td>
												
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	
																		</li>
																		<li class="kt-nav__item">
																			<a href="print-slip-gaji.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-print"></i>
																				<span class="kt-nav__link-text">Print Slip Gaji</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="pegawai-edit.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-user-edit"></i>
																				<span class="kt-nav__link-text">Edit</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">

																			<a href="pegawai-hapus.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="hr-pegawai-log.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-users"></i>
																				<span class="kt-nav__link-text">History Log</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div></td>
										  </tr>
										  <tr>
												<td id="kt_table_1">4</td>
												<td nowrap="nowrap" style="text-align:center">2019</td>
												<td nowrap="nowrap" style="text-align:center">Januari</td>
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" >
														<img src="../assets/media/users/100_10.jpg" alt="image">
													</a></td>
												<td style="text-align:center" nowrap>9130004</td>
												<td style="text-align:left" nowrap>Nur Achfiah Budhi Artha, S. ST</td>
												<td nowrap="nowrap" style="text-align:center">Creative</td>
												<td style="text-align:left" nowrap>General Affair Staff</td>
												<td style="text-align:center" nowrap>24 September 2008</td>
												<td style="text-align:center" nowrap>Sulawesi Barat</td>
												<td width="1%" nowrap style="text-align:center">Rp.</td>
												<td width="3%" nowrap style="text-align:right">5.000.000,-</td>
												<td width="1%" nowrap style="text-align:center">Rp.</td>
												<td width="3%" nowrap style="text-align:right">500.000,-</td>
												<td width="1%" nowrap style="text-align:center">Rp.</td>
												<td width="3%" nowrap style="text-align:right">4.500.000-</td>
												
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	
																		<li class="kt-nav__item">
																			<a href="print-slip-gaji.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-print"></i>
																				<span class="kt-nav__link-text">Print Slip Gaji</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="pegawai-edit.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-user-edit"></i>
																				<span class="kt-nav__link-text">Edit</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">

																			<a href="pegawai-hapus.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="hr-pegawai-log.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-users"></i>
																				<span class="kt-nav__link-text">History Log</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div></td>
										  </tr>
										  <tr>
										    <td colspan="10" id="kt_table_3" style="text-align:center" bgcolor="#fdfdec"><strong>GRAND TOTAL</strong></td>
										    <td width="1%" nowrap="nowrap" style="text-align:center" bgcolor="#fdfdec"><strong>Rp.</strong></td>
										    <td nowrap="nowrap" style="text-align:right" bgcolor="#fdfdec"><strong>20.000.000,-</strong></td>
										    <td width="1%" nowrap="nowrap" style="text-align:center" bgcolor="#fdfdec"><strong>Rp.</strong></td>
										    <td nowrap="nowrap" style="text-align:right" bgcolor="#fdfdec"><strong>2.000.000,-</strong></td>
										    <td width="1%" nowrap="nowrap" style="text-align:center" bgcolor="#fdfdec"><strong>Rp.</strong></td>
										    <td nowrap="nowrap" style="text-align:right" bgcolor="#fdfdec"><strong>18.000.000-</strong></td>
										    <td colspan="5" nowrap style="text-align:center" bgcolor="#fdfdec">&nbsp;</td>
									      </tr>
										</tbody>
									</table>
                    <!--end: Datatable -->

                    

                </div>
            </div>
        </div>
    </div>

<?php require '../layouts/footer.php' ?>
<?php require '../layouts/foot.php' ?>
