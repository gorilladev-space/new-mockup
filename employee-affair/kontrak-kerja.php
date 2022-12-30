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
											Data Kontrak Kerja Pegawai
									</h3>

								</div>
								<div class="kt-subheader__toolbar">
<a href="#.php" class="btn btn-label-primary btn-sm" data-toggle="dropdown" onclick="goBack()">
												<i class="flaticon-reply"></i> Kembali</button>
<script>
function goBack() {
  window.history.back();
}
</script>
												<!--<i class="flaticon2-plus"></i>-->
											</a>
											<div>&nbsp;</div>
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
						                        <div class="col-lg-3">
						                          <label>Nama Pegawai :</label>
												  <select class="form-control kt-selectpicker form-control" data-live-search="true">
					 															<optgroup label="Direksi">
					 																<option value="AK"selected >000 000 001 - Yulianti Tomu, SE</option>
																					<option value="HI">000 000 002 - Rizal Asjadad</option>
																					<option value="HI">000 000 003 - Christofher Rio Aviary</option>
																					<option value="HI">000 000 004 - Mu’amar Nor Amin</option>
																					<option value="HI">000 000 005 - Zulfadli Syahrir</option>
					 															</optgroup>
					 															<optgroup label="Umum">
					 																<option value="HI">000 000 006 - Ir. Asrarudin Mamonto, MM</option>
																					<option value="HI">000 000 007 - Sri Suhartini, SE</option>
					 																
					 															</optgroup>
																				<optgroup label="Keuangan dan Asset">
					 																<option value="HI">000 000 006 - Ir. Asrarudin Mamonto, MM</option>
																					<option value="HI">000 000 007 - Sri Suhartini, SE</option>
					 																
					 															</optgroup>
																				<optgroup label="Operasional">
					 																<option value="HI">000 000 006 - Ir. Asrarudin Mamonto, MM</option>
																					<option value="HI">000 000 007 - Sri Suhartini, SE</option>
					 																
					 															</optgroup>
																				<optgroup label="Pengembangan Usaha dan Kerjasama">
					 																<option value="HI">000 000 006 - Ir. Asrarudin Mamonto, MM</option>
																					<option value="HI">000 000 007 - Sri Suhartini, SE</option>
					 																
					 															</optgroup>

					 														</select>

						                        </div>

						                       <div class="col-lg-2">
						                          <label class="">Departemen :</label>
						                          <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="2" selected="">Direksi</option>
                                      <option value="2">Dewan Pengawas</option>
                                      <option value="3">Umum</option>
                                      <option value="4">Keuangan dan Asset</option>
                                      <option value="5">Operasional</option>
                                      <option value="12" >Pengembangan Usaha dan Kerjasama</option>
                                  </select>
						                        </div>
						                        <div class="col-lg-2">
						                          <label>Jabatan :</label>
						                         <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="2">Dewan Pengawas</option>
									  <optgroup label="Direksi">
                                      <option value="2" selected="">Direktur Utama</option>
                                      <option value="2">Direktur Umum</option>
                                      <option value="2">Direktur Keuangan dan Asset</option>
                                      <option value="2">Direktur Operasional</option>
                                      <option value="2">Direktur Pengembangan Usaha dan Kerjasama</option>
									  </optgroup>
                                     
                                  </select>
						                        </div>
												<div class="col-lg-2">
						                          <label class="">NIP :</label>
																			<div class="kt-input-icon kt-input-icon--right">
																 <input type="text" class="form-control form-control-sm" placeholder="Search..." id="generalSearch">
																 <span class="kt-input-icon__icon kt-input-icon__icon--right">
																							 <span><i class="la la-search"></i></span>
																					 </span>
																			 </div>
						                        </div>
												<div class="col-lg-1">
						                          <label class="">Kantor :</label>
						                          <select class="form-control kt-selectpicker" name="param">
																							<option value="AK" selected>Pusat</option>
																							<option value="HI">Cabang Sulawesi Barat</option>
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


							<div class="kt-portlet kt-portlet--mobile ">

								<div class="kt-portlet__body">
									<!--begin: Datatable -->
									<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead style="text-align:center">
											<tr>
												<th width="1%" bgcolor="#f7fcff" rowspan="2">#</th>
												<th width="2%" bgcolor="#f7fcff" rowspan="2">Pegawai</th>
												<th width="2%" bgcolor="#f7fcff" rowspan="2">Nip</th>
												<th width="15%" bgcolor="#f7fcff" rowspan="2">Departement</th>
												<th width="5%" bgcolor="#f7fcff" rowspan="2">Kantor</th>
												<th width="8%" bgcolor="#f7fcff" rowspan="2">No. Kontrak <br>Pegawai</th>
												<th width="8%" bgcolor="#f7fcff" rowspan="2">Tanggal Kontrak <br>Pegawai</th>
												<th width="20%" bgcolor="#f7fcff" rowspan="2">Keterangan</th>
												<th colspan="2" bgcolor="#f7fcff">Verifikasi</th>
												<th width="3%" bgcolor="#f7fcff" rowspan="2">Status</th>
												<th width="3%" bgcolor="#f7fcff" rowspan="2">Aksi</th>
											</tr>
											<tr>
												<th width="1%" bgcolor="#f7fcff">Pegawai</th>
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
												<td width="15%" style="text-align:center">Commercial & Business Development</td>
												<td width="5%" style="text-align:center">Pusat</td>
												<td width="8%" style="text-align:center">No. 07/IM-HRD/IX/2019</td>
												<td width="8%" style="text-align:center">4 September 2018</td>
												<td style="text-align:center">Perpanjangan Kontrak</td>
												<td width="1%" style="text-align:center" nowrap><button type="button" class="btn btn-warning btn-sm btn-icon kt_sweetalert_demo_setuju" data-toggle="kt-tooltip" data-skin="brand" title="Menunggu Persetujuan" data-html="true"><i class="fa fa-clock"></i></button></td>
												<td width="1%" style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="Disetujui<hr>Muhammad Nasrullah, S.Kom<br>31 Desember 2018 - 14:30 WITA" data-html="true">
														  <i class="fa flaticon2-check-mark"></i>
													  </span></td>
												<td width="1%" style="text-align:center" nowrap><button type="button" class="btn btn-warning btn-sm btn-icon kt_sweetalert_demo_setuju" data-toggle="kt-tooltip" data-skin="brand" title="Menunggu Persetujuan" data-html="true"><i class="fa fa-clock"></i></button></td>
												<td width="3%" style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="hr-cetak-kontrak.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="hr-cetak-kontrak.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-file-invoice"></i>
																				<span class="kt-nav__link-text">Cetak Kontrak Pegawai</span>
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
												<td width="15%" style="text-align:center">Commercial & Business Development</td>
												<td width="5%" style="text-align:center">Pusat</td>
												<td width="8%" style="text-align:center">No. 07/IM-HRD/IX/2019</td>
												<td width="8%" style="text-align:center">4 September 2018</td>
												<td style="text-align:center">Kontrak Selama 6 Bulan</td>
											  <td width="1%" style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="Disetujui<hr>Muhammad Nasrullah, S.Kom<br>31 Desember 2018 - 14:30 WITA" data-html="true">
														  <i class="fa flaticon2-check-mark"></i>
													  </span></td>
														<td width="1%" style="text-align:center" nowrap><button type="button" class="btn btn-warning btn-sm btn-icon kt_sweetalert_demo_setuju" data-toggle="kt-tooltip" data-skin="brand" title="Menunggu Persetujuan" data-html="true"><i class="fa fa-clock"></i></button></td>
												<td width="1%" style="text-align:center" nowrap><button type="button" class="btn btn-warning btn-sm btn-icon kt_sweetalert_demo_setuju" data-toggle="kt-tooltip" data-skin="brand" title="Menunggu Persetujuan" data-html="true"><i class="fa fa-clock"></i></button></td>
												<td width="3%" style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="hr-cetak-kontrak.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="hr-cetak-kontrak.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-file-invoice"></i>
																				<span class="kt-nav__link-text">Cetak Kontrak Pegawai</span>
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
												<td width="15%" style="text-align:center">Commercial & Business Development</td>
												<td width="5%" style="text-align:center">Pusat</td>
												<td width="8%" style="text-align:center">No. 07/IM-HRD/IX/2019</td>
												<td width="8%" style="text-align:center">4 September 2018</td>
												<td style="text-align:center">Kontrak Selama 12 Bulan</td>
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
																			<a href="hr-cetak-kontrak.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="hr-cetak-kontrak.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-file-invoice"></i>
																				<span class="kt-nav__link-text">Cetak Kontrak Pegawai</span>
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
												<td width="15%" style="text-align:center">Commercial & Business Development</td>
												<td width="5%" style="text-align:center">Pusat</td>
												<td width="8%" style="text-align:center"></td>
												<td width="8%" style="text-align:center"></td>
												<td style="text-align:center"></td>
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
																				<a href="kontrak-kerja-form.php" class="kt-nav__link">
																					<i class="kt-nav__link-icon fa fa-plus-circle"></i>
																					<span class="kt-nav__link-text">Buat Kontrak Kerja</span>
																				</a>
																			</li>
																	<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-file-invoice"></i>
																				<span class="kt-nav__link-text">Cetak Kontrak Pegawai</span>
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
														<input type="email" class="form-control form-control-sm">

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
<?php require '../layouts/foot.php' ?>
