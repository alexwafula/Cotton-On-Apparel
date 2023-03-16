<!DOCTYPE html>
<html lang="">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Account | Cotton On</title>
	<link rel="shortcut icon" href="images/logo.png" width="12px">
	   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<script src=""></script>

	<div class="header">
    <div class="navbar">
		<nav>
			<a href="index.php"><img src='images/logo.png' width="125px"></a>

			<ul id="MenuItems">
				<li><a href="index.php">Home</a></li>
				<li><a href="account.php">Account</a></li>
				<li><a href="admin.php">Admin</a></li>
			</ul>

		</nav>


	</div>
            
            
            <!----login form------>
            
            
        <div class="account-page">

        <div class="container">
            <div class="row">

                <div class="form-container">
                    <div class="form-btn">
                        <span onclick="login()">Login</span>
                      
                    

                    </div>

                       <form action="aalogin.php" method="post">

                        <input type="text" placeholder="Username">
                        <input type="password" placeholder="Password">
                        <button type="submit" class="btn btn-primary" name="add_admin_btn">Login</button>
                        <a href="">Forgot Password</a>

                    </form>
                    
				</div>
			</div>
				 </div>
	</div>


</body>

</html>
