

    <?php
    	//Start session
    	session_start();	
    	//Unset the variables stored in session
    	unset($_SESSION['SESS_MEMBER_ID']);
    	unset($_SESSION['SESS_FIRST_NAME']);
    	unset($_SESSION['SESS_LAST_NAME']);
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>GEC TEACHERS PORTAL</title>

	
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
     <!-- Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Coda' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
</head>

<body class="home">
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="index.html"><img src="assets/images/logo.png" alt=""> <h3 style="float:right; margin-left:10px;">Government Engineering College, Thrissur</h3></a>
			</div>
			<div class="navbar-collapse collapse">
				
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.html">Home</a></li>
			<li class="active">User access</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">WELCOME GECT TUTOR'S PORTAL</h1>
				</header>
				
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="thin text-center">Login in to your account</h3>
							<hr>
							
							

							<form method="post" action="login_exec.php">



									<!--the code bellow is used to display the message of the input validation-->
		 <?php
			if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
			echo '<ul class="err">';
			foreach($_SESSION['ERRMSG_ARR'] as $msg) {
				echo '<li>',$msg,'</li>'; 
				}
			echo '</ul>';
			unset($_SESSION['ERRMSG_ARR']);
			}
		?>
								<div class="top-margin">
									<label>Username/College ID<span class="text-danger">*</span></label>
									<input type="text" name="username" class="form-control">
								</div>
								<div class="top-margin">
									<label>Password <span class="text-danger">*</span></label>
									<input type="password" name="password" class="form-control">
								</div>

								<hr>

								<div class="row">
									<div class="col-lg-8">
                                    <p class="text-muted"> Can't acces my account Help.</p>
										<b><a href="">Forgot password?</a></b>
									</div>
									<div class="col-lg-4 text-right">
										<button class="btn btn-action" type="submit">Sign in</button>
									</div>
								</div>
							</form>
						</div>
					</div>

				</div>
				
			</article>
			<!-- /Article -->

		</div>
	</div>	<!-- /container -->
	

	<footer id="footer" class="top-space">
<!--footer1 top-->
		<div class="footer1">
			<div class="container">
				<div class="row">
					
					<div class="col-md-3 widget">
						<h3 class="widget-title">Address</h3>
						<div class="widget-body">
							<p>Address

                 Government Engineering College<br>
                 Thrissur - 680 009,<br>
                  Kerala, India
							</p>	
						</div>
					</div>

					<div class="col-md-3 widget">
						<h3 class="widget-title">&nbsp;</h3>
						<div class="widget-body">
							<p >
								Email : principal@gectcr.ac.in<br>

                           Principal : 0487 - 2334590 , 9400006411<br>

                           College : 0487 - 2334144 <br>
							</p>	
						</div>
					</div>

					<div class="col-md-6 widget">
						<h3 class="widget-title">Government Engineering College, Thrissur</h3>
						<div class="widget-body">
							<p>
                            Government Engineering College, Thrissur, is one of the most prestigious institutions in Kerala. Started in 1957 offering fewer courses, GEC Thrissur has marched ahead and one of the most sought after technical education centre in Kerala. Affiliated to University of Calicut , college campus is spread over an area of 75 acres and located at Ramavarmapuram, 5km from Thrissur town and 6km from Thrissur railway station.
                            </p>
							
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
</div>
<!--/footer1 top-->

<!--footer2 bottam-->
<div class="footer2">
			<div class="container">
				<div class="row">
					
					

					<div class="col-md-12 widget">
						<div class="widget-body">
							<p class="text-center">
								Copyright &copy; 2015,<a href="#" > G E C Teachers Portal</a> 
							</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
</div>
<!--footer2 bottam-->

	</footer>		
		




	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
</body>
</html>