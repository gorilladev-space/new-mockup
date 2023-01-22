<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4 & Angular 8
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->


<?php require 'layouts-index/head.php' ?>
<!--begin:: Style tambahan -->

<!--end:: Style tambahan -->
<?php require 'layouts-index/header.php' ?>

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

<div class="kt-subheader  kt-grid__item" id="kt_subheader">
	<div class="kt-container  kt-container--fluid ">
		<div class="kt-subheader__main">
                <h3 class="kt-subheader__title">
                    <span class="kt-portlet__head-icon"><i class="kt-font-brand flaticon2-list-1"></i></span>&nbsp;&nbsp;
                    Dashboard Aplikasi
                </h3>
            </div>
	</div>
</div>

            <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
						
													<div class="row">
						<div class="col-lg-12">
							<div class="kt-portlet kt-portlet--height-fluid-full">
										
										<div class="kt-portlet__body">
											<!-- Elemen yang akan menjadi kontainer peta -->
    <div id="googleMap" style="width:100%;height:680px;"></div>
										</div>
									</div>
						</div>
						
						
					</div>
					
						
						
						
					</div>

							
							

<?php require 'layouts-index/footer.php' ?>
<!--begin:: Script tambahan -->
<link href="assets/dist/main/main.css" rel="stylesheet" type="text/css" />
<!--end:: Script tambahan -->
<?php require 'layouts-index/foot.php' ?>
