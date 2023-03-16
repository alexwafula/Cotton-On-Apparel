<!DOCTYPE html>
<html lang="en">
<head>
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
				<title>Account | Cotton On</title>
				<link rel="stylesheet" href="style.css">
               <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
				<link rel="shortcut icon" href="images/logo.png" width="20px">
</head>

<body>
				<script src=""></script>
				
				<!---header--------->
				
				
    <div class="header">

 <div class="navbar">
      
        
        <ul id="MenuItems">
         <a href="index.php"><img src="images/logo.png" width="125px"></a>
          <li class="active"><a href="index.php">Home</a></li>
            <li><a href="product.html">Products</a>
            <div class="sub-menu-1">
                <ul>
                   <li class="hover-me"><a href="men.html">Men</a>
                   <div class="sub-menu-2">
                       <ul>
                           <li><a href="jerseys.html">Jerseys</a></li>
                           <li><a href="shoes.html">Trainers</a></li>
                       </ul>
                   </div>
                   </li> 
                   <li class="hover-me"><a href="women.html">Women</a>
                   <div class="sub-menu-2">
                       <ul>
                            <li><a href="leggings.html">Leggings</a></li>
                           <li><a href="sportsvests.html">Sports Tops</a></li>

                       </ul>


                   </div>


                   </li>
                </ul>


            </div>

            </li>
            <li><a href="about.html">About</a></li>
            <li><a href="admin.php">Admin</a></li>
            <li><a href="account.php">Account</a></li>
            
            
            </ul>
        
        
        </nav>
    </div>
				
	<!----form-------->			
				 <div class="account-page">

        <div class="container">
            <div class="row">

                <div class="form-container">
                    <div class="form-btn">.
                        <span onclick="login()">Login</span>
                        <span onclick="register()">Register</span>
                        <hr id="Indicator">

                    </div>

                    <form action="lprocessregister.php" id="LoginForm" method="post">

                        <input type="text" placeholder="Username" name="username">
                        <input type="password" placeholder="Password" name="password">
                        <button type="submit" class="btn" name="authenticate_user">Login</button>
                        <a href="">Forgot Password</a>

                    </form>

                    <form action="processregister.php" id="RegForm" method="post">
                        <input type="text" placeholder="Username" name="Username">
                        <input type="email" placeholder="Email" name="Email">
                        <input type="password" placeholder="Password" name="Password">
                        <button type="submit" class="btn">Submit</button>

                    </form>
                </div>

            </div>


        </div>

    </div>

<!---Js for account page------->
			 <script>
        
        
    var LoginForm = document.getElementById("LoginForm");
      var RegForm = document.getElementById("RegForm");
    var Indicator = document.getElementById("Indicator");
        
       function  register()
        {
           RegForm.style.transform = "translateX(0px)";
            LoginForm.style.transform = "translateX(0px)";
            Indicator.style.transform = "translateX(100px)";
       }
           
           
             function  login()
        {
           RegForm.style.transform = "translateX(300px)";
            LoginForm.style.transform = "translateX(300px)";
              Indicator.style.transform = "translateX(0px)";
            
             }
    
    
    
    
    </script>
	
				
				
				
				
</body>
</html>
