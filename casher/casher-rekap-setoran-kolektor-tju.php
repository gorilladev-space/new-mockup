<?php require '../layouts/head.php' ?>
<?php require 'layouts/header.php' ?>
<!-- Menyisipkan library Google Maps -->
    <script src="http://maps.googleapis.com/maps/api/js"></script>

    <script>
        // fungsi initialize untuk mempersiapkan peta
        function initialize() {
        var propertiPeta = {
            center:new google.maps.LatLng(-5.16081,119.395713),
            zoom:15,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };
        
        var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
        }

        // event jendela di-load  
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <!-- begin:: Content Head -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">
                    <span class="kt-portlet__head-icon"><i class="kt-font-brand flaticon2-list-1"></i></span>&nbsp;&nbsp;
                    Rekap Setoran Kolektor
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
                                <label class="">Tanggal Setoran :</label>
                                <div class="input-group">
						                        <input type="text" class="form-control form-control-sm kt_daterangepicker_2" readonly="" placeholder="-- Pilih Tanggal --">
						                        <div class="input-group-append">
						                          <span class="input-group-text"><i class="la la-calendar"></i></span>
						                        </div>
						                      </div>
                            </div>
                            
								<div class="col-lg-2">
                                <label>Nama Kolektor :</label>
								
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
                                <label>Wilayah :</label>
								
                                 <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Bakung</option>
                                      <option value="2">Berua</option>
                                      <option value="3">Bulurokeng</option>
                                      <option value="4">Daya</option>
                                      <option value="5">Katimbang</option>
                                      <option value="6">Laikang</option>
                                      <option value="7">Paccerakkang</option>
                                      <option value="8">Pai</option>
                                      <option value="9">Sudiang</option>
                                      <option value="10">Sudiang Raya</option>
                                      <option value="11">Untia</option>
                                     
                                  </select>
                            </div>
							<div class="col-lg-2">
                                <label>Nama Kasir :</label>
								
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
								
								
                            
							
                            
							
							
							<div class="col-lg-1">
                                <label>Tipe Transaksi :</label>
								
                                <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Tunai</option>
                                      <option value="2">Non Tunai</option>
                                                                           
                                  </select>
                            </div>
							<div class="col-lg-1">
                                <label>Status :</label>
								
                                <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Sesuai</option>
                                      <option value="2">Kurang Setor</option>
                                      <option value="2">Lebih Setor</option>
                                                                           
                                  </select>
                            </div>
							
							
                            </div>
							
							<br>
							
							
						
					<div class="kt-portlet__foot text-center">
						<div class="kt-form__actions">
							<button type="reset" class="btn btn-outline-brand btn-sm">Reset</button>
							<button type="reset" class="btn btn-primary btn-sm"><i class="flaticon-interface-6"></i>Filter Data</button>
						</div>
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
											  <th width="1%" rowspan="2" bgcolor="#f7fcff" id="kt_table_2">Tanggal<br /></th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff" id="kt_table_2">Waktu</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff" id="kt_table_2">Tipe</th>
											  <th colspan="3" bgcolor="#f7fcff" id="kt_table_2">Kolektor</th>
											  <th width="5%" rowspan="2" bgcolor="#f7fcff">Kasir</th>
											  <th colspan="3" bgcolor="#f7fcff">Pembayaran</th>
											  <th width="8%" colspan="4" bgcolor="#feffed">Setoran</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Aksi</th>
										  </tr>
											<tr style="text-align:center">
											  <th width="5%" bgcolor="#f7fcff">Nama</th>
											  <th width="5%" bgcolor="#f7fcff">Zona</th>
											  <th width="5%" bgcolor="#f7fcff">Wilayah</th>
											  <th width="1%" bgcolor="#f7fcff">ID</th>
											  <th width="1%" bgcolor="#f7fcff">Metode</th>
											  <th width="1%" bgcolor="#f7fcff">Provider</th>
											  <th width="8%" bgcolor="#feffed">Target Setoran</th>
											  <th width="8%" bgcolor="#feffed">Nominal Setoran</th>
											  <th width="8%" bgcolor="#feffed">Selisih Setoran</th>
											  <th width="1%" bgcolor="#feffed">Status</th>
									      </tr>
										</thead>
										<tbody>
											<tr>
												<td id="kt_table_1">1</td>
												<td nowrap="nowrap" style="text-align:center">23 Agustus 2023<br /></td>
												<td nowrap="nowrap" style="text-align:center">18:20:00</td>
												<td nowrap="nowrap" style="text-align:center"><span class="kt-badge kt-badge--danger kt-badge--md kt-badge--inline">Tunai</span></td>
												<td nowrap="nowrap" style="text-align:left">Umar Malik, SE</td>
												<td nowrap="nowrap" style="text-align:center">Biringkanaya</td>
												<td nowrap="nowrap" style="text-align:center">Bakung</td>
												<td nowrap="nowrap" style="text-align:center">Nama Kasir</td>
												<td nowrap="nowrap" style="text-align:center">0003PTTJU823</td>
												<td nowrap="nowrap" style="text-align:center">Cash</td>
												<td nowrap="nowrap" style="text-align:center">-</td>
												<td nowrap="nowrap" style="text-align:center"><div class="input-group input-group-sm">
												  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
												  <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="4.000.000" aria-describedby="basic-addon1" />
												  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
												  </div>
												  </div>
												  </div></td>
												<td nowrap="nowrap" style="text-align:center"><div class="input-group input-group-sm">
												  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
												  <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="3.000.000" aria-describedby="basic-addon1" />
												  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
												  </div>
												  </div>
												  </div></td>
												<td nowrap="nowrap" style="text-align:center"><div class="input-group input-group-sm">
												  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
												  <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="1.000.000" aria-describedby="basic-addon1" />
												  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
												  </div>
												  </div>
												  </div></td>
												<td nowrap="nowrap" style="text-align:center"><span class="kt-badge kt-badge--danger kt-badge--md kt-badge--inline">Kurang Setor</span></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="casher-rekap-setoran-kolektor-tju.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																		
																		
																		
																		
																		
																		
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																			
																		</li>
																		
																	</ul>
																</div>
															</div></td>
										  </tr>
										  <tr>
												<td id="kt_table_1">2</td>
												<td nowrap="nowrap" style="text-align:center">23 Agustus 2023<br /></td>
												<td nowrap="nowrap" style="text-align:center">18:20:00</td>
												<td nowrap="nowrap" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Non Tunai</span></td>
												<td nowrap="nowrap" style="text-align:left">Leony Hesti Kilala</td>
												<td nowrap="nowrap" style="text-align:center">Biringkanaya</td>
												<td nowrap="nowrap" style="text-align:center">Bakung</td>
												<td nowrap="nowrap" style="text-align:center">Online</td>
												<td nowrap="nowrap" style="text-align:center">0002PNTTJU823</td>
												<td nowrap="nowrap" style="text-align:center">Bank Transfer</td>
												<td nowrap="nowrap" style="text-align:center">Bank Central Asia</td>
												<td nowrap="nowrap" style="text-align:center"><div class="input-group input-group-sm">
												  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
												  <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="4.550.000" aria-describedby="basic-addon1" />
												  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
												  </div>
												  </div>
												  </div></td>
												<td nowrap="nowrap" style="text-align:center"><div class="input-group input-group-sm">
												  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
												  <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="4.550.000" aria-describedby="basic-addon1" />
												  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
												  </div>
												  </div>
												  </div></td>
												<td nowrap="nowrap" style="text-align:center"><div class="input-group input-group-sm">
												  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
												  <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="0" aria-describedby="basic-addon1" />
												  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
												  </div>
												  </div>
												  </div></td>
												<td nowrap="nowrap" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Sesuai</span></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="casher-rekap-setoran-kolektor-tju.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																		
																		
																		
																		
																		
																		
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																			
																		</li>
																		
																	</ul>
																</div>
															</div></td>
										  </tr>

<tr>
												<td id="kt_table_1">3</td>
												<td nowrap="nowrap" style="text-align:center">23 Agustus 2023<br /></td>
												<td nowrap="nowrap" style="text-align:center">18:21:00</td>
												<td nowrap="nowrap" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Non Tunai</span></td>
												<td nowrap="nowrap" style="text-align:left">Muslimin</td>
												<td nowrap="nowrap" style="text-align:center">Biringkanaya</td>
												<td nowrap="nowrap" style="text-align:center">Bakung</td>
												<td nowrap="nowrap" style="text-align:center">Online</td>
												<td nowrap="nowrap" style="text-align:center">0001PNTTJU823</td>
												<td nowrap="nowrap" style="text-align:center">GoPay</td>
												<td nowrap="nowrap" style="text-align:center">-</td>
												<td nowrap="nowrap" style="text-align:center"><div class="input-group input-group-sm">
												  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
												  <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="4.550.000" aria-describedby="basic-addon1" />
												  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
												  </div>
												  </div>
												  </div></td>
												<td nowrap="nowrap" style="text-align:center"><div class="input-group input-group-sm">
												  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
												  <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="4.550.000" aria-describedby="basic-addon1" />
												  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
												  </div>
												  </div>
												  </div></td>
												<td nowrap="nowrap" style="text-align:center"><div class="input-group input-group-sm">
												  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
												  <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="0" aria-describedby="basic-addon1" />
												  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
												  </div>
												  </div>
												  </div></td>
												<td nowrap="nowrap" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Sesuai</span></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="casher-rekap-setoran-kolektor-tju.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																		
																		
																		
																		
																		
																		
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																			
																		</li>
																		
																	</ul>
																</div>
															</div></td>
										  </tr>
									    </tbody>
									</table>
                    <!--end: Datatable -->

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
			<!--begin::Modal 1-->
									<div class="modal fade" id="serah-terima-atribut" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand flaticon2-list"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger">SERAH TERIMA ID CARD</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
											
											&nbsp;
												<button type="button" class="btn btn-secondary btn-sm btn-outline-danger" data-dismiss="modal">X</button>
											</div>
										</div>

										<div class="kt-portlet__body">
											<div class="tab-content">
												<div class="m-portlet m-portlet--tabs">
									
									<div class="m-portlet__body">
										<div class="tab-content">
											<div class="tab-pane active" id="m_tabs_6_1" role="tabpanel">
												<div class="kt-grid__item kt-grid__item--fluid kt-app__content">
									<div class="row">
										<div class="col-lg-6">
                      <div class="row">
								<div class="col-xl-12">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Mitra Jukir</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
						
						<div class="col-lg-12">
                          <label><span style="color:#ff0000">*</span> Nama Lengkap :</label>
                           <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="HARIS DAENG PAWA">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
                       <div class="col-lg-12">
                          <label>ID Mitra :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="0000000001">
                        </div>
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-12">
                          <label class="">Zona :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Kepulauan Sangkarrang">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> Wil :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="I">
                        </div>
						<div class="col-lg-8">
                          <label><span style="color:#ff0000">*</span> Titik Parkir :</label>
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Coto Nusantara">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                    
					  
                     
									</div>
									
									
									</div>


									</div>
							<!--end:: Portlet-->
</div>



										</div>




									</div>
									<div class="col-lg-6">
                      <div class="row">
								<div class="col-xl-12">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Anda</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
						
						<div class="col-lg-12">
                          <label><span style="color:#ff0000">*</span> Nama Pegawai :</label>
                           <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="HARIS DAENG PAWA">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
                       <div class="col-lg-6">
                          <label>NPP :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="000 000 001">
                        </div>
						<div class="col-lg-6">
                          <label>Kantor :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pusat">
                        </div>
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-12">
                          <label class="">Department :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pengembangan Usaha & Kerja Sama">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-12">
                          <label><span style="color:#ff0000">*</span> Jabatan :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Pengembangan Usaha & Kerjasama">
                        </div>
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                    
					  
                     
									</div>
									
									
									</div>


									</div>
							<!--end:: Portlet-->
</div>



										</div>




									</div>
									<div class="col-lg-6">
                      <div class="row">
								<div class="col-xl-12">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Tanda Tangan Mitra Jukir</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
						
						<div class="col-lg-12">
                          <div class="swal2-content"><label for="swal2-checkbox" class="swal2-checkbox" style="display: none;"><input type="checkbox"><span class="swal2-label"></span></label><textarea class="swal2-textarea" placeholder="" style="display: flex;"></textarea><div class="swal2-validation-message" id="swal2-validation-message"></div></div>
                        </div>
                       
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     
                    
					  
                     
									</div>
									
									
									</div>


									</div>
							<!--end:: Portlet-->
</div>



										</div>




									</div>
									<div class="col-lg-6">
                      <div class="row">
								<div class="col-xl-12">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Tanda Tangan Anda</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
						
						<div class="col-lg-12">
                          <div class="swal2-content"><label for="swal2-checkbox" class="swal2-checkbox" style="display: none;"><input type="checkbox"><span class="swal2-label"></span></label><textarea class="swal2-textarea" placeholder="" style="display: flex;"></textarea><div class="swal2-validation-message" id="swal2-validation-message"></div></div>
                        </div>
                       
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     
                    
					  
                     
									</div>
									
									
									</div>


									</div>
							<!--end:: Portlet-->
</div>



										</div>




									</div>

							<!--end:: Portlet-->


          </div>



								</div>
											</div>
											
											
											
											
											
											
										</div>
									</div>
								</div>
												
									<div class="kt-portlet__foot kt-align-center">
												<div class="">

													<a href="datamitraparkir.php" class="btn btn-label-primary btn-sm" data-toggle="dropdown" onclick="goBack()">
												<i class="flaticon-reply"></i> Kembali</button>
<script>
function goBack() {
  window.history.back();
}
</script>
												<!--<i class="flaticon2-plus"></i>-->
											</a>&nbsp;
									<a href="#" class="btn btn-label-primary btn-sm">
															<span>
																<i class="fa fa-print"></i>
																<span>Print ID Card</span>
															</span>
														</a>
												
													<div class="btn-group">
				<button type="button" class="btn btn-sm btn-success">
					<i class="fa fa-check-circle"></i>
					<span class="kt-hidden-mobile">Simpan</span>
				</button>
				
				
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
									<div class="modal fade" id="serah-terima-rompi" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand flaticon2-list"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger">SERAH TERIMA ROMPI</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
											
											&nbsp;
												<button type="button" class="btn btn-secondary btn-sm btn-outline-danger" data-dismiss="modal">X</button>
											</div>
										</div>

										<div class="kt-portlet__body">
											<div class="tab-content">
												<div class="m-portlet m-portlet--tabs">
									
									<div class="m-portlet__body">
										<div class="tab-content">
											<div class="tab-pane active" id="m_tabs_6_1" role="tabpanel">
												<div class="kt-grid__item kt-grid__item--fluid kt-app__content">
									<div class="row">
										<div class="col-lg-6">
                      <div class="row">
								<div class="col-xl-12">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Mitra Jukir</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
						
						<div class="col-lg-12">
                          <label><span style="color:#ff0000">*</span> Nama Lengkap :</label>
                           <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="HARIS DAENG PAWA">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
                       <div class="col-lg-12">
                          <label>ID Mitra :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="0000000001">
                        </div>
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-12">
                          <label class="">Zona :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Kepulauan Sangkarrang">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> Wil :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="I">
                        </div>
						<div class="col-lg-8">
                          <label><span style="color:#ff0000">*</span> Titik Parkir :</label>
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Coto Nusantara">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                    
					  
                     
									</div>
									
									
									</div>


									</div>
							<!--end:: Portlet-->
</div>



										</div>




									</div>
									<div class="col-lg-6">
                      <div class="row">
								<div class="col-xl-12">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Anda</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
						
						<div class="col-lg-12">
                          <label><span style="color:#ff0000">*</span> Nama Pegawai :</label>
                           <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="HARIS DAENG PAWA">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
                       <div class="col-lg-6">
                          <label>NPP :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="000 000 001">
                        </div>
						<div class="col-lg-6">
                          <label>Kantor :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pusat">
                        </div>
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-12">
                          <label class="">Department :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pengembangan Usaha & Kerja Sama">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-12">
                          <label><span style="color:#ff0000">*</span> Jabatan :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Pengembangan Usaha & Kerjasama">
                        </div>
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                    
					  
                     
									</div>
									
									
									</div>


									</div>
							<!--end:: Portlet-->
</div>



										</div>




									</div>
									<div class="col-lg-6">
                      <div class="row">
								<div class="col-xl-12">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Tanda Tangan Mitra Jukir</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
						
						<div class="col-lg-12">
                          <div class="swal2-content"><label for="swal2-checkbox" class="swal2-checkbox" style="display: none;"><input type="checkbox"><span class="swal2-label"></span></label><textarea class="swal2-textarea" placeholder="" style="display: flex;"></textarea><div class="swal2-validation-message" id="swal2-validation-message"></div></div>
                        </div>
                       
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     
                    
					  
                     
									</div>
									
									
									</div>


									</div>
							<!--end:: Portlet-->
</div>



										</div>




									</div>
									<div class="col-lg-6">
                      <div class="row">
								<div class="col-xl-12">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Tanda Tangan Anda</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
						
						<div class="col-lg-12">
                          <div class="swal2-content"><label for="swal2-checkbox" class="swal2-checkbox" style="display: none;"><input type="checkbox"><span class="swal2-label"></span></label><textarea class="swal2-textarea" placeholder="" style="display: flex;"></textarea><div class="swal2-validation-message" id="swal2-validation-message"></div></div>
                        </div>
                       
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     
                    
					  
                     
									</div>
									
									
									</div>


									</div>
							<!--end:: Portlet-->
</div>



										</div>




									</div>

							<!--end:: Portlet-->


          </div>



								</div>
											</div>
											
											
											
											
											
											
										</div>
									</div>
								</div>
												
									<div class="kt-portlet__foot kt-align-center">
												<div class="">

													<a href="datamitraparkir.php" class="btn btn-label-primary btn-sm" data-toggle="dropdown" onclick="goBack()">
												<i class="flaticon-reply"></i> Kembali</button>
<script>
function goBack() {
  window.history.back();
}
</script>
												<!--<i class="flaticon2-plus"></i>-->
											</a>&nbsp;
									<a href="#" class="btn btn-label-primary btn-sm">
															<span>
																<i class="fa fa-print"></i>
																<span>Print ID Card</span>
															</span>
														</a>
												
													<div class="btn-group">
				<button type="button" class="btn btn-sm btn-success">
					<i class="fa fa-check-circle"></i>
					<span class="kt-hidden-mobile">Simpan</span>
				</button>
				
				
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
							<!--End::Modal 2-->
        </div>
    </div>

<?php require '../layouts/footer.php' ?>
<?php require '../layouts/foot.php' ?>
