<DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<title>Online Store</title>
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<!--<link rel="stylesheet" href="sweetalert/sweetalert.css"/>-->
	<script type="text/javascript" src="js/jquery-1.12.4.min.js"></script> 
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<!--<script type="text/javascript" src="sweetalert/sweetalert.js"></script>-->
	
	
	<!--<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>-->
	<script type="text/javascript" src="main.js"></script>
	
	</head>
	
	<body>
		<!--NavBar-->
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<a href="#" class="navbar-brand"><b>MyOwnShop</b></a>
				</div>
				
				<ul class="nav navbar-nav">
					<li><a href="#"><span class="glyphicon glyphicon-home"></span>Home</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-user"></span>Mens</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-modal-window"></span>Kids</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-flag"></span>Ladies</a></li>
					<li><input style="width:500px;Margin-left:20px;Margin-top:8px;" type="text" class="form-control" id="search"/></li>
					<li><input style="Margin-left:20px;Margin-top:8px;"type="submit" class="btn btn-primary" id="btn_search"/></li>
				</ul>
				
				<ul class="nav navbar-nav navbar-right">
					<li style="Margin-left:10px;"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Cart<span class="badge">0</span></a>
						<div class="dropdown-menu" style="width:400px;">
							<div class="panel panel-success">
								<div class="panel-heading">
									<div class="row">
										<div class="col-md-3">Sr.No</div>
										<div class="col-md-3">Product Image</div>
										<div class="col-md-3">Product Name</div>
										<div class="col-md-3">Price Rs.</div>
									</div>
								</div>
								<div class="panel-body"></div>
								<div class="panel-footer"></div>
							</div>
						</div>
					</li>
					<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>SignIn</a>
						<ul class="dropdown-menu">
							<div style="width:300px;">
								<div class="pane panel-primary">
									<div class="panel-heading">Login</div>
									<div class="panel-heading">
										<label for="email">Email Id</label>
										<input type="email" class="form-control" id="email" required/>
										<label for="password">Password</label>
										<input type="password" class="form-control" id="password" required/>
										<p><br/></p>
										<a href="#" style="color:white;list-style:none;">Forgot password</a><input type="submit" class="btn btn-success" style="float:right;" id="login" value="Login">
									</div>
									<div class="panel-footer" id="e_msg"></div>
								</div>							
							</div>
						</ul>
					</li>
					<li><a href="#"><span class="glyphicon glyphicon-user"></span>SignUp</a></li>
				</ul>
			</div>
		</div>
		<!--NavBar Ends-->
		<p><br/></p>
		<p><br/></p>
		<p><br/></p>
		
		<!--Left SideBar-->
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-1"> </div>
				
				<div class="col-md-2">
					<div id="get_category">
					</div>
					<!--<div class="nav nav-pills nav-stacked">
						<li class="active"><a href="#"><h4>Categories</h4></a></li>
						<li><a href="#"><h4>Categories1</h4></a></li>
						<li><a href="#"><h4>Categories2</h4></a></li>
						<li><a href="#"><h4>Categories3</h4></a></li>
						<li><a href="#"><h4>Categories4</h4></a></li>
					</div>-->
					
					<div class="nav nav-pills nav-stacked">
						<li class="active"><a href="#"><h4>Brands</h4></a></li>
						<li><a href="#"><h4>Brands1</h4></a></li>
						<li><a href="#"><h4>Brands2</h4></a></li>
						<li><a href="#"><h4>Brands3</h4></a></li>
						<li><a href="#"><h4>Brands4</h4></a></li>
					</div>
				</div>
				
				<div class="col-md-8"> 
					<div class="panel panel-info">
						<div class="panel-heading">Products</div>
							<div class="panel-body">
								<div class="col-md-4">
									<div class="panel panel-info">
										<div class="panel-heading">Cotton King</div>
											<div class="panel-body">
												<center><img src="img/shirt1.jpg" /></center>
											</div>
											
											<div class="panel-heading"> Rs. 500/-
											<button style="float:right;" class="btn btn-danger btn-xs ">Add To Cart </button>
											</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="panel panel-info">
										<div class="panel-heading"> Peter English</div>
											<div class="panel-body">
												<center><img src="img/shirt2.jpg" /></center>
											</div>
											
											<div class="panel-heading"> Rs. 550/-
											<button style="float:right;" class="btn btn-danger btn-xs ">Add To Cart </button>
											</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="panel panel-info">
										<div class="panel-heading">Swadesh Brand</div>
											<div class="panel-body">
												<center><img src="img/shirt3.jpg" /></center>
											</div>
											
											<div class="panel-heading"> Rs. 1200/-
											<button style="float:right;" class="btn btn-danger btn-xs ">Add To Cart </button>
											</div>
									</div>
								</div>
							</div>
						<div class="panel-footer"> &copy</div>	
					</div>			
				</div>
				
				<div class="col-md-1"> </div>
			</div>
		</div>
	</body>
</html>