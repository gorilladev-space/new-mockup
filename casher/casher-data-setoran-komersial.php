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
											Data Rekap Setoran Koordinator Pos Komersial
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
						                          <label>Nama Koordinator Pos :</label>
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
						                          <label>Zona :</label>
																		<select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Biringkanaya</option>
                                      <option value="2">Bontoala</option>
                                      <option value="3">Kepulauan Sangkarrang</option>
                                      <option value="4">Makassar</option>
                                      <option value="5">Mamajang</option>
                                      <option value="6">Manggala</option>
                                      <option value="7">Mariso</option>
                                      <option value="8">Panakkukang</option>
                                      <option value="9">Rappocini</option>
                                      <option value="10">Tallo</option>
                                      <option value="11">Tamalanrea</option>
                                      <option value="12">Tamalate</option>
                                      <option value="13">Ujung Pandang</option>
                                      <option value="14">Ujung Tanah</option>
                                      <option value="15">Wajo</option>
                                  </select>
						                        </div>
												<div class="col-lg-2">
						                          <label>POS :</label>
																		  <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">MANDAI SIANG</option>
                                      <option value="2">MANDAI MALAM</option>
                                      <option value="3">KAPASA</option>
                                      <option value="4">NIPA-NIPA</option>
                                      <option value="5">YOS SUDARSO</option>
                                      <option value="6">BTP</option>
                                      <option value="7">CHECK POINT</option>
                                      <option value="8">TEUKU UMAR</option>
                                      <option value="9">ALAUDDIN SIANG</option>
                                      <option value="10">ALAUDDIN MALAM</option>
                                      <option value="11">MALLENGKERI</option>
                                      <option value="12">HERTASNING</option>
                                      <option value="13">KASSI</option>
                                      <option value="14">BAROMBONG</option>
                                      <option value="15">WADUK</option>
                                  </select>
						                        </div>
												
												<div class="col-lg-2">
						                          <label class="">Tanggal Setoran :</label>
						                          <div class="input-group">
						                        <input type="text" class="form-control form-control-sm kt_daterangepicker_2" readonly="" placeholder="Select date range">
						                        <div class="input-group-append">
						                          <span class="input-group-text"><i class="la la-calendar-check-o"></i></span>
						                        </div>
						                      </div>
						                        </div>
												<div class="col-lg-1">
						                          <label>Tipe Pegawai :</label>
																		<select class="form-control kt-selectpicker" data-live-search="true">
						                              <option value="2">Tetap</option>
						                              <option value="3">Kontrak</option>
						                              <option value="3">Honor</option>

						                          </select>
						                        </div>
												<div class="col-lg-2">
						                          <label>Kantor :</label>
																		<select class="form-control kt-selectpicker" data-live-search="true">
						                              <option value="2">Pusat</option>
						                              <option value="3">Cabang Sulawesi Barat</option>

						                          </select>
						                        </div>

						                      </div>


						                      </div>
																	<div class="kt-portlet__foot text-center">
																		<div class="kt-form__actions">
																			<button type="reset" class="btn btn-secondary btn-sm">Reset</button>
																			<button type="reset" class="btn btn-primary btn-sm"><i class="flaticon-interface-6"></i> Filter</button>
																		</div>
																	</div>
																</form>
															</div>

																<!--end::Form-->

							<div class="kt-portlet kt-portlet--last kt-portlet--head-lg kt-portlet--responsive-mobile" id="kt_page_portlet">

                  <form class="kt-form" id="kt_form">
                  <div class="kt-portlet__body">
										<ul class="nav nav-pills nav-fill" role="tablist">
											<li class="nav-item dropdown">
													<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="background:#5d78ff !important; color:#fff !important">2023</a>
													<div class="dropdown-menu">
														<a class="dropdown-item" data-toggle="tab" href="#">2022</a>
														<a class="dropdown-item" data-toggle="tab" href="#">2021</a>
														<a class="dropdown-item" data-toggle="tab" href="#">2020</a>
													</div>
												</li>
												<li class="nav-item">
													<a class="nav-link active" data-toggle="tab" href="#kt_tabs_3_1" >Januari</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#kt_tabs_3_1">Februari</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#kt_tabs_3_1">Maret</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#kt_tabs_3_1">April</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#kt_tabs_3_1">Mei</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#kt_tabs_3_1">Juni</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#kt_tabs_3_1">Juli</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#kt_tabs_3_1">Agustus</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#kt_tabs_3_1">September</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#kt_tabs_3_1">Oktober</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#kt_tabs_3_1">November</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#kt_tabs_3_1">Desember</a>
												</li>
											</ul>
											<div class="tab-content">
												<div class="tab-pane active" id="kt_tabs_3_1" role="tabpanel">
													<table class="table absen table-responsive table-striped- table-bordered table-hover table-checkable">
														<thead style="text-align:center">
															<tr>
																<th width="2%" bgcolor="#f7fcff" rowspan="2">Foto</th>
																<th width="7%" bgcolor="#f7fcff" rowspan="2">Nama Koordinator</th>
																<th width="2%" bgcolor="#f7fcff" rowspan="2">Zona</th>
																<th width="2%" bgcolor="#f7fcff" rowspan="2">Pos</th>
																<th width="1%" bgcolor="#f7fcff">01</th>
																<th width="1%" bgcolor="#f7fcff">02</th>
																<th width="1%" bgcolor="#f7fcff">03</th>
																<th width="1%" bgcolor="#f7fcff">04</th>
																<th width="1%" bgcolor="#f7fcff">05</th>
																<th width="1%" bgcolor="#f7fcff">06</th>
																<th width="1%" bgcolor="#ff0000" style="color: #fff !important">07</th>
																<th width="1%" bgcolor="#f7fcff">08</th>
																<th width="1%" bgcolor="#f7fcff">09</th>
																<th width="1%" bgcolor="#f7fcff">10</th>
																<th width="1%" bgcolor="#f7fcff">11</th>
																<th width="1%" bgcolor="#f7fcff">12</th>
																<th width="1%" bgcolor="#f7fcff">13</th>
																<th width="1%" bgcolor="#ff0000" style="color: #fff !important">14</th>
																<th width="1%" bgcolor="#f7fcff">15</th>
																<th width="1%" bgcolor="#f7fcff">16</th>
																<th width="1%" bgcolor="#f7fcff">17</th>
																<th width="1%" bgcolor="#f7fcff">18</th>
																<th width="1%" bgcolor="#f7fcff">19</th>
																<th width="1%" bgcolor="#f7fcff">20</th>
																<th width="1%" bgcolor="#ff0000" style="color: #fff !important">21</th>
																<th width="1%" bgcolor="#f7fcff">22</th>
																<th width="1%" bgcolor="#f7fcff">23</th>
																<th width="1%" bgcolor="#f7fcff">24</th>
																<th width="1%" bgcolor="#f7fcff">25</th>
																<th width="1%" bgcolor="#f7fcff">26</th>
																<th width="1%" bgcolor="#f7fcff">27</th>
																<th width="1%" bgcolor="#ff0000" style="color: #fff !important">28</th>
																<th width="1%" bgcolor="#f7fcff">29</th>
																<th width="1%" bgcolor="#f7fcff">30</th>
																<th width="1%" bgcolor="#f7fcff">31</th>
															</tr>
															<tr>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">SEN</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">SEL</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">RAB</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">KAM</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">JUM</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">SAB</td>
																<td width="1%" bgcolor="#ff0000" style="color: #fff !important" class="hari">MIN</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">SEN</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">SEL</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">RAB</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">KAM</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">JUM</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">SAB</td>
																<td width="1%" bgcolor="#ff0000" style="color: #fff !important" class="hari">MIN</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">SEN</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">SEL</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">RAB</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">KAM</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">JUM</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">SAB</td>
																<td width="1%" bgcolor="#ff0000" style="color: #fff !important" class="hari">MIN</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">SEN</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">SEL</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">RAB</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">KAM</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">JUM</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">SAB</td>
																<td width="1%" bgcolor="#ff0000" style="color: #fff !important" class="hari">MIN</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">SEN</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">SEL</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">RAB</td>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td colspan="35" bgcolor="#feffe2">Koordinator Pos Komersial</td>
															</tr>
															<tr>
																<td width="1%" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000 000 001" data-html="true">
																		<img src="../assets/media/users/100_7.jpg" alt="image">
																	</a></td>
																<td width="1%" align="center" valign="middle" style="text-align:left">Bungaranna, A.Md</td>
																<td width="1%" align="center" valign="middle" style="text-align:left">Biringkanaya</td>
																<td width="1%" align="center" valign="middle" style="text-align:center">Mandai Siang</td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--info kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Non Tunai<hr>Rp. 1.500.000,-<hr>Transfer Bank" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--info kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Non Tunai<hr>Rp. 1.500.000,-<hr>Transfer Bank" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--info kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Non Tunai<hr>Rp. 1.500.000,-<hr>Transfer Bank" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--info kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Non Tunai<hr>Rp. 1.500.000,-<hr>Transfer Bank" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
															</tr>
															<tr>
																<td width="1%" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000 000 002" data-html="true">
																		<img src="../assets/media/users/100_1.jpg" alt="image">
																	</a></td>
																<td width="1%" align="center" valign="middle" style="text-align:left">Agustian</td>
																<td width="1%" align="center" valign="middle" style="text-align:left">Bontoala</td>
																<td width="1%" align="center" valign="middle" style="text-align:center">Mandai Malam</td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
															</tr>
															<tr>
																<td width="1%" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000 000 003" data-html="true">
																		<img src="../assets/media/users/100_5.jpg" alt="image">
																	</a></td>
																<td width="1%" align="center" valign="middle" style="text-align:left">Sakirman</td>
																<td width="1%" align="center" valign="middle" style="text-align:left">Kepulauan Sangkarrang</td>
																<td width="1%" align="center" valign="middle" style="text-align:center">Kapasa</td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
															</tr>
															<tr>
																<td width="1%" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000 000 004" data-html="true">
																		<img src="../assets/media/users/100_3.jpg" alt="image">
																	</a></td>
																<td width="1%" align="center" valign="middle" style="text-align:left">Asri</td>
																<td width="1%" align="center" valign="middle" style="text-align:left">Makassar</td>
																<td width="1%" align="center" valign="middle" style="text-align:center">Nipa-Nipa</td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--danger kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tidak Ada Setoran" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--danger kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tidak Ada Setoran" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--danger kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tidak Ada Setoran" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--danger kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tidak Ada Setoran" data-html="true"></button></td>
															</tr>
															<tr>
																<td width="1%" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000 000 004" data-html="true">
																		<img src="../assets/media/users/100_8.jpg" alt="image">
																	</a></td>
																<td width="1%" align="center" valign="middle" style="text-align:left">Abdullah Syarifuddin</td>
																<td width="1%" align="center" valign="middle" style="text-align:left">Mamajang</td>
																<td width="1%" align="center" valign="middle" style="text-align:center">Yos Sudarso</td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--danger kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tidak Ada Setoran" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--danger kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tidak Ada Setoran" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--danger kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tidak Ada Setoran" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--danger kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tidak Ada Setoran" data-html="true"></button></td>
															</tr>
															<tr>
																<td width="1%" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000 000 004" data-html="true">
																		<img src="../assets/media/users/100_9.jpg" alt="image">
																	</a></td>
																<td width="1%" align="center" valign="middle" style="text-align:left">Akbar</td>
																<td width="1%" align="center" valign="middle" style="text-align:left">Mariso</td>
																<td width="1%" align="center" valign="middle" style="text-align:center">BTP</td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--danger kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tidak Ada Setoran" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--danger kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tidak Ada Setoran" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--danger kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tidak Ada Setoran" data-html="true"></button></td>
															</tr>
															<tr>
																<td width="1%" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000 000 004" data-html="true">
																		<img src="../assets/media/users/100_13.jpg" alt="image">
																	</a></td>
																<td width="1%" align="center" valign="middle" style="text-align:left">Sudirman	</td>
																<td width="1%" align="center" valign="middle" style="text-align:left">Manggala</td>
																<td width="1%" align="center" valign="middle" style="text-align:center">Check Point</td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
															</tr>
<tr>
																<td width="1%" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000 000 004" data-html="true">
																		<img src="../assets/media/users/300_21.jpg" alt="image">
																	</a></td>
																<td width="1%" align="center" valign="middle" style="text-align:left">Suardi	</td>
																<td width="1%" align="center" valign="middle" style="text-align:left">Manggala</td>
																<td width="1%" align="center" valign="middle" style="text-align:center">Teuku Umar</td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--danger kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tidak Ada Setoran" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--danger kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tidak Ada Setoran" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--danger kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tidak Ada Setoran" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--danger kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tidak Ada Setoran" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--danger kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tidak Ada Setoran" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tunai<hr>Rp. 1.500.000,-<hr>Nama Kasir" data-html="true"></button></td>
															</tr>
<tr>
																<td width="1%" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000 000 004" data-html="true">
																		<img src="../assets/media/users/300_22.jpg" alt="image">
																	</a></td>
																<td width="1%" align="center" valign="middle" style="text-align:left">Jupriadi	</td>
																<td width="1%" align="center" valign="middle" style="text-align:left">Manggala</td>
																<td width="1%" align="center" valign="middle" style="text-align:center">Alauddin Siang</td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
															</tr>
<tr>
																<td width="1%" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000 000 004" data-html="true">
																		<img src="../assets/media/users/300_23.jpg" alt="image">
																	</a></td>
																<td width="1%" align="center" valign="middle" style="text-align:left">Budi Mulyawan	</td>
																<td width="1%" align="center" valign="middle" style="text-align:left">Manggala</td>
																<td width="1%" align="center" valign="middle" style="text-align:center">Alauddin Malam</td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
															</tr>
<tr>
																<td width="1%" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000 000 004" data-html="true">
																		<img src="../assets/media/users/300_24.jpg" alt="image">
																	</a></td>
																<td width="1%" align="center" valign="middle" style="text-align:left">Sila	</td>
																<td width="1%" align="center" valign="middle" style="text-align:left">Manggala</td>
																<td width="1%" align="center" valign="middle" style="text-align:center">Mallengkeri</td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
															</tr>
<tr>
																<td width="1%" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000 000 004" data-html="true">
																		<img src="../assets/media/users/user2.jpg" alt="image">
																	</a></td>
																<td width="1%" align="center" valign="middle" style="text-align:left">Mappatunru, A.Md	</td>
																<td width="1%" align="center" valign="middle" style="text-align:left">Manggala</td>
																<td width="1%" align="center" valign="middle" style="text-align:center">Hertasning</td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
															</tr>
<tr>
																<td width="1%" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000 000 004" data-html="true">
																		<img src="../assets/media/users/user4.jpg" alt="image">
																	</a></td>
																<td width="1%" align="center" valign="middle" style="text-align:left">Abdul Rasyid	</td>
																<td width="1%" align="center" valign="middle" style="text-align:left">Manggala</td>
																<td width="1%" align="center" valign="middle" style="text-align:center">Kassi</td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
															</tr>
<tr>
																<td width="1%" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000 000 004" data-html="true">
																		<img src="../assets/media/users/300_14.jpg" alt="image">
																	</a></td>
																<td width="1%" align="center" valign="middle" style="text-align:left">Ispandi Syarifuddin	</td>
																<td width="1%" align="center" valign="middle" style="text-align:left">Manggala</td>
																<td width="1%" align="center" valign="middle" style="text-align:center">Barombong</td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
															</tr>
<tr>
																<td width="1%" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000 000 004" data-html="true">
																		<img src="../assets/media/users/100_12.jpg" alt="image">
																	</a></td>
																<td width="1%" align="center" valign="middle" style="text-align:left">Syamsir Siri Saing	</td>
																<td width="1%" align="center" valign="middle" style="text-align:left">Manggala</td>
																<td width="1%" align="center" valign="middle" style="text-align:center">Waduk</td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--danger kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tidak Ada Setoran" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--danger kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tidak Ada Setoran" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--danger kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tidak Ada Setoran" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--danger kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tidak Ada Setoran" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--danger kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tidak Ada Setoran" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Libur" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Setoran : <hr>Rp. 1.500.000,- <hr> Koordinator : <hr>Suardi, S" data-html="true"></button></td>
															</tr>
															
															
															
														</tbody>
													</table>

					<label> Keterangan : </label>
					<div class="kt-section__content kt-section__content--solid mt-3">
			<span class="kt-badge kt-badge--success kt-badge--xlkt-badge--bold mr-3" data-container="body" data-toggle="kt-popover" data-placement="top" data-content="Setoran Tunai" data-original-title="" title=""></span>
			<span class="kt-badge kt-badge--info kt-badge--xlkt-badge--bold mr-3" data-container="body" data-toggle="kt-popover" data-placement="top" data-content="Setoran Non Tunai" data-original-title="" title=""></span>
            <span class="kt-badge kt-badge--danger kt-badge--xlkt-badge--bold mr-3" data-container="body" data-toggle="kt-popover" data-placement="top" data-content="Tidak Ada Setoran" data-original-title="" title=""></span>
						<span class="kt-badge kt-badge--unified-brand kt-badge--xlkt-badge--bold mr-3" data-container="body" data-toggle="kt-popover" data-placement="top" data-content="Libur" data-original-title="" title="" style="background:rgb(235, 237, 242) !important"></span>
          </div>

												</div>
												 <!-- begin:: pageline -->
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
                    <!-- end:: pageline -->
											</div>
                    </div>

                  </form>
                  </div>
						</div>

									<!--end: Datatable -->
								</div>
							</div>

            </div>


<?php require '../layouts/footer.php' ?>
<?php require '../layouts/foot.php' ?>
