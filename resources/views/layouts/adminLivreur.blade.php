<html lang="en" dir="ltr"><!-- Mirrored from maraviyainfotech.com/projects/ekka/ekka-v36/ekka-admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Oct 2023 18:21:02 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Ekka - Admin Dashboard eCommerce HTML Template.">

	<title>Ekka - Admin Dashboard eCommerce HTML Template.</title>

	<!-- GOOGLE FONTS -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@400;500;700;900&amp;display=swap" rel="stylesheet"> 

	<link href="../../../../../cdn.jsdelivr.net/npm/%40mdi/font%404.4.95/css/materialdesignicons.min.css" rel="stylesheet">

	<!-- PLUGINS CSS STYLE -->
	<link href="assets/plugins/daterangepicker/daterangepicker.css" rel="stylesheet">
	<link href="assets/plugins/simplebar/simplebar.css" rel="stylesheet">

	<!-- Ekka CSS -->
	<link id="ekka-css" href="assets/css/ekka.css" rel="stylesheet">

	<!-- FAVICON -->
	<link href="assets/img/favicon.png" rel="shortcut icon">









	<style>
  .image-scroll-container {
    overflow-x: auto;
    white-space: nowrap; /* Prevents images from wrapping to the next line */
  }

  .horizontal-scroll-wrapper {
    display: flex; /* Enable flex container */
  }

  .horizontal-scroll-wrapper img {
    flex: 0 0 auto; /* Don't grow or shrink the images */
    margin-right: 10px; /* Add some space between images */
  }
</style>











	

<style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style><script type="text/javascript" charset="UTF-8" src="../../../../../www.gstatic.com/charts/%25%7bversion%7d/loader.html"></script></head>

<body class="ec-header-fixed ec-sidebar-fixed ec-sidebar-light ec-header-light" id="body"><div class="theme-option">
			<div class="right-sidebar-2">
			<div class="ec-tools-sidebar-overlay"></div>
        <div class="right-sidebar-container-2">
          <div class="slim-scroll-right-sidebar-2">

            <div class="right-sidebar-2-header">
              <h2>SETTINGS</h2>
              <p>Layout Preview Settings</p>
              <div class="btn-close-right-sidebar-2">
                <i class="mdi mdi-window-close"></i>
              </div>
            </div>

            <div class="right-sidebar-2-body" data-simplebar="init"><div class="simplebar-wrapper" style="margin: -15px -30px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-ec-content-wrapper" style="height: 100%; overflow: hidden;"><div class="simplebar-content" style="padding: 15px 30px;">
              <span class="right-sidebar-2-subtitle">Header Layout</span>
              <div class="no-col-space">
                <a href="javascript:void(0);" class="btn-right-sidebar-2 ec-header-fixed-to btn-right-sidebar-2-active">Fixed</a>
                <a href="javascript:void(0);" class="btn-right-sidebar-2 ec-header-static-to">Static</a>
              </div>

              <span class="right-sidebar-2-subtitle">Sidebar Layout</span>
              <div class="no-col-space">
                <select class="right-sidebar-2-select" id="sidebar-option-select">
                  <option value="ec-sidebar-fixed">Fixed Default</option>
                  <option value="ec-sidebar-fixed-minified">Fixed Minified</option>
                  <option value="ec-sidebar-fixed-offcanvas">Fixed Offcanvas</option>
                  <option value="ec-sidebar-static">Static Default</option>
                  <option value="ec-sidebar-static-minified">Static Minified</option>
                  <option value="ec-sidebar-static-offcanvas">Static Offcanvas</option>
                </select>
              </div>

              <span class="right-sidebar-2-subtitle">Header Background</span>
              <div class="no-col-space">
                <a href="javascript:void(0);" class="btn-right-sidebar-2 btn-right-sidebar-2-active ec-header-light-to">Light</a>
                <a href="javascript:void(0);" class="btn-right-sidebar-2 ec-header-dark-to">Dark</a>
              </div>

              <span class="right-sidebar-2-subtitle">Navigation Background</span>
              <div class="no-col-space">
                <a href="javascript:void(0);" class="btn-right-sidebar-2 btn-right-sidebar-2-active ec-sidebar-light-to">Light</a>
                <a href="javascript:void(0);" class="btn-right-sidebar-2 ec-sidebar-dark-to">Dark</a>
              </div>

              <span class="right-sidebar-2-subtitle">Spacing Layout</span>
              <div class="no-col-space">
                <a href="javascript:void(0);" class="btn-right-sidebar-2 btn-right-sidebar-2-active default-spacing-to">Default</a>
                <a href="javascript:void(0);" class="btn-right-sidebar-2 compact-spacing-to">Compact</a>
              </div>
              <div class="d-flex justify-content-center">
                <div id="reset-options" style="width: auto; cursor: pointer" class="btn-right-sidebar-2 btn-reset">Reset
                  Settings</div>
              </div>
            </div></div></div></div><div class="simplebar-placeholder" style="width: auto; height: 551px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar" style="height: 0px; display: none; transform: translate3d(0px, 0px, 0px);"></div></div></div>
          </div>
        </div>
      </div>
		</div>

	<!--  WRAPPER  -->
	<div class="wrapper">
		
		<!-- LEFT MAIN SIDEBAR -->
		<div class="ec-left-sidebar ec-bg-sidebar">
			<div id="sidebar" class="sidebar ec-sidebar-footer">
			<a href="/home"> <br>
			<br>
			<br>
  <img class="dark-logo" src="marketplace/assets/images/logo/dark-logo.png" alt="Site Logo" style="display: none;"><br>
</a>
				<div class="ec-brand">
				<br>

			<br>

				</div>

				<!-- begin sidebar scrollbar -->
				<div class="ec-navigation" data-simplebar="init"><div class="simplebar-wrapper" style="margin: 0px;">
				<div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer">
					
				</div>
			</div>
				<div class="simplebar-mask">
					<div class="simplebar-offset" style="right: 0px; bottom: 0px;">
				<div class="simplebar-ec-content-wrapper" style="height: 100%; overflow: hidden;">
				<div class="simplebar-content" style="padding: 0px;">
					<!-- sidebar menu -->
					 
				</div>
			</div>
		</div>
	</div><div class="simplebar-placeholder" style="width: auto; height: 629px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar" style="height: 0px; display: none; transform: translate3d(0px, 0px, 0px);"></div></div></div>
			</div>
		</div>

		<!--  PAGE WRAPPER -->
		<div class="ec-page-wrapper">

		 

			<!-- CONTENT WRAPPER -->

			<div id="content-container">
			<a href="/home"> <br>
 <img src="marketplace/assets/images/logo/logo.png" alt="Site Logo" style="width: 300px; height: 70px;">  <br>
 </a>
					 
@yield('contentLivreur')
			</div>		


 
			
			<!-- End Content Wrapper -->

			<!-- Footer -->
			<footer class="footer mt-auto">
				<div class="copyright bg-white">
					<p>
						Copyright © <span id="ec-year">2023</span><a class="text-primary" href="https://themeforest.net/user/ashishmaraviya" target="_blank"> Ekka Admin Dashboard</a>. All Rights Reserved.
					  </p>
				</div>
			</footer>

		</div> <!-- End Page Wrapper -->
	</div> <!-- End Wrapper -->

	<!-- Common Javascript -->
	<script src="assets/plugins/jquery/jquery-3.5.1.min.js"></script>
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<script src="assets/plugins/simplebar/simplebar.min.js"></script>
	<script src="assets/plugins/jquery-zoom/jquery.zoom.min.js"></script>
	<script src="assets/plugins/slick/slick.min.js"></script>

	<!-- Chart -->
	<script src="assets/plugins/charts/Chart.min.js"></script>
	<script src="assets/js/chart.js"></script>

	<!-- Google map chart -->
	<script src="assets/plugins/charts/google-map-loader.js"></script>
	<script src="assets/plugins/charts/google-map.js"></script>

	<!-- Date Range Picker -->
	<script src="assets/plugins/daterangepicker/moment.min.js"></script>
    <script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
	<script src="assets/js/date-range.js"></script>

	<!-- Option Switcher -->
	<script src="assets/plugins/options-sidebar/optionswitcher.js"></script>

	<!-- Ekka Custom -->
	<script src="assets/js/ekka.js"></script>




<div class="daterangepicker ltr show-ranges opensleft"><div class="ranges"><ul><li data-range-key="Today">Today</li><li data-range-key="Yesterday">Yesterday</li><li data-range-key="Last 7 Days">Last 7 Days</li><li data-range-key="Last 30 Days">Last 30 Days</li><li data-range-key="This Month">This Month</li><li data-range-key="Last Month">Last Month</li><li data-range-key="Custom Range">Custom Range</li></ul></div><div class="drp-calendar left"><div class="calendar-table"></div><div class="calendar-time" style="display: none;"></div></div><div class="drp-calendar right"><div class="calendar-table"></div><div class="calendar-time" style="display: none;"></div></div><div class="drp-buttons"><span class="drp-selected"></span><button class="cancelBtn btn btn-sm btn-default" type="button">Cancel</button><button class="applyBtn btn btn-sm btn-primary" disabled="disabled" type="button">Apply</button> </div></div><div class="daterangepicker ltr show-ranges opensleft"><div class="ranges"><ul><li data-range-key="Today">Today</li><li data-range-key="Yesterday">Yesterday</li><li data-range-key="Last 7 Days">Last 7 Days</li><li data-range-key="Last 30 Days">Last 30 Days</li><li data-range-key="This Month">This Month</li><li data-range-key="Last Month">Last Month</li><li data-range-key="Custom Range">Custom Range</li></ul></div><div class="drp-calendar left"><div class="calendar-table"></div><div class="calendar-time" style="display: none;"></div></div><div class="drp-calendar right"><div class="calendar-table"></div><div class="calendar-time" style="display: none;"></div></div><div class="drp-buttons"><span class="drp-selected"></span><button class="cancelBtn btn btn-sm btn-default" type="button">Cancel</button><button class="applyBtn btn btn-sm btn-primary" disabled="disabled" type="button">Apply</button> </div></div><div class="daterangepicker ltr show-ranges opensleft"><div class="ranges"><ul><li data-range-key="Today">Today</li><li data-range-key="Yesterday">Yesterday</li><li data-range-key="Last 7 Days">Last 7 Days</li><li data-range-key="Last 30 Days">Last 30 Days</li><li data-range-key="This Month">This Month</li><li data-range-key="Last Month">Last Month</li><li data-range-key="Custom Range">Custom Range</li></ul></div><div class="drp-calendar left"><div class="calendar-table"></div><div class="calendar-time" style="display: none;"></div></div><div class="drp-calendar right"><div class="calendar-table"></div><div class="calendar-time" style="display: none;"></div></div><div class="drp-buttons"><span class="drp-selected"></span><button class="cancelBtn btn btn-sm btn-default" type="button">Cancel</button><button class="applyBtn btn btn-sm btn-primary" disabled="disabled" type="button">Apply</button> </div></div></body><!-- Mirrored from maraviyainfotech.com/projects/ekka/ekka-v36/ekka-admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Oct 2023 18:21:02 GMT --></html>