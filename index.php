<html lang="en"><head>
	<title>Vinaget - LINK CHECKER</title>
	<link rel="SHORTCUT ICON" href="images/favicon.ico" type="image/x-icon">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Welcome to LAZENES's Link Checker">
	<meta name="keywords" content="check link, lazenes">
	<link rel="stylesheet" href="css/bootstrap.min.css?v=4.4.1" type="text/css">
	<style>
		@media only screen and (min-width: 991px) {
			.navbar {
				height: 70px;
			}
		}

		@media only screen and (max-width: 991px) {
			.navbar-nav {
				margin-top: 30px;
			}
		}

		.navbar-brand {
			width: 130px;
		}

		.logo-header {
			position: absolute;
			margin-top: -30px;
		}

		.form_check_link {
			margin-top: 100px;
			padding: 1.5rem;
		}

		.table {
			margin-bottom: 0;
			overflow-x: auto;
		}

		.table-header {
			font-weight: bold;
		}

		.card {
			margin-bottom: 70px;
		}

		.footer {
			background-color: #333333;
			border-color: #222222;
			position: fixed;
			bottom: 0px;
			overflow: hidden;
			width: 100%;
			color: white;
			z-index: 9999;
		}

		@media (max-width: 767px) {
			.text-mobile-center {
				text-align: center;
			}

			.clear-mobile-float {
				float: none !important;
			}
		}
	</style>
</head>

<body style="background:url('images/background.jpg'), #111111 repeat-y fixed; background-size:cover;">
	<div class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">
		<div class="container">
			<a href="#" class="navbar-brand"><img class="logo-header" alt="Logo" title="LAZENES - Link Checker" src="images/logo.png"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<nav class="navbar navbar-expand navbar-light">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<a class="nav-link" href="#">Home</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="#">Link Checker <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="https://www.enesbiber.com.tr/">Contact Us</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="jumbotron form_check_link">
			<form class="form-horizontal" action="javascript:check(document.getElementsByTagName(&quot;input&quot;));">
				<fieldset>
					<div id="inputlinks">
						<div class="row" id="showlink1">
							<div class="col-lg-9">
								<input type="text" class="form-control" id="link1" placeholder="Enter Link here" autocomplete="off">
								<div style="display: none;" id="status1"></div><br>
							</div>
							<div class="col-lg-3">
								<input type="text" class="form-control" id="pass1" placeholder="Password (Optional)" autocomplete="off">
								<div style="display: none;" id="sttpass1"></div><br>
							</div>
							<div class="col-lg-12" style="display:none;" id="result1"></div>
						</div>
					</div>
					<button type="submit" id="submit" class="btn btn-primary" name="button">Check Link</button>&nbsp;&nbsp;&nbsp;<img style="display:none" id="waiting" src="./images/loading.gif">
				</fieldset>
			</form>
		</div>

		<div class="card bg-light">
			<div class="card-header text-center">
				<span class="table-header">61 Supported Hosts</span>
			</div>
			<div class="table-responsive">
				<table class="table table-striped text-center">
					<tbody>
						<tr><td><small>1fichier.com</small></td><td><small>2shared.com</small></td><td><small>4share.vn</small></td><td><small>4shared.com</small></td><td><small>alfafile.net</small></td><td><small>bigfile.to</small></td><td><small>crocko.com</small></td><td><small>datafile.com</small></td></tr><tr><td><small>depfile.com</small></td><td><small>depfile.us</small></td><td><small>depositfiles.com</small></td><td><small>dfpan.com</small></td><td><small>dix3.com</small></td><td><small>ex-load.com</small></td><td><small>extmatrix.com</small></td><td><small>fboom.me</small></td></tr><tr><td><small>file.al</small></td><td><small>filefactory.com</small></td><td><small>filejoker.net</small></td><td><small>filenext.com</small></td><td><small>filerio.in</small></td><td><small>filesflash.com</small></td><td><small>filesflash.net</small></td><td><small>filesmonster.com</small></td></tr><tr><td><small>filespace.com</small></td><td><small>fshare.vn</small></td><td><small>gigasize.com</small></td><td><small>hitfile.net</small></td><td><small>hotlink.cc</small></td><td><small>icerbox.com</small></td><td><small>k2s.cc</small></td><td><small>katfile.com</small></td></tr><tr><td><small>littlebyte.net</small></td><td><small>me.zing.vn</small></td><td><small>mediafire.com</small></td><td><small>mega.nz</small></td><td><small>nitro.download</small></td><td><small>nitroflare.com</small></td><td><small>novafile.com</small></td><td><small>oboom.com</small></td></tr><tr><td><small>openload.co</small></td><td><small>prefiles.com</small></td><td><small>rapidgator.net</small></td><td><small>rarefile.net</small></td><td><small>sendspace.com</small></td><td><small>share-online.biz</small></td><td><small>subyshare.com</small></td><td><small>takefile.link</small></td></tr><tr><td><small>turbobit.net</small></td><td><small>tusfiles.net</small></td><td><small>unibytes.com</small></td><td><small>upfile.vn</small></td><td><small>uploaded.net</small></td><td><small>uploadgig.com</small></td><td><small>upstore.net</small></td><td><small>uptobox.com</small></td></tr><tr><td><small>userscloud.com</small></td><td><small>wdupload.com</small></td><td><small>wushare.com</small></td><td><small>yunfile.com</small></td><td><small>zippyshare.com</small></td></tr>					</tbody>
				</table>
			</div>
		</div>
	</div>

	<div class="footer text-mobile-center">
		<span class="float-left clear-mobile-float">Copyright ©2013-2022 enesbiber.com.tr All rights reserved.</span>
		<span class="float-right clear-mobile-float">Created by LAZENES&nbsp;</span>
	</div>

	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js?v=4.4.1"></script>
	<script type="text/javascript" src="js/ajax_load.js?v=4.4.1"></script>


</body></html>