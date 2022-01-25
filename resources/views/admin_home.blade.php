<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin | Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="css/morris.css" type="text/css" />
    <!-- Graph CSS -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="js/jquery-2.1.4.min.js"></script>
    <!-- //jQuery -->
    <link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css' />
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!-- lined-icons -->
    <link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
    <!-- //lined-icons -->
</head>

<body>
<div class="sidebar-menu">
	<header class="logo1">
		<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a>
	</header>
	<div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
	<div class="menu">
		<ul id="menu">
			<li><a href="dashboard.php"><i class="fa fa-tachometer"></i> <span>Dashboard</span>
					<div class="clearfix"></div>
				</a></li>

			<li id="menu-academico"><a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i><span> Tour Packages</span> <span class="fa fa-angle-right" style="float: right"></span>
					<div class="clearfix"></div>
				</a>
				<ul id="menu-academico-sub">
					<li id="menu-academico-avaliacoes"><a href="create-package.php">Create</a></li>
					<li id="menu-academico-avaliacoes"><a href="manage-packages.php">Manage</a></li>
				</ul>
			</li>
			<li id="menu-academico"><a href="manage-users.php"><i class="fa fa-users" aria-hidden="true"></i><span>Manage Users</span>
					<div class="clearfix"></div>
				</a></li>

			<li><a href="manage-bookings.php"><i class="fa fa-list" aria-hidden="true"></i> <span>Manage Booking</span>
					<div class="clearfix"></div>
				</a></li>
			<li><a href="manageissues.php"><i class="fa fa-table"></i> <span>Manage Issues</span>
					<div class="clearfix"></div>
				</a></li>
			<li><a href="manage-enquires.php"><i class="fa fa-file-text-o" aria-hidden="true"></i> <span>Manage Enquiries</span>
					<div class="clearfix"></div>
				</a></li>
			<li><a href="manage-pages.php"><i class="fa fa-file-text-o" aria-hidden="true"></i> <span>Manage Pages</span>
					<div class="clearfix"></div>
				</a></li>


		</ul>
	</div>
</div>
<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!-- Bootstrap Core JavaScript -->
		<script src="js/bootstrap.min.js"></script>
		<!-- /Bootstrap Core JavaScript -->
		<!-- morris JavaScript -->
		<script src="js/raphael-min.js"></script>
		<script src="js/morris.js"></script>
		<script>
			$(document).ready(function() {
				//BOX BUTTON SHOW AND CLOSE
				jQuery('.small-graph-box').hover(function() {
					jQuery(this).find('.box-button').fadeIn('fast');
				}, function() {
					jQuery(this).find('.box-button').fadeOut('fast');
				});
				jQuery('.small-graph-box .box-close').click(function() {
					jQuery(this).closest('.small-graph-box').fadeOut(200);
					return false;
				});

				//CHARTS
				function gd(year, day, month) {
					return new Date(year, month - 1, day).getTime();
				}

				graphArea2 = Morris.Area({
					element: 'hero-area',
					padding: 10,
					behaveLikeLine: true,
					gridEnabled: false,
					gridLineColor: '#dddddd',
					axes: true,
					resize: true,
					smooth: true,
					pointSize: 0,
					lineWidth: 0,
					fillOpacity: 0.85,
					data: [{
							period: '2014 Q1',
							iphone: 2668,
							ipad: null,
							itouch: 2649
						},
						{
							period: '2014 Q2',
							iphone: 15780,
							ipad: 13799,
							itouch: 12051
						},
						{
							period: '2014 Q3',
							iphone: 12920,
							ipad: 10975,
							itouch: 9910
						},
						{
							period: '2014 Q4',
							iphone: 8770,
							ipad: 6600,
							itouch: 6695
						},
						{
							period: '2015 Q1',
							iphone: 10820,
							ipad: 10924,
							itouch: 12300
						},
						{
							period: '2015 Q2',
							iphone: 9680,
							ipad: 9010,
							itouch: 7891
						},
						{
							period: '2015 Q3',
							iphone: 4830,
							ipad: 3805,
							itouch: 1598
						},
						{
							period: '2015 Q4',
							iphone: 15083,
							ipad: 8977,
							itouch: 5185
						},
						{
							period: '2016 Q1',
							iphone: 10697,
							ipad: 4470,
							itouch: 2038
						},
						{
							period: '2016 Q2',
							iphone: 8442,
							ipad: 5723,
							itouch: 1801
						}
					],
					lineColors: ['#ff4a43', '#a2d200', '#22beef'],
					xkey: 'period',
					redraw: true,
					ykeys: ['iphone', 'ipad', 'itouch'],
					labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
					pointSize: 2,
					hideHover: 'auto',
					resize: true
				});


			});
		</script>
</body>

</html>