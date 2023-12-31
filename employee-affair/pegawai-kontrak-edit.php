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
				Edit Profil Pegawai Kontrak
			</h3>

		</div>
		<div class="kt-subheader__toolbar">
			<div class="dropdown dropdown-inline" ddata-placement="left">
				<a href="pegawai.php" class="btn btn-label-primary btn-sm">
					<i class="flaticon-reply"></i> Kembali</button>
					<!--<i class="flaticon2-plus"></i>-->
				</a>
				&nbsp;
			</div>
			<div class="btn-group">
				<button type="button" class="btn btn-brand">
					<i class="la la-check"></i>
					<span class="kt-hidden-mobile">Simpan</span>
				</button>
				
				
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
	<!--Begin::App-->
	<div class="kt-grid kt-grid--desktop kt-grid--ver kt-grid--ver-desktop kt-app">

		<!--Begin:: App Aside Mobile Toggle-->
		<button class="kt-app__aside-close" id="kt_user_profile_aside_close">
			<i class="la la-close"></i>
		</button>

		<!--End:: App Aside Mobile Toggle-->

		<!--Begin:: App Aside-->
		<div class="kt-grid__item kt-app__toggle kt-app__aside" id="kt_user_profile_aside">
			<!--begin:: Widgets/Applications/User/Profile1-->
			<div class="kt-portlet kt-portlet--height-fluid-">
				<div class="kt-portlet__head  kt-portlet__head--noborder">
					<div class="kt-portlet__head-label">
						<h3 class="kt-portlet__head-title">
						</h3>
					</div>
					
				</div>
				<div class="kt-portlet__body kt-portlet__body--fit-y">
					<!--begin::Widget -->
					<div class="kt-widget kt-widget--user-profile-1">
						<div class="form-group row" style="text-align:center">
							<div class="col-lg-12">
								<label>Foto Pegawai :</label>
								<div>&nbsp;</div>
								<div class="kt-avatar kt-avatar--outline kt-avatar--circle-" id="kt_user_edit_avatar">
																			<div class="kt-avatar__holder" style="background-image: url(&quot;../assets/media/users/100_15.jpg&quot;);"></div>


																		</div>
							</div>
						</div>
						<div class="kt-widget__body">
							<div>&nbsp;</div>
							<div class="kt-widget__items">
								<a href="#" data-target="#pegawai" class="kt-widget__item kt-widget__item--active">
									<span class="kt-widget__section">
										<span class="kt-widget__icon">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24" />
													<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
													<path
														d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
														fill="#000000" fill-rule="nonzero" />
												</g>
											</svg> </span>
										<span class="kt-widget__desc">
											Data Pribadi
										</span>
									</span>
								</a>
								<a href="#" data-target="#kepegawaian" class="kt-widget__item kt-widget__item">
									<span class="kt-widget__section">
										<span class="kt-widget__icon">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z" fill="#000000" opacity="0.3"/>
        <path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z" fill="#000000"/>
        <rect fill="#000000" opacity="0.3" x="7" y="10" width="5" height="2" rx="1"/>
        <rect fill="#000000" opacity="0.3" x="7" y="14" width="9" height="2" rx="1"/>
    </g>
											</svg> </span>
										<span class="kt-widget__desc">
											Data Kepegawaian
										</span>
									</span>
								</a>
								<a href="#" data-target="#keluarga" class="kt-widget__item ">
									<span class="kt-widget__section">
										<span class="kt-widget__icon">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<path
														d="M6,7 C7.1045695,7 8,6.1045695 8,5 C8,3.8954305 7.1045695,3 6,3 C4.8954305,3 4,3.8954305 4,5 C4,6.1045695 4.8954305,7 6,7 Z M6,9 C3.790861,9 2,7.209139 2,5 C2,2.790861 3.790861,1 6,1 C8.209139,1 10,2.790861 10,5 C10,7.209139 8.209139,9 6,9 Z"
														fill="#000000" fill-rule="nonzero" />
													<path
														d="M7,11.4648712 L7,17 C7,18.1045695 7.8954305,19 9,19 L15,19 L15,21 L9,21 C6.790861,21 5,19.209139 5,17 L5,8 L5,7 L7,7 L7,8 C7,9.1045695 7.8954305,10 9,10 L15,10 L15,12 L9,12 C8.27142571,12 7.58834673,11.8052114 7,11.4648712 Z"
														fill="#000000" fill-rule="nonzero" opacity="0.3" />
													<path
														d="M18,22 C19.1045695,22 20,21.1045695 20,20 C20,18.8954305 19.1045695,18 18,18 C16.8954305,18 16,18.8954305 16,20 C16,21.1045695 16.8954305,22 18,22 Z M18,24 C15.790861,24 14,22.209139 14,20 C14,17.790861 15.790861,16 18,16 C20.209139,16 22,17.790861 22,20 C22,22.209139 20.209139,24 18,24 Z"
														fill="#000000" fill-rule="nonzero" />
													<path
														d="M18,13 C19.1045695,13 20,12.1045695 20,11 C20,9.8954305 19.1045695,9 18,9 C16.8954305,9 16,9.8954305 16,11 C16,12.1045695 16.8954305,13 18,13 Z M18,15 C15.790861,15 14,13.209139 14,11 C14,8.790861 15.790861,7 18,7 C20.209139,7 22,8.790861 22,11 C22,13.209139 20.209139,15 18,15 Z"
														fill="#000000" fill-rule="nonzero" />
												</g>
											</svg>
										</span>
										<span class="kt-widget__desc">
											Data Keluarga
										</span>
									</span>
								</a>
								<a href="#" data-target="#pendidikan" class="kt-widget__item ">
									<span class="kt-widget__section">
										<span class="kt-widget__icon">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24" />
													<rect fill="#000000" opacity="0.3" x="2" y="3" width="7" height="14" rx="1" />
													<path
														d="M16.6236387,13.0538007 C18.8273383,13.8579339 20.1826034,13.7956508 21,14 C21.5844894,14.1461224 22.1049236,14.4525789 22.5613025,14.9193695 C22.8220479,15.1860635 23.0030223,15.5203564 23.0837834,15.8844876 C23.3229559,16.9628548 22.6426541,18.0309317 21.5642858,18.2700997 C20.2740329,18.5562665 18.7433451,18.7531138 16.9722222,18.8606416 C13.9910551,19.0416332 8.86226533,19.0463278 1.5858528,18.8747253 C1.26005876,18.867042 0.999953435,18.6007302 0.999953435,18.2748455 L1,18.2748455 C1,15.4124758 1,13.3451074 1,12.0727406 C5.24980707,11.6622656 8.09783699,10.5071287 9.54408978,8.60732991 C9.56481367,8.58010699 9.58782802,8.55470651 9.6128812,8.53140618 C9.85553488,8.30572983 10.2351914,8.31949268 10.4608598,8.56215378 C10.8762386,9.00878105 11.2674202,9.41538104 11.6344046,9.78195376 C11.6101853,9.81416566 11.5876475,9.84819014 11.5669873,9.8839746 L10.0669873,12.4820508 C9.79084492,12.9603434 9.95472008,13.5719338 10.4330127,13.8480762 C10.9113053,14.1242186 11.5228957,13.9603434 11.7990381,13.4820508 L13.1335582,11.1705941 C13.630492,11.5858319 14.0581948,11.8865474 14.4166667,12.0727406 C14.5381042,12.1358162 14.6576898,12.1965218 14.7754507,12.2549561 L14.0669873,13.4820508 C13.7908449,13.9603434 13.9547201,14.5719338 14.4330127,14.8480762 C14.9113053,15.1242186 15.5228957,14.9603434 15.7990381,14.4820508 L16.6236387,13.0538007 Z"
														fill="#000000" />
												</g>
											</svg>
										</span>
										<span class="kt-widget__desc">
											Data Pendidikan
										</span>
									</span>
								</a>
								<a href="#" data-target="#sertifikat" class="kt-widget__item ">
									<span class="kt-widget__section">
										<span class="kt-widget__icon">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<path
														d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z"
														fill="#000000" />
													<rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519) " x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
												</g>
											</svg>
										</span>
										<span class="kt-widget__desc">
											Data Sertifikat
										</span>
									</span>
								</a>
								<a href="#" data-target="#pengalaman" class="kt-widget__item">
									<span class="kt-widget__section">
										<span class="kt-widget__icon">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<path
														d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z"
														fill="#000000" opacity="0.3" />
													<path
														d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z"
														fill="#000000" />
												</g>
											</svg>
										</span>
										<span class="kt-widget__desc">
											Pengalaman Kerja
										</span>
									</span>
								</a>
								<a href="#" data-target="#login" class="kt-widget__item">
									<span class="kt-widget__section">
										<span class="kt-widget__icon">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<path
														d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z"
														fill="#000000" opacity="0.3" />
													<path d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z" fill="#000000" opacity="0.3" />
													<path
														d="M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 C14.5228466,17 11.463736,17 7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z"
														fill="#000000" opacity="0.3" />
												</g>
											</svg> </span>
										<span class="kt-widget__desc">
											Ubah Password
										</span>
									</span>
									<!-- <span class="kt-badge kt-badge--unified-danger kt-badge--inline kt-badge--bolder">new</span> -->
								</a>
							</div>
						</div>
					</div>
					<!--end::Widget -->
				</div>
			</div>
			<!--end:: Widgets/Applications/User/Profile1-->
		</div>
		<!--End:: App Aside-->

		<!--Begin:: App Content-->
		<div class="kt-grid__item kt-grid__item--fluid kt-app__content">
			<div class="row s-h" id="pegawai">
				<div class="col-lg-12">
					<div class="kt-portlet kt-portlet--height-fluid-full">
						<div class="kt-portlet__body">
							<div class="row">
								<div class="col-xl-8">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Diri</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
						
						<div class="col-lg-6">
                          <label><span style="color:#ff0000">*</span> Nama Lengkap :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="">
                        </div>
                       <div class="col-lg-2">
                          <label>Gelar Depan :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="Ir">
                        </div>
						<div class="col-lg-2">
                          <label>Gelar Belakang :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="S.Psi">
                        </div>
						<div class="col-lg-2">
                          <label class=""><span style="color:#ff0000">*</span> No. KTP / SIM :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="737112301870002">
                      </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-3">
                          <label class="">Nama Panggilan :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" placeholder=""  >
                      </div>
                        </div>
						<div class="col-lg-3">
                          <label><span style="color:#ff0000">*</span> Jenis Kelamin :</label>
                         <select class="form-control kt-selectpicker" data-live-search="true">
														<option>Pria</option>
														<option>Wanita</option>
														
													</select>
                        </div>
						
						<div class="col-lg-3">
                          <label><span style="color:#ff0000">*</span> Status :</label>
                        <select class="form-control kt-selectpicker" data-live-search="true">
														<option>Single</option>
														<option>Menikah</option>
														<option>Janda</option>
														<option>Duda</option>
														</select>
                        </div>
						<div class="col-lg-3">
                          <label><span style="color:#ff0000">*</span> Agama :</label>
                         <select class="form-control kt-selectpicker" data-live-search="true">
														<option>Islam</option>
														<option>Kristen Protestan</option>
														<option>Kristen Katholik</option>
														<option>Hindu</option>
														<option>Budha</option>
														<option>Konghucu</option>
														</select>
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">

<div class="col-lg-6">
					                           <label class=""><span style="color:#ff0000">*</span> Alamat Lengkap :</label>
					                         <input type="text" class="form-control form-control-sm" placeholder=""  >
					                         </div>
						
						<div class="col-lg-3">
					                           <label class=""><span style="color:#ff0000">*</span> Tempat Kelahiran :</label>
					                         <select class="form-control kt-selectpicker" data-live-search="true">
					 															<optgroup label="Sulawesi Selatan">
					 																<option value="AK">Maros</option>
					 																<option value="AK" selected>Makassar</option>
					 																
					 															</optgroup>

					 														</select>
					                         </div>
						<div class="col-lg-3">
                          <label class=""><span style="color:#ff0000">*</span> Tanggal Kelahiran :</label>
                          <div class="form-group">
                         <div class="input-group date">
													<input type="text" class="form-control form-control-sm" readonly="" placeholder="== Pilih Tanggal ==" id="kt_datepicker_2">
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


						<div class="col-lg-1">
					   <label>Kode Pos</label>
                         <input type="text" class="form-control form-control-sm"  placeholder="90000">

                        </div>
						<div class="col-lg-1">
                          <label>RT :</label>
                          <input type="text" class="form-control form-control-sm"  placeholder="003">
                        </div>
						<div class="col-lg-1">
                          <label>RW :</label>
                          <input type="text" class="form-control form-control-sm"  placeholder="005">
                        </div>
					  <div class="col-lg-3">
                          <label class=""><span style="color:#ff0000">*</span> Provinsi :</label>
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
					  <div class="col-lg-3">
                          <label class=""><span style="color:#ff0000">*</span> No. Tlp / HP :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" placeholder="082244444436" >
                      </div>
                      </div>
					  <div class="col-lg-3">
                          <label class=""><span style="color:#ff0000">*</span> Whatsapp :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" placeholder="082244444436" >
                      </div>
                      </div>

									</div>
									 <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
									<div class="form-group row">
<div class="col-lg-3">
                          <label class=""><span style="color:#ff0000">*</span> Kecamatan :</label>
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

						<div class="col-lg-3">
					                           <label><span style="color:#ff0000">*</span> Kelurahan :</label>
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
						
					  <div class="col-lg-3">
                          <label class=""><span style="color:#ff0000">*</span> Kota :</label>
                           <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Makassar</option>
                                      
                                  </select>
                      </div>
					  <div class="col-lg-3">
                          <label class=""><span style="color:#ff0000">*</span> Email :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" placeholder="xxx@xxx.xxx" >
                      </div>
                      </div>
					  

									</div>
									 
									
									</div>
									
									<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
<div class="form-group row">

						<div class="col-lg-3">
					                           <label><span style="color:#ff0000">*</span> No. Rekening :</label>
                         <input type="text" class="form-control form-control-sm" placeholder="1520017942547">
					                         </div>
						<div class="col-lg-3">
					                           <label class=""><span style="color:#ff0000">*</span> Bank :</label>
                          <select class="form-control kt-selectpicker" data-live-search="true">
														<option>Mandiri</option>
														<option>BNI</option>
														<option>BRI</option>
														<option>BTN</option>
														<option>Bukopin</option>
														<option>Mega</option>
														<option>BCA</option>
														
														</select>
                      </div>
						<div class="col-lg-3">
					                           <label><span style="color:#ff0000">*</span> Nama Pemilik Rekening :</label>
                         <input type="text" class="form-control form-control-sm" placeholder="Isikan Nama Pemilik Rekening">
					                         </div>
											 <div class="col-lg-3">
                          <label class="">NPWP Pribadi :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" placeholder="02.821.616.6-805.000" >
                      </div>
                      </div>

									</div>
									</div>


									</div>
							<!--end:: Portlet-->
</div>
								<div class="col-xl-4">

									<!--begin::Portlet-->
									
<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Alamat Darurat</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">

						<div class="col-lg-12">
                          <label><span style="color:#ff0000">*</span> Alamat Lengkap :</label>
                         <input type="text" class="form-control form-control-sm"  placeholder="Jl. Toddopuli Raya Timur">

                        </div>
						
						
						
						
                        </div>
						 <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						  <div class="form-group row">
                       <div class="col-lg-12">
                         <input type="text" class="form-control form-control-sm"  placeholder="Jl. Toddopuli Raya Timur">

                        </div>
						
						
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
                       <div class="col-lg-6">
					   <label>Kode Pos</label>
                         <input type="text" class="form-control form-control-sm"  placeholder="90000">

                        </div>
						<div class="col-lg-3">
                          <label>RT :</label>
                          <input type="text" class="form-control form-control-sm"  placeholder="003">
                        </div>
						<div class="col-lg-3">
                          <label>RW :</label>
                          <input type="text" class="form-control form-control-sm"  placeholder="005">
                        </div>
						
						
						
                        </div>
						
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						  <div class="form-group row">
                        <div class="col-lg-6">
                          
                                <label>Provinsi :</label>
								
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
							<div class="col-lg-6">
                          
                                <label>Kecamatan :</label>
								
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
						

                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						<div class="col-lg-6">
                          
                                <label>Kelurahan :</label>
								
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
                        <div class="col-lg-6">
                          <label class="">Kota :</label>
                        <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Makassar</option>
                                      <option value="2">Maros</option>
                                     
                                  </select>
                      </div>
					  
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						<div class="col-lg-6">
                          <label class=""><span style="color:#ff0000">*</span> No. Handphone :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm"  placeholder="082244444436">
                      </div>
                        </div>

                        </div>




											</div>

										</div>

									</div>
									</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row s-h" id="kepegawaian" style="display:none">
				<div class="col-lg-12">
					<div class="kt-portlet kt-portlet--height-fluid-full" id="kt_page_portlet">
						<div class="kt-portlet__body">
							<div class="row">
								<div class="col-xl-5">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Kepegawaian</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
																					<div class="col-lg-6">
																						<label>Tipe Pegawai :</label>
																						<input type="text" class="form-control form-control-sm" value="Pegawai Tetap" placeholder="= Pilih Tanggal =" id="kt_datepicker_2" disabled>
																					</div>
																					<div class="col-lg-6">
																						<label>NIP Pegawai :</label>
																						<input type="text" class="form-control form-control-sm" value="012311239933" placeholder="= Pilih Tanggal =" id="kt_datepicker_2" disabled>
																					</div>
																					
																					
																				</div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-6">
																						<label>Kontrak Mulai :</label>
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
						<div class="col-lg-6">
																						<label>Kontrak Berakhir :</label>
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
						<div class="col-lg-6">
																						<label>Department :</label>
																						<select class="form-control form-control kt-selectpicker" id="exampleSelects">
														<option>Direksi</option>
														<option>Dewan Pengawas</option>
														<option>Umum</option>
														<option>Keuangan & Asset</option>
														<option>Operasional</option>
														<option>Pengembangan Usaha dan Kerjasama</option>
														
														</select>
																					</div>
<div class="col-lg-6">
																						<label>Bagian :</label>
																						<select class="form-control form-control kt-selectpicker" id="exampleSelects">
														<option>Umum dan Kepegawaian</option>
														<option>Hukum dan Humas</option>
														<option>Keuangan</option>
														<option>Asset</option>
														<option>Pengelolaan</option>
														<option>Produksi</option>
														<option>Pengembangan</option>
														<option>Kerja Sama</option>
														
														</select>
																					</div>
																					</div>
<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
<div class="col-lg-6">
																						<label>Pangkat / Golongan :</label>
																						<select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="2">Pelaksanan Tingkat I / IV A</option>
                              <option value="2">Pelaksanan Tingkat I / IV B</option>
                              <option value="3">Pelaksanan Tingkat I / IV C</option>
                              <option value="3">Pelaksanan Tingkat I / IV D</option>

                          </select>
																					</div>
						<div class="col-lg-6">
																						<label>Kantor :</label>
																						<select class="form-control form-control kt-selectpicker" id="exampleSelects">
														<option>Pusat</option>
														<option>Cabang</option>
													
														
														</select>
																					</div>

						
                        </div>
                        </div>
						
                     
					  
									<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-12">
																						<label>Jabatan :</label>
																						<select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="2">Dewan Pengawas</option>
                              <option value="2">Direktur Utama</option>
                              <option value="2">Direktur Umum</option>
                              <option value="2">Direktur Keuangan dan Asset</option>
                              <option value="2">Direktur Operasional</option>
                              <option value="2">Direktur Pengembangan Usaha & Kerjasama</option>

                          </select>
																					</div>
						
                        </div>

									

									</div>
									


									</div>
							<!--end:: Portlet-->
</div>
<div class="col-xl-3">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
																							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Atasan Langsung</div><br>
																							<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
																					<div class="col-lg-12">
																						<label>Cari Pegawai :</label>
																						<select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="2">000 000 001 - Yulianti Tomu, SE</option>
                              <option value="2">000 000 002 - Rizal Asjadad</option>
                              <option value="3">000 000 003 - Christofher Rio Aviary</option>
                              <option value="3">000 000 004 - Mu’amar Nor Amin</option>
                              <option value="3">000 000 005 - Zulfadli Syahrir</option>
                              <option value="3">000 000 006 - Ir. Asrarudin Mamonto, MM</option>

                          </select>
																						
																					</div>
																					
																					
																					
																				</div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-12">
																						<label>NIP :</label>
																						<input type="text" class="form-control form-control-sm" value="238 004 032" placeholder="31 Desember 2022" id="kt_datepicker_2" disabled>
																					</div>
						
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-12">
																						<label>Department :</label>
																						<input type="text" class="form-control form-control-sm" value="Umum" placeholder="31 Desember 2022" id="kt_datepicker_2" disabled>
																					</div>

																					</div>
<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-12">
																						<label>Bagian :</label>
																						<input type="text" class="form-control form-control-sm" value="Umum dan Kepegawaian" placeholder="31 Desember 2022" id="kt_datepicker_2" disabled>
																					</div>

						
                        </div>
                        </div>
						
                     
					  
									<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-12">
																						<label>Jabatan :</label>
																					<input type="text" class="form-control form-control-sm" value="Kepala Seksi Administrasi Kepegawaian" placeholder="31 Desember 2022" id="kt_datepicker_2" disabled>
																					</div>

						
                        </div>

									

									</div>
																						</div>

									</div>
									<div class="col-xl-2">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-full kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
																							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Foto Pegawai</div><br>
																							<div class="kt-portlet__body">
																								<div class="kt-portlet__content">
																									<div class="form-group row" style="text-align:center">
																										<div class="col-lg-12">
																											<div>&nbsp;</div>
																											<div class="kt-avatar kt-avatar--outline kt-avatar--circle-" id="kt_user_edit_avatar">
																												<div class="kt-avatar__holder" style="background-image: url(&quot;http://keenthemes.com/metronic/preview/default/custom/user/../assets/media/users/300_20.jpg&quot;);"></div>
																												<label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Upload Foto">
																													<i class="fa fa-pen"></i>
																													<input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg">
																												</label>
																												<span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Batal">
																													<i class="fa fa-times"></i>
																												</span>
																											</div>
																										</div>
																										
																									</div>
																								</div>
																							</div>
																						</div>
<div class="kt-portlet kt-portlet--height-fluid-full kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
																							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Paraf Pegawai</div><br>
																							<div class="kt-portlet__body">
																								<div class="kt-portlet__content">
																									<div class="form-group row" style="text-align:center">
																										<div class="col-lg-12">
																											<div>&nbsp;</div>
																											<div class="kt-avatar kt-avatar--outline kt-avatar--circle-" id="kt_user_edit_avatar">
																												<div class="kt-avatar__holder" style="background-image: url(&quot;http://keenthemes.com/metronic/preview/default/custom/user/../assets/media/users/300_20.jpg&quot;);"></div>
																												<label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Scan Fingerprint">
																													<i class="fa fa-pen"></i>
																													<input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg">
																												</label>
																												<span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Batal">
																													<i class="fa fa-times"></i>
																												</span>
																											</div>
																										</div>
																										
																									</div>
																								</div>
																							</div>
																						</div>

									</div>

									<div class="col-xl-2">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-half kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
																							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Tanda Tangan Pegawai</div><br>
																							<div class="kt-portlet__body">
																								<div class="kt-portlet__content">
																									<div class="form-group row" style="text-align:center">
																										<div class="col-lg-12">
																											<div>&nbsp;</div>
																											<div class="kt-avatar kt-avatar--outline kt-avatar--circle-" id="kt_user_edit_avatar">
																												<div class="kt-avatar__holder" style="background-image: url(&quot;http://keenthemes.com/metronic/preview/default/custom/user/../assets/media/users/300_20.jpg&quot;);"></div>
																												<label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Tanda Tangan">
																													<i class="fa fa-pen"></i>
																													<input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg">
																												</label>
																												<span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Batal">
																													<i class="fa fa-times"></i>
																												</span>
																											</div>
																										</div>
																										
																									</div>
																								</div>
																							</div>
																						</div>
																						<div class="kt-portlet kt-portlet--height-half kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
																							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Fingerprint Pegawai</div><br>
																							<div class="kt-portlet__body">
																								<div class="kt-portlet__content">
																									<div class="form-group row" style="text-align:left">
																										<div class="col-lg-12">
																						<label>UID :</label>
																					<input type="text" class="form-control form-control-sm" placeholder="UID Fingerprint">
																					</div>
																										
																									</div>
																								</div>
																							</div>
																						</div>
																						<div class="kt-portlet kt-portlet--height-half kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
																							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Face Recognize Pegawai</div><br>
																							<div class="kt-portlet__body">
																								<div class="kt-portlet__content">
																									<div class="form-group row" style="text-align:left">
																										<div class="col-lg-12">
																						<label>UID :</label>
																					<input type="text" class="form-control form-control-sm" placeholder="UID Face">
																					</div>
																										
																									</div>
																								</div>
																							</div>
																						</div>

									</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			

			<div class="row s-h" id="keluarga" style="display:none">
				<div class="col-lg-12">
					<div class="kt-portlet kt-portlet--height-fluid-full" id="kt_page_portlet">
						<div class="kt-portlet__body">
							<div class="row">
								<div class="col-xl-12">
									<div class="kt-portlet kt-portlet--height-fluid-full kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
										<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Keluarga</div>
										<div>&nbsp;</div>
										<div class="kt-portlet__body" id="kt_repeater_1">
											<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_repeater_1">
												<thead>
													<tr style="text-align:center">
														<th width="1%" bgcolor="#f7fcff" >#</th>
														<th width="10%" bgcolor="#f7fcff">Hubungan Keluarga</th>
														<th width="10%" bgcolor="#f7fcff">Nama Lengkap</th>
														<th width="10%" bgcolor="#f7fcff">Jenis Kelamin</th>
														<th width="10%" bgcolor="#f7fcff">Tanggal Lahir</th>
														<th width="10%" bgcolor="#f7fcff">Pendidikan Terakhir</th>
														<th width="10%" bgcolor="#f7fcff">Pekerjaan </th>
														<th width="4%" bgcolor="#f7fcff">File</th>
														<th width="1%" bgcolor="#f7fcff">Aksi</th>
													</tr>
												</thead>
												<tbody data-repeater-list="">
													<tr>
														<td style="text-align:center" >1</td>
														<td style="text-align:center" nowrap contenteditable>
															<input type="text" class="form-control form-control-sm" value="Istri" style="border:none !important; background:transparent">
														</td>
														<td style="text-align:left" nowrap contenteditable>
															<input type="text" class="form-control form-control-sm" value="Sri Widya Ningsih, SE" style="border:none !important; background:transparent">
														</td>
														<td style="text-align:center" nowrap>
															<input type="text" class="form-control form-control-sm" value="Perempuan" list="jenkel" name="jenkel" style="border:none !important; background:transparent">
															<datalist id="jenkel">
															  <option value="Laki-Laki">
															  <option value="Perempuan" selected>
														</td>
														<td style="text-align:left" nowrap contenteditable >
															<input type="text" class="form-control form-control-sm" value="27 Desember 1985" id="kt_datepicker_2" style="border:none !important; background:transparent">
														</td>
														<td style="text-align:center" nowrap>
															<input type="text" class="form-control form-control-sm" value="S1" list="pendidik" name="pendidik" style="border:none !important; background:transparent">
															<datalist id="pendidik">
																<option value="SD">
																<option value="SMP">
																<option value="SMA">
																<option value="S1" selected>
																<option value="S2">
																<option value="S3">
																</td>
														<td style="text-align:center" nowrap contenteditable>
															<input type="text" class="form-control form-control-sm" value="Ibu Rumah Tangga" style="border:none !important; background:transparent">
														</td>
														<td style="text-align:center" nowrap>
															<div class="dropdown dropdown-inline">
														<button type="button" class="btn btn-success btn-icon btn-sm btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<i class="flaticon-file-2"></i>
														</button>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#"><i class="la la-plus"></i> Add</a>
															<a class="dropdown-item" href="#"><i class="la la-user"></i> Hapus</a>
															<a class="dropdown-item" href="#"><i class="la la-cloud-download"></i> Download</a>
														</div>
													</div>
															</td>
														<td style="text-align:center" nowrap>
															<button type="button" class="btn btn-success btn-elevate btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Simpan Data"><i class="flaticon2-check-mark"></i></button>
															<a href="javascript:;" data-repeater-delete="" >
																	<button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Hapus Data"><i class="flaticon2-trash"></i></button>
															</a>
														</td>
													</tr>
													<tr data-repeater-item>
														<td style="text-align:center" >2</td>
														<td style="text-align:center" nowrap contenteditable>
															<input type="text" class="form-control form-control-sm" value="Istri" style="border:none !important; background:transparent">
														</td>
														<td style="text-align:left" nowrap contenteditable>
															<input type="text" class="form-control form-control-sm" value="Sri Widya Ningsih, SE" style="border:none !important; background:transparent">
														</td>
														<td style="text-align:center" nowrap>
															<input type="text" class="form-control form-control-sm" value="Perempuan" list="jenkel" name="jenkel" style="border:none !important; background:transparent">
															<datalist id="jenkel">
															  <option value="Laki-Laki">
															  <option value="Perempuan" selected>
														</td>
														<td style="text-align:left" nowrap contenteditable >
															<input type="text" class="form-control form-control-sm" value="27 Desember 1985" id="kt_datepicker_2" style="border:none !important; background:transparent">
														</td>
														<td style="text-align:center" nowrap>
															<input type="text" class="form-control form-control-sm" value="S1" list="pendidik" name="pendidik" style="border:none !important; background:transparent">
															<datalist id="pendidik">
																<option value="SD">
																<option value="SMP">
																<option value="SMA">
																<option value="S1" selected>
																<option value="S2">
																<option value="S3">
																</td>
														<td style="text-align:center" nowrap contenteditable>
															<input type="text" class="form-control form-control-sm" value="Ibu Rumah Tangga" style="border:none !important; background:transparent">
														</td>
														<td style="text-align:center" nowrap >
															<div class="dropdown dropdown-inline">
														<button type="button" class="btn btn-success btn-icon btn-sm btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<i class="flaticon-file-2"></i>
														</button>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item upload-btn-wrapper" href="#"><input type="file" name="myfile" /><i class="la la-plus"></i> Add</a>
															<a class="dropdown-item" href="#"><i class="la la-user"></i> Hapus</a>
															<a class="dropdown-item" href="#"><i class="la la-cloud-download"></i> Download</a>
														</div>
													</div>
														</td>
														<td style="text-align:center" nowrap>	<button type="button" class="btn btn-success btn-elevate btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Simpan Data"><i class="flaticon2-check-mark"></i></button>
															<a href="javascript:;" data-repeater-delete="" >
																	<button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Hapus Data"><i class="flaticon2-trash"></i></button>
															</a>
														</td>
													</tr>
												</tbody>
											</table>
											<a href="javascript:;" data-repeater-create=""><button type="button" class="btn btn-bold btn-sm btn-label-brand"><i class="la la-plus"></i>Add</button></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row s-h" id="pendidikan" style="display:none">
				<div class="col-lg-12">
					<div class="kt-portlet kt-portlet--height-fluid-full" id="kt_page_portlet">
						<div class="kt-portlet__body">
							<div class="row">
								<div class="col-xl-12">
									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid-full kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
										<div class="kt-ribbon__target" style="top: 2px; right: -2px;">History Pendidikan</div>
										<div>&nbsp;</div>
										<div class="kt-portlet__body" id="kt_repeater_2">
											<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_repeater_2">
												<thead>
													<tr style="text-align:center">
														<th width="2%" bgcolor="#f7fcff" id="kt_table_2">#</th>
														<th width="5%" bgcolor="#f7fcff">Jenjang<br>Pendidikan</th>
														<th width="10%" bgcolor="#f7fcff">Jurusan / Fakultas</th>
														<th width="5%" bgcolor="#f7fcff">Tahun Masuk</th>
														<th width="5%" bgcolor="#f7fcff">Tahun Lulus</th>
														<th width="30%" bgcolor="#f7fcff">Nama Sekolah / Universitas</th>
														<th width="6%" bgcolor="#f7fcff">File</th>
														<th width="2%" bgcolor="#f7fcff">Aksi</th>
													</tr>
												</thead>
												<tbody data-repeater-list="">
													<tr>
														<td style="text-align:center" id="kt_table_1">1</td>
														<td style="text-align:center" nowrap>
															<input type="text" class="form-control form-control-sm" value="SD" list="pendidik" name="pendidik" style="border:none !important; background:transparent">
															<datalist id="pendidik">
																<option value="SD">
																<option value="SMP">
																<option value="SMA">
																<option value="S1" selected>
																<option value="S2">
																<option value="S3">
														</td>
														<td style="text-align:center" nowrap>
															<input type="text" class="form-control form-control-sm" value="-" style="border:none !important; background:transparent">
														</td>
														<td style="text-align:center" nowrap>
															<input type="text" class="form-control form-control-sm datepicker" value="1992" style="border:none !important; background:transparent">
														</td>
														<td style="text-align:center" nowrap>
															<input type="text" class="form-control form-control-sm datepicker" value="1998" style="border:none !important; background:transparent">
														</td>
														<td style="text-align:left" nowrap>
															<input type="text" class="form-control form-control-sm" value="SD INPRES 10 PERUMNAS BAIRO PITE" style="border:none !important; background:transparent">
														</td>
														<td style="text-align:center" nowrap>
															<button type="button" class="btn btn-success btn-elevate btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Download dokumen"><i class="flaticon-download-1"></i></button>
														</td>
														<td style="text-align:center" nowrap><button type="button" class="btn btn-success btn-elevate btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Simpan Data"><i class="flaticon2-check-mark"></i></button>
															<a href="javascript:;" data-repeater-delete="" >
																	<button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Hapus Data"><i class="flaticon2-trash"></i></button>
															</a></td>
													</tr>
													<tr data-repeater-item>
														<td style="text-align:center" id="kt_table_1">2</td>
														<td style="text-align:center" nowrap>
															<input type="text" class="form-control form-control-sm" value="SD" list="pendidik" name="pendidik" style="border:none !important; background:transparent">
															<datalist id="pendidik">
																<option value="SD">
																<option value="SMP">
																<option value="SMA">
																<option value="S1" selected>
																<option value="S2">
																<option value="S3">
														</td>
														<td style="text-align:center" nowrap>
															<input type="text" class="form-control form-control-sm" value="-" style="border:none !important; background:transparent">
														</td>
														<td style="text-align:center" nowrap>
															<input type="text" class="form-control form-control-sm datepicker" value="1992" style="border:none !important; background:transparent">
														</td>
														<td style="text-align:center" nowrap>
															<input type="text" class="form-control form-control-sm datepicker" value="1998" style="border:none !important; background:transparent">
														</td>
														<td style="text-align:left" nowrap>
															<input type="text" class="form-control form-control-sm" value="SD INPRES 10 PERUMNAS BAIRO PITE" style="border:none !important; background:transparent">
														</td>
														<td style="text-align:center" nowrap>
															<div class="custom-file">
																<input type="file" class="custom-file-input" id="customFile">
																<label class="custom-file-label" for="customFile"></label>
															</div>
														</td>
														<td style="text-align:center" nowrap><button type="button" class="btn btn-success btn-elevate btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Simpan Data"><i class="flaticon2-check-mark"></i></button>
															<a href="javascript:;" data-repeater-delete="" >
																	<button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Hapus Data"><i class="flaticon2-trash"></i></button>
															</a></td>
													</tr>
												</tbody>
											</table>
											<a href="javascript:;" data-repeater-create=""><button type="button" class="btn btn-bold btn-sm btn-label-brand"><i class="la la-plus"></i>Add</button></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


			<div class="row s-h" id="sertifikat" style="display:none">
				<div class="col-lg-12">
					<div class="kt-portlet kt-portlet--height-fluid-full" id="kt_page_portlet">
						<div class="kt-portlet__body">
							<div class="row">
								<div class="col-xl-12">
									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid-full kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
										<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Sertifikat</div>
										<div>&nbsp;</div>
										<div class="kt-portlet__body" id="kt_repeater_3">
											<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_repeater_3">
												<thead>
													<tr style="text-align:center">
														<th width="1%" bgcolor="#f7fcff" id="kt_table_2">#</th>
														<th width="25%" bgcolor="#f7fcff">Nama Sertifikat</th>
														<th width="20%" bgcolor="#f7fcff">Sertifikat Dikeluarkan Oleh</th>
														<th width="20%" bgcolor="#f7fcff">Lokasi</th>
														<th width="5%" bgcolor="#f7fcff">Tahun<br>Sertifikat</th>
														<th width="6%" bgcolor="#f7fcff">File</th>
														<th width="6%" bgcolor="#f7fcff">Aksi</th>
													</tr>
												</thead>
												<tbody data-repeater-list="">
													<tr>
														<td style="text-align:center" id="kt_table_1">1</td>
														<td style="text-align:left" nowrap>
															<input type="text" class="form-control form-control-sm" value="Microsoft Most Valuable Professional" style="border:none !important; background:transparent">
														</td>
														<td style="text-align:center" nowrap>
															<input type="text" class="form-control form-control-sm" value="Microsoft" style="border:none !important; background:transparent">
														</td>
														<td style="text-align:left" nowrap>
															<input type="text" class="form-control form-control-sm" value="Jakarta" style="border:none !important; background:transparent">
														</td>
														<td style="text-align:center" nowrap>
															<input type="text" class="form-control form-control-sm datepicker" value="2007" style="border:none !important; background:transparent">
														</td>
														<td style="text-align:center" nowrap>
															<button type="button" class="btn btn-success btn-elevate btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Download Sertifikat"><i class="flaticon-download-1"></i></button>
														</td>
														<td><button type="button" class="btn btn-success btn-elevate btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Simpan Data"><i class="flaticon2-check-mark"></i></button>
															<a href="javascript:;" data-repeater-delete="" >
																	<button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Hapus Data"><i class="flaticon2-trash"></i></button>
															</a></td>
														</tr>
													<tr data-repeater-item>
														<td style="text-align:center">2</td>
														<td style="text-align:left" nowrap>
															<input type="text" class="form-control form-control-sm" value="Microsoft Most Valuable Professional" style="border:none !important; background:transparent">
														</td>
														<td style="text-align:center" nowrap>
															<input type="text" class="form-control form-control-sm" value="Microsoft" style="border:none !important; background:transparent">
														</td>
														<td style="text-align:left" nowrap>
															<input type="text" class="form-control form-control-sm" value="Jakarta" style="border:none !important; background:transparent">
														</td>
														<td style="text-align:center" nowrap>
															<input type="text" class="form-control form-control-sm datepicker" value="2007" style="border:none !important; background:transparent">
														</td>
														<td style="text-align:center" nowrap>
															<div class="custom-file">
																<input type="file" class="custom-file-input" id="customFile">
																<label class="custom-file-label" for="customFile"></label>
															</div>
														</td>
														<td><button type="button" class="btn btn-success btn-elevate btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Simpan Data"><i class="flaticon2-check-mark"></i></button>
															<a href="javascript:;" data-repeater-delete="" >
																	<button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Hapus Data"><i class="flaticon2-trash"></i></button>
															</a></td>
														</tr>
												</tbody>
											</table>
											<a href="javascript:;" data-repeater-create=""><button type="button" class="btn btn-bold btn-sm btn-label-brand"><i class="la la-plus"></i>Add</button></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row s-h" id="pengalaman" style="display:none">
	<div class="col-lg-12">
		<div class="kt-portlet kt-portlet--height-fluid-full" id="kt_page_portlet">
			<div class="kt-portlet__body">
				<div class="row">
					<div class="col-xl-12">
						<!--begin::Portlet-->
						<div class="kt-portlet kt-portlet--height-fluid-full kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Pengalaman Kerja</div>
							<div>&nbsp;</div>
							<div class="kt-portlet__body" id="kt_repeater_4">
								<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_repeater_4">
									<thead>
										<tr style="text-align:center">
											<th width="1%" rowspan="2" bgcolor="#f7fcff" id="kt_table_4">#</th>
											<th width="12%" rowspan="2" bgcolor="#f7fcff">Nama Instansi</th>
											<th width="18%" rowspan="2" bgcolor="#f7fcff">Alamat Instansi</th>
											<th colspan="2" bgcolor="#f7fcff">Lama Bekerja</th>
											<th width="14%" rowspan="2" bgcolor="#f7fcff">Jabatan Terakhir</th>
											<th width="4%" rowspan="2" bgcolor="#f7fcff">File</th>
											<th width="2%" rowspan="2" bgcolor="#f7fcff">Aksi</th>
										</tr>
										<tr style="text-align:center">
											<th width="7%" bgcolor="#f7fcff">Awal</th>
											<th width="7%" bgcolor="#f7fcff">Akhir</th>
										</tr>
									</thead>
									<tbody data-repeater-list="">
										<tr>
											<td style="text-align:center" id="kt_table_1">1</td>
											<td style="text-align:left" nowrap>
												<input type="text" class="form-control form-control-sm" value="PT. iLugroup Multimedia Indonesia" style="border:none !important; background:transparent">
											</td>
											<td style="text-align:left" nowrap>
												<input type="text" class="form-control form-control-sm" value="Jl. Toddopuli Raya Timur Kompleks Villa Surya Mas J/9" style="border:none !important; background:transparent">
											</td>
											
											<td style="text-align:center" nowrap>
												<input type="text" class="form-control form-control-sm kt_datepicker_2" value="1 Januari 2019" id="kt_datepicker_2" style="border:none !important; background:transparent">
											</td>
											<td style="text-align:center" nowrap>
												<input type="text" class="form-control form-control-sm kt_datepicker_2" value="31 Desember 2019" id="kt_datepicker_2" style="border:none !important; background:transparent">
											</td>
											<td style="text-align:center" nowrap>
												<input type="text" class="form-control form-control-sm" value="Electrical Engineering Supervisor Assistant" style="border:none !important; background:transparent">
											</td>
											<td style="text-align:center" nowrap>
												<button type="button" class="btn btn-success btn-elevate btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Download Surat<br> Pengalaman Kerja"><i class="flaticon-download-1"></i></button>
											</td>
											<td style="text-align:center" nowrap><button type="button" class="btn btn-success btn-elevate btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Simpan Data"><i class="flaticon2-check-mark"></i></button>
												<a href="javascript:;" data-repeater-delete="" >
														<button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Hapus Data"><i class="flaticon2-trash"></i></button>
												</a></td>
										</tr>
										<tr data-repeater-item>
											<td style="text-align:center" >2</td>
											<td style="text-align:left" nowrap>
												<input type="text" class="form-control form-control-sm" value="PT. iLugroup Multimedia Indonesia" style="border:none !important; background:transparent">
											</td>
											<td style="text-align:left" nowrap>
												<input type="text" class="form-control form-control-sm" value="Jl. Toddopuli Raya Timur Kompleks Villa Surya Mas J/9" style="border:none !important; background:transparent">
											</td>
											
											<td style="text-align:center" nowrap>
												<input type="text" class="form-control form-control-sm kt_datepicker_2" value="1 Januari 2019" id="kt_datepicker_2" style="border:none !important; background:transparent">
											</td>
											<td style="text-align:center" nowrap>
												<input type="text" class="form-control form-control-sm kt_datepicker_2" value="31 Desember 2019" id="kt_datepicker_2" style="border:none !important; background:transparent">
											</td>
											<td style="text-align:center" nowrap>
												<input type="text" class="form-control form-control-sm" value="Electrical Engineering Supervisor Assistant" style="border:none !important; background:transparent">
											</td>
											<td style="text-align:center" nowrap>
												<div class="custom-file">
													<input type="file" class="custom-file-input" id="customFile">
													<label class="custom-file-label" for="customFile"></label>
												</div>
											</td>
											<td style="text-align:center" nowrap><button type="button" class="btn btn-success btn-elevate btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Simpan Data"><i class="flaticon2-check-mark"></i></button>
												<a href="javascript:;" data-repeater-delete="" >
														<button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Hapus Data"><i class="flaticon2-trash"></i></button>
												</a></td>
										</tr>
									</tbody>
								</table>
								<a href="javascript:;" data-repeater-create=""><button type="button" class="btn btn-bold btn-sm btn-label-brand"><i class="la la-plus"></i>Add</button></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row s-h" id="login" style="display:none">
	<div class="col-lg-12">
					<div class="kt-portlet kt-portlet--height-fluid-full" id="kt_page_portlet">
						<div class="kt-portlet__body">
							<div class="row">
								<div class="col-xl-12">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Ubah Password</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
																					<div class="col-lg-4">
																						<label>Password Lama :</label>
																						<div class="kt-input-icon kt-input-icon--right">
													<input type="text" class="form-control form-control-sm kt-input" placeholder="Masukkan Password Lama Anda">
													<span class="kt-input-icon__icon kt-input-icon__icon--right">
														<span>
															<i class="la la-unlock-alt"></i>
														</span>
													</span>
												</div>
																					</div>
																					<div class="col-lg-4">
																						<label>Password Baru:</label>
																						<div class="kt-input-icon kt-input-icon--right">
													<input type="text" class="form-control form-control-sm kt-input" placeholder="Masukkan Password Baru Anda">
													<span class="kt-input-icon__icon kt-input-icon__icon--right">
														<span>
															<i class="la la-unlock-alt"></i>
														</span>
													</span>
												</div>
																						
																					</div>
																					<div class="col-lg-4">
																						<label>Konfirmasi Password Baru:</label>
																						<div class="kt-input-icon kt-input-icon--right">
													<input type="text" class="form-control form-control-sm kt-input" placeholder="Masukkan Lagi Password Baru Anda">
													<span class="kt-input-icon__icon kt-input-icon__icon--right">
														<span>
															<i class="la la-unlock-alt"></i>
														</span>
													</span>
												</div>
																						
																					</div>
																					</div>
																					
																					
																					
																					<div class="kt-portlet__foot kt-align-right">
												<div class="">

													<button type="reset" class="btn btn-brand btn-sm">Kirim</button>
												</div>
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



		</div>
	</div>
</div>

<?php require '../layouts/footer.php' ?>
<script>
	$(".kt-widget__items .kt-widget__item").click(function() {
		$(".s-h").hide();
		var elem = $(this).attr("data-target");
		$(elem).show();
	});

$('.kt-widget__items .kt-widget__item').on('click', function(){
    $('.kt-widget__item.kt-widget__item--active').removeClass('kt-widget__item--active');
    $(this).addClass('kt-widget__item--active');
});

var editable = document.querySelectorAll('div[contentEditable]');
for (var i=0, len = editable.length; i<len; i++){
    editable[i].setAttribute('data-orig',editable[i].innerHTML);

    editable[i].onblur = function(){
        if (this.innerHTML == this.getAttribute('data-orig')) {
            // no change
        }
        else {
            // change has happened, store new value
            this.setAttribute('data-orig',this.innerHTML);
        }
    };
}

$(".datepicker").datepicker({
	format: " yyyy",
	viewMode: "years",
	minViewMode: "years",
	orientation: "bottom"
});


</script>
<?php require '../layouts/foot.php' ?>
