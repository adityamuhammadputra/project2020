<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themekita.com/demo-millenium-bootstrap/millenium/examples/demo1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Dec 2020 03:57:13 GMT -->
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Millenium Bootstrap 4 Admin Dashboard</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="https://themekita.com/demo-millenium-bootstrap/millenium/examples/assets/img/icon.ico" type="image/x-icon"/>

    <link href="http://materialdesignicons.com/cdn/2.0.46/css/materialdesignicons.min.css" rel="stylesheet">

	<!-- Fonts and icons -->
	<script src="template/assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="template/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="template/assets/css/millenium.min.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="template/assets/css/demo.css">
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="purple">
				
				<a href="index.html" class="logo">
					<img src="https://themekita.com/demo-millenium-bootstrap/millenium/examples/assets/img/logo.svg" alt="navbar brand" class="navbar-brand">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
					<i class="mdi mdi-menu"></i>

					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
					<i class="mdi mdi-menu"></i>

					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="purple2">
				
				<div class="container-fluid">
					<div class="collapse" id="search-nav">
						<form class="navbar-left navbar-form nav-search mr-md-3">
							<div class="input-group">
								<div class="input-group-prepend">
									<button type="submit" class="btn btn-search pr-1">
									<i class="mdi mdi-emoticon-poop"></i>
									</button>
								</div>
								<input type="text" placeholder="Search ..." class="form-control">
							</div>
						</form>
					</div>
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
					
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="-bell"></i>
								<span class="notification">4</span>
							</a>
							<ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
								<li>
									<div class="dropdown-title">You have 4 new notification</div>
								</li>
								<li>
									<div class="notif-scroll scrollbar-outer">
										<div class="notif-center">
											<a href="#">
												<div class="notif-img"> 
													<img src="template/assets/img/profile2.jpg" alt="Img Profile">
												</div>
												<div class="notif-content">
													<span class="block">
														Reza send messages to you
													</span>
													<span class="time">12 minutes ago</span> 
												</div>
											</a>
										</div>
									</div>
								</li>
								<li>
									<a class="see-all" href="javascript:void(0);">See all notifications<i class="-angle-right"></i> </a>
								</li>
							</ul>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm">
									<img src="template/assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
										<div class="user-box">
											<div class="avatar-lg"><img src="template/assets/img/profile.jpg" alt="image profile" class="avatar-img rounded"></div>
											<div class="u-text">
												<h4>Hizrian</h4>
												<p class="text-muted">hello@themekita.com</p><a href="profile.html" class="btn btn-xs btn-secondary btn-sm">View Profile</a>
											</div>
										</div>
									</li>
									<li>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">My Profile</a>
										<a class="dropdown-item" href="#">My Balance</a>
										<a class="dropdown-item" href="#">Inbox</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Account Setting</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Logout</a>
									</li>
								</div>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>

		<!-- Sidebar -->
		<div class="sidebar">			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="template/assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									Hizrian
									<span class="user-level">Administrator</span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample">
								<ul class="nav">
									<li>
										<a href="#profile">
											<span class="link-collapse">My Profile</span>
										</a>
									</li>
									<li>
										<a href="#edit">
											<span class="link-collapse">Edit Profile</span>
										</a>
									</li>
									<li>
										<a href="#settings">
											<span class="link-collapse">Settings</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					
                    <ul class="nav nav-secondary">
					
                        <li class="nav-item">
                            <a href="#"> <i class="mdi mdi-view-dashboard"></i> 
                               <p>Dashboard</p></a>
                        </li>
						<li class="nav-item">
                            <a href="{{ route('loket.index') }}"> <i class="mdi mdi-desktop-classic"></i> 
                                <p>Loket</p></a>
                        </li>
						<li class="nav-item">
                            <a href="{{ route('arsip.index') }}"> <i class="mdi mdi-book"></i>
                            <p>Arsip</p></a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('monitoring.index') }}"> <i class="mdi mdi-laptop-mac"></i>
                                <p>Monitoring</p></a>
						</li>
                        <li class="nav-item">
                            <a href="{{ route('laporan.index') }}"> <i class="mdi mdi-file-chart"></i>
                                <p>Laporan</p></a>
						</li>
						
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->

		<!-- ISI CONTENT -->
        
        @yield('abdurrohman_content')

		<!-- AKHIR ISI CONTENT -->
        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="http://www.themekita.com/">
                                ThemeKita
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Help
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Licenses
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright ml-auto">
                    2018, made with <i class="-heart heart text-danger"></i> by <a href="http://www.themekita.com/">ThemeKita</a>
                </div>				
            </div>
        </footer>
	</div>
	<!--   Core JS Files   -->
	<script src="template/assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="template/assets/js/core/popper.min.js"></script>
	<script src="template/assets/js/core/bootstrap.min.js"></script>

	<!-- jQuery UI -->
	<script src="template/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="template/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

	<!-- jQuery Scrollbar -->
	<script src="template/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

	<!-- Moment JS -->
	<script src="template/assets/js/plugin/moment/moment.min.js"></script>

	<!-- Chart JS -->
	<script src="template/assets/js/plugin/chart.js/chart.min.js"></script>

	<!-- jQuery Sparkline -->
	<script src="template/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

	<!-- Chart Circle -->
	<script src="template/assets/js/plugin/chart-circle/circles.min.js"></script>

	<!-- Datatables -->
	<script src="template/assets/js/plugin/datatables/datatables.min.js"></script>

	<!-- Bootstrap Notify -->
	{{-- <script src="template/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script> --}}

	<!-- Bootstrap Toggle -->
	<script src="template/assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>

	<!-- jQuery Vector Maps -->
	<script src="template/assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
	<script src="template/assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

	<!-- Google Maps Plugin -->
	<script src="template/assets/js/plugin/gmaps/gmaps.js"></script>

	<!-- Dropzone -->
	<script src="template/assets/js/plugin/dropzone/dropzone.min.js"></script>

	<!-- Fullcalendar -->
	<script src="template/assets/js/plugin/fullcalendar/fullcalendar.min.js"></script>

	<!-- DateTimePicker -->
	<script src="template/assets/js/plugin/datepicker/bootstrap-datetimepicker.min.js"></script>

	<!-- Bootstrap Tagsinput -->
	<script src="template/assets/js/plugin/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>

	<!-- Bootstrap Wizard -->
	<script src="template/assets/js/plugin/bootstrap-wizard/bootstrapwizard.js"></script>

	<!-- jQuery Validation -->
	<script src="template/assets/js/plugin/jquery.validate/jquery.validate.min.js"></script>

	<!-- Summernote -->
	<script src="template/assets/js/plugin/summernote/summernote-bs4.min.js"></script>

	<!-- Select2 -->
	<script src="template/assets/js/plugin/select2/select2.full.min.js"></script>

	<!-- Sweet Alert -->
	<script src="template/assets/js/plugin/sweetalert/sweetalert.min.js"></script>

	<!-- Millenium JS -->
	<script src="template/assets/js/millenium.min.js"></script>

	<!-- Millenium DEMO methods, don't include it in your project! -->
	<script src="template/assets/js/setting-demo.js"></script>
	<script src="template/assets/js/demo.js"></script>
	<script>
		$('#lineChart').sparkline([102,109,120,99,110,105,115], {
			type: 'line',
			height: '70',
			width: '100%',
			lineWidth: '2',
			lineColor: '#177dff',
			fillColor: 'rgba(23, 125, 255, 0.14)'
		});

		$('#lineChart2').sparkline([99,125,122,105,110,124,115], {
			type: 'line',
			height: '70',
			width: '100%',
			lineWidth: '2',
			lineColor: '#f3545d',
			fillColor: 'rgba(243, 84, 93, .14)'
		});

		$('#lineChart3').sparkline([105,103,123,100,95,105,115], {
			type: 'line',
			height: '70',
			width: '100%',
			lineWidth: '2',
			lineColor: '#ffa534',
			fillColor: 'rgba(255, 165, 52, .14)'
		});
    </script>
    	<script >
            $(document).ready(function() {
                $('#basic-datatables').DataTable({
                });
    
                $('#multi-filter-select').DataTable( {
                    "pageLength": 5,
                    initComplete: function () {
                        this.api().columns().every( function () {
                            var column = this;
                            var select = $('<select class="form-control"><option value=""></option></select>')
                            .appendTo( $(column.footer()).empty() )
                            .on( 'change', function () {
                                var val = $.fn.dataTable.util.escapeRegex(
                                    $(this).val()
                                    );
    
                                column
                                .search( val ? '^'+val+'$' : '', true, false )
                                .draw();
                            } );
    
                            column.data().unique().sort().each( function ( d, j ) {
                                select.append( '<option value="'+d+'">'+d+'</option>' )
                            } );
                        } );
                    }
                });
    
                // Add Row
                $('#add-row').DataTable({
                    "pageLength": 5,
                });
    
                var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';
    
                $('#addRowButton').click(function() {
                    $('#add-row').dataTable().fnAddData([
                        $("#addName").val(),
                        $("#addPosition").val(),
                        $("#addOffice").val(),
                        action
                        ]);
                    $('#addRowModal').modal('hide');
    
                });
            });
        </script>
</body>

<!-- Mirrored from themekita.com/demo-millenium-bootstrap/millenium/examples/demo1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Dec 2020 03:57:39 GMT -->
</html>