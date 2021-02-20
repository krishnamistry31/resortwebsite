<html>
<head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/modal.css">
	<link rel="stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	
</head>
<body>
    <nav class="navbar navbar-expand-sm fixed-top" style = "background-color: paleturquoise">
        <!-- Brand/logo -->
        <a class="navbar-brand" href="index.php">
            <img src="imgs/logo2.png" alt="logo" style="width:150px;height:50px;">
        </a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link anchor" href="index.php">Home</a>
            </li>
            <li class="nav-item" style="width:100px">
                <a class="nav-link anchor" href="index.php?view=contact.php">Contact Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link anchor" href="index.php?view=gallery.php">Gallery</a>
            </li>
            <li class="nav-item">
                <a class="nav-link anchor" href="index.php?view=activities.php">Activities</a>
            </li>
            <li class="nav-item">
                <a class="nav-link anchor" href="index.php?view=services.php">Services</a>
            </li>
            <!-- Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle anchor" href="index.php?view=rooms.php" id="navbardrop" data-toggle="dropdown">
                Rooms
                </a>
                <div class="dropdown-menu">
                <a class="dropdown-item anchor" href="index.php?view=rooms.php">Super Deluxe</a>
                <a class="dropdown-item anchor" href="index.php?view=rooms.php">Super Deluxe Executive</a>
                <a class="dropdown-item anchor" href="index.php?view=rooms.php">Premium Executive</a>
                </div>
            </li>
        </ul>
        <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link anchor" id="myBtn" href="#">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link anchor" href="index.php?view=book.php">Book Tickets</a>
                </li>
            </ul>
        </div>      
    </nav>      
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
        <h2>Login</h2>
        <span class="close">&times;</span>
        <h2 style="color:white">Login</h2>
    </div>
    <div class="modal-body">
        <form action="#">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">+91 - </span>
                </div>
                <input type="text" class="form-control" placeholder="Enter phone number" id="usr" name="phone">
            </div>    
            <button type="submit" class="btn btn-info btn-block" id="sendotpbutton">Send OTP</button>
        </form>
    </div>
  </div>

</div>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
        <h2>Login</h2>
        <span class="close">&times;</span>
        <h2 style="color:white">Login</h2>
    </div>
    <div class="modal-body">
        <form action="#">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">+91 - </span>
                </div>
                <input type="text" class="form-control" placeholder="Enter phone number" id="usr" name="phone">
            </div>    
            <button type="submit" class="btn btn-info btn-block">Send OTP</button>
        </form>
    </div>
  </div>

</div>

<script src="js/modal.js"></script>
    <?php 
		if($_REQUEST['view']=="")
	    	include("home.php");
		else
			include($_REQUEST['view']);
	?>
    <footer style ="margin-top:30px;padding:30px" >
		<div class="row">
			<div class="col" style="text-align: left">
				<i class="fa fa-facebook"></i> &nbsp;
				<i class="fa fa-linkedin"></i> &nbsp;&nbsp;&nbsp;
				oasisresort@gmail.com | +91 7894561230
			</div>
			<div class="col" style="text-align: right">
				 &copy; Copyrights Reserved, 2021
			</div>
		</div>
      </footer>
</body>
</html>