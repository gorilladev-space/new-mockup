<?php require '../layouts/head.php' ?>
<?php require './layouts/header.php' ?>



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
											Data Pegawai Pensiun
									</h3>

								</div>
								<div class="kt-subheader__toolbar">

										<button type="button" class="btn btn-label-danger btn-sm" id = "buttonLogin" onclick = "displayLoginBox()"><i class="flaticon-interface-6"></i> Filter Data</button>
										<a href="#" class="btn btn-label-success btn-sm" data-toggle="dropdown">
												<i class="flaticon2-printer"></i> Export Data</button>

												<!--<i class="flaticon2-plus"></i>-->
											</a>
											<div class="dropdown-menu dropdown-menu-fit dropdown-menu-md dropdown-menu-right">

												<!--begin::Nav-->
												<ul class="kt-nav">

													<li class="kt-nav__item">
														<a href="#" class="kt-nav__link">
															<i class="kt-nav__link-icon fa fa-file-pdf"></i>
															<span class="kt-nav__link-text">PDF</span>
														</a>
													</li>
													<li class="kt-nav__item">
														<a href="#" class="kt-nav__link">
															<i class="kt-nav__link-icon fa fa-file-excel"></i>
															<span class="kt-nav__link-text">Excel</span>

														</a>
													</li>

												</ul>

												<!--end::Nav-->
											</div>

											<a href="hr-pensiun-add.php" class="btn btn-info btn-sm">
												<i class="fa fa-calculator"></i> Tambah Data</button>
												<!--<i class="flaticon2-plus"></i>-->
											</a>


										</div>
							</div>
						</div>

						<!-- end:: Content Head -->

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
						                        <div class="col-lg-4">
						                          <label>Nama Pegawai :</label>
												  <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="9130037 - Maghfirah Sharifudin Andy Omar S.Psi">

						                        </div>

						                        <div class="col-lg-4">
						                          <label>Jabatan :</label>
						                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Electrical Egineer Supervisor Assistant">
						                        </div>
						                        <div class="col-lg-4">
						                          <label class="">Departemen :</label>
						                          <div class="form-group">
						                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Development">
						                      </div>
						                        </div>
						                      </div>
						                      <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						                     <div class="form-group row">
						                        <div class="col-lg-4">
						                          <label>Jenis Cuti :</label>
						                      <div class="dropdown bootstrap-select form-control kt-"><select class="form-control kt-selectpicker" data-live-search="true" tabindex="-98">
						                              <option value="2">cuti alasan penting</option>
						                              <option value="3">cuti bersalin</option>
						                              <option value="4">cuti besar</option>
						                              <option value="5">cuti khusus</option>
						                              <option value="6">cuti sakit</option>
						                              <option value="7" selected="">cuti tahunan</option>
						                              <option value="12">menikah</option>
						                          </select><button type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="combobox" aria-owns="bs-select-1" aria-haspopup="listbox" aria-expanded="false" title="cuti tahunan"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">cuti tahunan</div></div> </div></button><div class="dropdown-menu "><div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-1" aria-autocomplete="list"></div><div class="inner show" role="listbox" id="bs-select-1" tabindex="-1"><ul class="dropdown-menu inner show" role="presentation"></ul></div></div></div>
						                        </div>
						                        <div class="col-lg-4">
						                          <label class="">Tanggal :</label>
						                          <div class="input-group" id="kt_daterangepicker_2">
						                        <input type="text" class="form-control" readonly="" placeholder="Select date range">
						                        <div class="input-group-append">
						                          <span class="input-group-text"><i class="la la-calendar-check-o"></i></span>
						                        </div>
						                      </div>
						                        </div>
						                        <div class="col-lg-4">
						                          <label class="">Keterangan :</label>
						                          <textarea class="form-control" id="exampleTextarea" rows="4"></textarea>
						                        </div>
						                      </div>
						                      </div>
																	<div class="kt-portlet__foot text-center">
																		<div class="kt-form__actions">
																			<button type="reset" class="btn btn-primary">Submit</button>
																			<button type="reset" class="btn btn-secondary">Cancel</button>
																		</div>
																	</div>
																</form>

																<!--end::Form-->
															</div>


							<div class="kt-portlet kt-portlet--mobile ">

								<div class="kt-portlet__body">
									<!--begin: Datatable -->
									<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead style="text-align:center">
											<tr>
												<th width="1%" bgcolor="#f7fcff" rowspan="2">#</th>
												<th width="2%" bgcolor="#f7fcff" rowspan="2">Pegawai</th>
												<th width="2%" bgcolor="#f7fcff" rowspan="2">Nip</th>
												<th width="3%" bgcolor="#f7fcff" rowspan="2">Tipe Pegawai</th>
												<th width="15%" bgcolor="#f7fcff" rowspan="2">Departement</th>
												<th width="5%" bgcolor="#f7fcff" rowspan="2">Kantor</th>
												<th width="8%" bgcolor="#f7fcff" rowspan="2">Waktu<br>Pengajuan</th>
												<th width="8%" bgcolor="#f7fcff" rowspan="2">Tanggal Pensiun</th>
												<th width="8%" bgcolor="#f7fcff" rowspan="2">No. SK Pensiun</th>
												<th width="20%" bgcolor="#f7fcff" rowspan="2">Keterangan Pensiun</th>
												<th colspan="2" bgcolor="#f7fcff">Verifikasi</th>
												<th width="3%" bgcolor="#f7fcff" rowspan="2">Status</th>
												<th width="3%" bgcolor="#f7fcff" rowspan="2">Aksi</th>
											</tr>
											<tr>

												<th width="1%" bgcolor="#f7fcff">HR Manager</th>
												<th width="1%" bgcolor="#f7fcff">HR Director</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td width="1%" id="kt_table_1">1</td>
												<td width="2%" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Amalia Restu Sugiarty S.Tr.Par<hr>Electrical Engineer Supervisor Assistant" data-html="true">
														<img src="../assets/media/users/100_10.jpg" alt="image">
													</a></td>
												<td width="2%" id="kt_table_1">1102019</td>
												<td width="3%" style="text-align:center">Tetap</td>
												<td width="15%" style="text-align:center">Commercial & Business Development</td>
												<td width="5%" style="text-align:center">Pusat</td>
												<td width="8%" style="text-align:center">12 Oktober 2019<br>09:00 WITA</td>
												<td width="8%" style="text-align:center">12 Oktober 2019</td>
												<td width="8%" style="text-align:center">1/SKP-IM/X/2019</td>
												<td style="text-align:center">Pensiun Dini</td>
											  <td width="1%" style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="Disetujui<hr>Muhammad Nasrullah, S.Kom<br>31 Desember 2018 - 14:30 WITA" data-html="true">
														  <i class="fa flaticon2-check-mark"></i>
													  </span></td>
													<td width="1%" style="text-align:center" nowrap><button type="button" class="btn btn-warning btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="Menunggu Persetujuan" data-html="true"><i class="fa fa-clock"></i></button></td>

												<td width="1%" style="text-align:center" nowrap><button type="button" class="btn btn-warning btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="Menunggu Persetujuan" data-html="true"><i class="fa fa-clock"></i></button></td>
												<td width="3%" style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="detail-pensiun.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="hr-cetak-skpensiun.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-file-invoice"></i>
																				<span class="kt-nav__link-text">Cetak SK Pensiun</span>
																			</a>
																		</li>

																		<li class="kt-nav__item">
																			<a href="edit-pensiun.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa flaticon-edit-1"></i>
																				<span class="kt-nav__link-text">Edit Data</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="hapus-pensiun.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa flaticon2-trash"></i>
																				<span class="kt-nav__link-text">Hapus Data</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div></td>
										  </tr>
											<tr>
												<td width="1%" id="kt_table_1">2</td>
												<td width="2%" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Amalia Restu Sugiarty S.Tr.Par<hr>Electrical Engineer Supervisor Assistant" data-html="true">
														<img src="../assets/media/users/100_10.jpg" alt="image">
													</a></td>
												<td width="2%" id="kt_table_1">1102019</td>
												<td width="3%" style="text-align:center">Tetap</td>
												<td width="15%" style="text-align:center">Commercial & Business Development</td>
												<td width="5%" style="text-align:center">Pusat</td>
												<td width="8%" style="text-align:center">12 Oktober 2019<br>09:00 WITA</td>
												<td width="8%" style="text-align:center">12 Oktober 2019</td>
												<td width="8%" style="text-align:center">1/SKP-IM/X/2019</td>
												<td style="text-align:center">- </td>
											  <td width="1%" style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="Disetujui<hr>Muhammad Nasrullah, S.Kom<br>31 Desember 2018 - 14:30 WITA" data-html="true">
														  <i class="fa flaticon2-check-mark"></i>
													  </span></td>
													<td width="1%" style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="Disetujui<hr>Muhammad Nasrullah, S.Kom<br>31 Desember 2018 - 14:30 WITA" data-html="true">
															<i class="fa flaticon2-check-mark"></i>
														</span></td>
												<td width="1%" style="text-align:center" nowrap><button type="button" class="btn btn-warning btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="Menunggu Persetujuan" data-html="true"><i class="fa fa-clock"></i></button></td>
												<td width="3%" style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="detail-pensiun.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="hr-cetak-skpensiun.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-file-invoice"></i>
																				<span class="kt-nav__link-text">Cetak SK Pensiun</span>
																			</a>
																		</li>

																		<li class="kt-nav__item">
																			<a href="edit-pensiun.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa flaticon-edit-1"></i>
																				<span class="kt-nav__link-text">Edit Data</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="hapus-pensiun.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa flaticon2-trash"></i>
																				<span class="kt-nav__link-text">Hapus Data</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div></td>
										  </tr>
										  <tr>
												<td width="1%" id="kt_table_1">3</td>
												<td width="2%" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Amalia Restu Sugiarty S.Tr.Par<hr>Electrical Engineer Supervisor Assistant" data-html="true">
														<img src="../assets/media/users/100_10.jpg" alt="image">
													</a></td>
												<td width="2%" id="kt_table_1">1102019</td>
												<td width="3%" style="text-align:center">Tetap</td>
												<td width="15%" style="text-align:center">Commercial & Business Development</td>
												<td width="5%" style="text-align:center">Pusat</td>
												<td width="8%" style="text-align:center">12 Oktober 2019<br>09:00 WITA</td>
												<td width="8%" style="text-align:center">12 Oktober 2019</td>
												<td width="8%" style="text-align:center">1/SKP-IM/X/2019</td>
												<td style="text-align:center">- </td>
											  <td width="1%" style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="Disetujui<hr>Muhammad Nasrullah, S.Kom<br>31 Desember 2018 - 14:30 WITA" data-html="true">
														  <i class="fa flaticon2-check-mark"></i>
													  </span></td>
													<td width="1%" style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="Disetujui<hr>Muhammad Nasrullah, S.Kom<br>31 Desember 2018 - 14:30 WITA" data-html="true">
															<i class="fa flaticon2-check-mark"></i>
														</span></td>
												<td width="1%" style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="Disetujui<hr>Muhammad Nasrullah, S.Kom<br>31 Desember 2018 - 14:30 WITA" data-html="true">
															<i class="fa flaticon2-check-mark"></i>
														</span></td>
												<td width="3%" style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="detail-pensiun.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="hr-cetak-skpensiun.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-file-invoice"></i>
																				<span class="kt-nav__link-text">Cetak SK Pensiun</span>
																			</a>
																		</li>

																		<li class="kt-nav__item">
																			<a href="edit-pensiun.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa flaticon-edit-1"></i>
																				<span class="kt-nav__link-text">Edit Data</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="hapus-pensiun.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa flaticon2-trash"></i>
																				<span class="kt-nav__link-text">Hapus Data</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div></td>
										  </tr>
										  <tr>
												<td width="1%" id="kt_table_1">4</td>
												<td width="2%" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Amalia Restu Sugiarty S.Tr.Par<hr>Electrical Engineer Supervisor Assistant" data-html="true">
														<img src="../assets/media/users/100_10.jpg" alt="image">
													</a></td>
												<td width="2%" id="kt_table_1">1102019</td>
												<td width="3%" style="text-align:center">Tetap</td>
												<td width="15%" style="text-align:center">Commercial & Business Development</td>
												<td width="5%" style="text-align:center">Pusat</td>
												<td width="8%" style="text-align:center">12 Oktober 2019<br>09:00 WITA</td>
												<td width="8%" style="text-align:center">12 Oktober 2019</td>
												<td width="8%" style="text-align:center">1/SKP-IM/X/2019</td>
												<td style="text-align:center">- </td>
											  <td width="1%" style="text-align:center" nowrap><button type="button" class="btn btn-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="Ditolak" data-html="true"><i class="fa flaticon2-delete"></i></button></td>
													<td width="1%" style="text-align:center" nowrap><button type="button" class="btn btn-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="Ditolak" data-html="true"><i class="fa flaticon2-delete"></i></button></td>
												<td width="1%" style="text-align:center" nowrap><button type="button" class="btn btn-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="Ditolak" data-html="true"><i class="fa flaticon2-delete"></i></button></td>
												<td width="3%" style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="detail-pensiun.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="hr-cetak-skpensiun.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-file-invoice"></i>
																				<span class="kt-nav__link-text">Cetak SK Pensiun</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="print-pensiun.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa flaticon2-print"></i>
																				<span class="kt-nav__link-text">Print</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="edit-pensiun.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa flaticon-edit-1"></i>
																				<span class="kt-nav__link-text">Edit Data</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="hapus-pensiun.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa flaticon2-trash"></i>
																				<span class="kt-nav__link-text">Hapus Data</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div></td>
										  </tr>
										</tbody>
									</table>


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
														<li>
															<a href="#">...</a>
														</li>
														<li>
															<a href="#">29</a>
														</li>
														<li class="kt-pagination__link--active">
															<a href="#">30</a>
														</li>
														<li>
															<a href="#">31</a>
														</li>
														<li>
															<a href="#">32</a>
														</li>
														<li>
															<a href="#">33</a>
														</li>
														<li>
															<a href="#">34</a>
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
<!--begin::Modal 1-->
									<div class="modal fade" id="kt_modal_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet">

										<div class="kt-portlet__body">
											<ul class="nav nav-tabs  nav-tabs-line nav-tabs-line-2x nav-tabs-line-info" role="tablist">
												<li class="nav-item">
													<a class="nav-link active" data-toggle="tab" href="#kt_tabs_7_1" role="tab" aria-selected="true"><i class="la la-check-square"></i> Checklist</a>
												</li>

												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#kt_tabs_7_3" role="tab" aria-selected="false"><i class="la la-repeat"></i> Serah Terima</a>
												</li>
											</ul>
											<div class="tab-content">
												<div class="tab-pane active" id="kt_tabs_7_1" role="tabpanel">
													<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_2">
  <tr style="text-align:center">
    <td width="5%" bgcolor="#f7fcff" >NO</td>
    <td width="80%" bgcolor="#f7fcff">URAIAN</td>

    <td width="8%" bgcolor="#f7fcff">AKSI</td>
  </tr>
  <tr>
    <td style="text-align:center">1</td>
    <td><input type="email" class="form-control form-control-sm" disabled="disabled" placeholder="Surat Penawaran"></td>

    <td width="1%" style="text-align:center"><label class="kt-checkbox kt-checkbox--bold kt-checkbox--danger">
															<input type="checkbox">
															<span></span>
														</label></td>
  </tr>
  <tr>
    <td style="text-align:center">2</td>
    <td><input type="email" class="form-control form-control-sm" disabled="disabled" placeholder="Rencana Anggaran dan Biaya Penawaran"></td>

   <td width="1%" style="text-align:center"><label class="kt-checkbox kt-checkbox--bold kt-checkbox--danger">
															<input type="checkbox">
															<span></span>
														</label></td>
  </tr>
  <tr>
    <td style="text-align:center">3</td>
    <td><input type="email" class="form-control form-control-sm" disabled="disabled" placeholder="Proposal Penawaran" /></td>

   <td width="1%" style="text-align:center"><label class="kt-checkbox kt-checkbox--bold kt-checkbox--danger">
															<input type="checkbox">
															<span></span>
														</label></td>
  </tr>
  <tr>
    <td style="text-align:center">4</td>
    <td><input type="email" class="form-control form-control-sm" disabled="disabled" placeholder="Lampiran Teknis Penawaran" /></td>

    <td width="1%" style="text-align:center"><label class="kt-checkbox kt-checkbox--bold kt-checkbox--danger">
															<input type="checkbox">
															<span></span>
														</label></td>
  </tr>

</table>
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
														<input type="email" class="form-control form-control-sm" disabled="disabled" placeholder="1/IM-TTD/XII/2019">

												</div>

												<div class="col-lg-6">
														<label>Waktu Penyerahan Berkas :</label>
														<div class="form-group">
													<input type="email" class="form-control form-control-sm" disabled="disabled" placeholder="31 Desember 2019 - 15:00 WITA">
												</div>
													</div>

												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
												<div class="col-lg-6">
														<label>Nama Pengirim Berkas :</label>
														<input type="email" class="form-control form-control-sm" disabled="disabled" placeholder="Muhammad Nasrullah, S.Kom">

												</div>

												<div class="col-lg-6">
														<label>Jabatan :</label>
														<input type="email" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Utama">

												</div>


												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
												<div class="col-lg-6">
														<label>Nama Penerima Berkas :</label>
														<input type="email" class="form-control form-control-sm"">

												</div>

												<div class="col-lg-6">
														<label>Jabatan :</label>
														<input type="email" class="form-control form-control-sm" >

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
										<div class="modal-footer modal-footer-center">
											<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
											<button type="button" class="btn btn-success btn-sm"><i class="fa fa-check"></i>  Simpan</button>
										</div>
									</div>
								</div>
							</div>
							<!--End::Modal 1-->
							<!--begin::Modal 2-->
									<div class="modal fade" id="kt_modal_2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
										<div class="kt-portlet kt-portlet--height-fluid-full">
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Assign Project Director</div>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											<div class="form-group row">
												<div class="col-lg-6">
														<label>Nama Pegawai :</label>
														<div class="kt-input-icon kt-input-icon--right">
														<input type="text" class="form-control form-control-sm" placeholder="Search..." id="generalSearch">
														<span class="kt-input-icon__icon kt-input-icon__icon--right">
															<span><i class="la la-search"></i></span>
														</span>
													</div>

												</div>

												<div class="col-lg-6">
														<label>Jabatan :</label>
														<input type="email" class="form-control form-control-sm" disabled="disabled" placeholder="Auto Complete" >

												</div>


												</div>
												</div>

											</div>

									</div>
										<div class="modal-footer modal-footer-center">
											<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
											<button type="button" class="btn btn-success btn-sm"><i class="fa fa-check"></i>  Simpan</button>
										</div>
									</div>
								</div>
							</div>
							<!--End::Modal 2-->
									<!--end: Datatable -->
								</div>

						<!-- end:: Content -->



  </div>
  </div>
  </div>
</div>

									<!--end: Datatable -->
								</div>
							</div>

            </div>


<?php require '../layouts/footer.php' ?>
<script src="../assets/js/pages/custom/user/list-datatable.js" type="text/javascript"></script>
<script src="../assets/js/pages/custom/projects/list-datatable.js" type="text/javascript"></script>
<script src="../assets/js/pages/components/extended/sweetalert2.js" type="text/javascript"></script>
<script>
	function displayLoginBox() {

    if ($("#login_Box_Div:hidden").length) {
        $("#login_Box_Div").slideDown("slow");

    } else if ($("#login_Box_Div:visible").length) {
        $("#login_Box_Div").hide("slow");
    }
}
</script>
<?php require '../layouts/foot.php' ?>
