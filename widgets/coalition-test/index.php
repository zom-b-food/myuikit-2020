<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Modern Business - Start Bootstrap Template</title>
		<!-- Bootstrap Core CSS -->
		<link href="bootstrap.min.css" rel="stylesheet">
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<style>
			body {
				font-family: 'arial', sans-serif !important;
				font-size: 13px;
				font-weight: 500;
				color: #313131;
				margin: 0 auto;
				padding: 0;
				display: flex;
				flex-direction: column;
				-webkit-text-size-adjust: 100%;
				-webkit-overflow-scrolling: touch;
				-webkit-font-smoothing: antialiased !important;
			}

			a {
				color: #313131;
			}

			a.dropdown-toggle {
				cursor: pointer;
			}

			.dropdown-submenu {
				position: relative;
			}

			.navbar-nav > li > .dropdown-menu {
				margin-top: 25px;

			}

			a.bold {
				font-weight: 700 !important;
			}

			.dropdown-submenu .dropdown-menu {
				top: 0;
				left: 160px;
				margin-top: -1px;
			}

			.wrapper {
				border-top: 4px solid #313131;
				padding-top: 22px;
			}

			.page-wrapper {
				margin-left: 13%;
				margin-right: 13%;
				margin-top: 10px;
			}

			.banner-wrapper {
				background-color: #ff6200;
				min-height: 32px;
				display: flex;
			}

			.nav .open > a, .nav .open > a:focus, .nav .open > a:hover {
				background-color: #fff;
				border-color: #ff6200;
			}

			ul.tab-left {
				float: left;
				margin-left: 20%;
			}

			ul.tab-right {
				float: right;
				margin-right: 20%;
			}

			ul.tab-left li, ul.tab-right li {
				list-style-type: none;
				display: inline-block;
				text-transform: uppercase;
				color: #c23900;
				padding-top:6px;
			}

			ul.tab-left li:last-of-type, ul.tab-right li:last-of-type {
				color: white;
				padding-left: 5px;
			}

			.nav > li > a {
				text-transform: uppercase;
				padding: 10px 14px;
			}

			.nav > li > a:focus, .nav > li > a:hover {
				text-decoration: none;
				background-color: transparent;
				border-bottom: 4px solid #ff6200;
			}

			.horNudge {
				display: block;
				height: 8px;
			}

			span.caret {
				float: right;
				margin-top: 8px;
			}

			.breadcrumb {
				padding-left: 0;
				margin: 70px 0 0 0;
				list-style: none;
				background-color: transparent;
				border-radius: 0;
			}

			.breadcrumb a {
				color: #cccccc;
			}

			.breadcrumb > .active {
				color: #313131;
				font-weight: 600;
			}

			.logo {
				text-transform: uppercase;
			}

			h3 {
				color: #ff6200;
				text-transform: uppercase;
			}

			.orange, h3.page-header {
				color: #ff6200;
				font-weight: 700;
				text-transform: capitalize;
				margin-bottom: 4px;
			}

			.noLPad {
				padding-left: 0;
			}

			.noRPad {
				padding-right: 0;
			}

			.rightCol {
				float: right;
				width: 47%;
				margin-top: 30px;
			}

			.leftCol {
				float: left;
				width: 47%;
				margin-top: 30px;
			}

			.page-header {
				border: none;
			}

			.form-control {
				border: none;
				background-color: #f6f6f6;
				border-radius: 0;
			}

			.btn-primary {
				color: #fff;
				background-color: #ff6200;
				border-color: transparent;
				border-radius: 0;
			}

			.social {
				margin-top:165px;
			}

			/*bootstrap getting in its own way*/

			.btn-group-vertical > .btn-group:after, .btn-group-vertical > .btn-group:before, .btn-toolbar:after, .btn-toolbar:before, .clearfix:after, .clearfix:before, -fluid:after, -fluid:before, :after, :before, .dl-horizontal dd:after, .dl-horizontal dd:before, .form-horizontal .form-group:after, .form-horizontal .form-group:before, .modal-footer:after, .modal-footer:before, .nav:after, .nav:before, .navbar-collapse:after, .navbar-collapse:before, .navbar-header:after, .navbar-header:before, .navbar:after, .navbar:before, .pager:after, .pager:before, .panel-body:after, .panel-body:before, .row:after, .row:before {
				display: inline;
				content: " ";
			}
		</style>
	</head>
	<body>
		<div class="banner-wrapper">
			<div class="col-lg-6">
				<ul class="tab-left">
					<li><span class="horNudge"></span>Call Us Now!</li>
					<li>385.154.11.28.35</li>
				</ul>
			</div>
			<div class="col-lg-6">
				<ul class="tab-right">
					<li><span class="horNudge"></span>Login</li>
					<li>Sign Up</li>
				</ul>
			</div>
		</div>
		<div class="page-wrapper">
			<!-- Navigation -->
			<!-- Intro Content -->
			<div class="row">
				<div class="col-md-6">
					<h1 class="logo">Your<span class="orange">LOGO</span></h1>
					<ol class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li><a href="#">Who we are</a></li>
						<li class="active">Contact</li>
					</ol>
				</div>
				<div class="col-md-6">
					<nav class="navbar" role="navigation">
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-left">
								<li>
									<a href="#">title 1</a>
								</li>
								<li class="dropdown active">
									<a class="dropdown-toggle" data-toggle="dropdown">title 2
									</a>
									<ul class="dropdown-menu">
										<li><a tabindex="-1" href="#">submenu 1</a></li>
										<li><a tabindex="-1" href="#">submenu 2</a></li>
										<li class="dropdown-submenu">
											<a class="bold" tabindex="-1" href="#">submenu 3<span class="caret"></span></a>
											<ul class="dropdown-menu">
												<li><a tabindex="-1" href="#">submenu 1</a></li>
												<li><a tabindex="-1" href="#">submenu 2</a></li>
												<li><a class="bold" tabindex="-1" href="#">submenu 3</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li>
									<a href="#">title 3</a>
								</li>
								<li>
									<a href="#">title 4</a>
								</li>
								<li>
									<a href="#">title 5</a>
								</li>
								<li>
									<a href="#">title 6</a>
								</li>
								<li>
									<a href="#">title 7</a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
			<!-- /.row -->
			<!-- Team Members -->
			<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header">Contact</h3>

					<p>
						The first was ICC prosecutor Fatou Bensouda's request last year for a full investigation into
						alleged war crimes in Afghanistan, which would include any committed by US military and
						intelligence officials. The second area Mr Bolton addressed was the Palestinian move to bring US
						ally Israel before the ICC over allegations of human rights abuses in Gaza and the occupied West
						Bank - a move dismissed by Israel as politicised.
					</p>
				</div>
			</div>
			<div class="row">
				<div class="leftCol col-lg-6">
					<h3>contact us</h3>

					<div class="wrapper">
						<form name="sentMessage" id="contactForm" novalidate>
							<div class="control-group form-group">
								<div class="controls">
									<input type="text" class="form-control" id="name" required
									       data-validation-required-message="Please enter your name."
									       placeholder="Name *">

									<p class="help-block"></p>
								</div>
							</div>
							<div class="col-lg-6 noLPad">
								<div class="control-group form-group">
									<div class="controls">
										<input type="tel" class="form-control" id="phone" required
										       data-validation-required-message="Please enter your phone number."
										       placeholder="Phone *">
									</div>
								</div>
							</div>
							<div class="col-lg-6 noRPad">
								<div class="control-group form-group">
									<div class="controls">
										<input type="email" class="form-control" id="email" required
										       data-validation-required-message="Please enter your email address."
										       placeholder="Email *">
									</div>
								</div>
							</div>
							<div class="control-group form-group">
								<div class="controls">
									<textarea rows="10" cols="100" class="form-control" id="message" required
									          data-validation-required-message="Please enter your message"
									          maxlength="999"
									          style="resize:none" placeholder="Message *"></textarea>
								</div>
							</div>
							<div id="success"></div>
							<!-- For success/fail messages -->
							<button type="submit" class="btn btn-primary">Send Message</button>
						</form>
					</div>
				</div>
				<div class="rightCol col-lg-6">
					<h3>reach us</h3>

					<div class="wrapper">
						<p>
							Coalition Skills Test </p>

						<p>
							535 La Plata Street<br/>
							4200 Argentina
						</p>

						<p>
							Phone: 385.154.11.28.38 <br/>
							Fax: 385.154.35.66.78
						</p>
						<div class="social">

							<img src="sm-icons.jpg" class="img-responsive" alt="social media icons">
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- jQuery -->
		<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
		<!-- Bootstrap Core JavaScript -->
		<script src="bootstrap.min.js"></script>
		<script>
			$(document).ready(function () {
				$('.dropdown-submenu a.bold').on("click", function (e) {
					$(this).next('ul').toggle();
					e.stopPropagation();
					e.preventDefault();
				});
			});
		</script>
	</body>
</html>
