<?php
// Start the session
session_start();
?>
<?php
$servername = "localhost";
$username = "root";
$password = "root123456";
$dbname = "snc_table";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Parent login</title>
        <link rel="stylesheet" href="css/page.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
<!--===============================================================================================-->
</head>
<body>
	
    <header id="header">
       <a href="www.sncollegecherthala.in"><img id="mlogo" src="img/logo.png"></a>
     </header>

     <div class="navbar">
        <a href="#home">Home</a>
        <a href="#news">News</a>
        <div class="dropdown">
            <button class="dropbtn">Dropdown
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
                <a href="#">Link 3</a>
            </div>
         </div> 
          <h1>Welcome to Department of Computer Science</h1>
        </div>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="img/img-01.png" alt="IMG">
				</div>

				<form class="login100-form" method="post">
					<span class="login100-form-title">
						Parent Login
					</span>

					<div class="wrap-input100">
						<input class="input100" type="text"  placeholder="ADMISSION NUMBER" name="Adm_no" required="required">
					</div>
                    
                    <div class="wrap-input100" >
						<input class="input100" type="text"  placeholder="Parent Phone Number" name="PHN" required="required">
					</div>

					<div class="wrap-input100">
						<input class="input100" type="password" placeholder="Password" name="Pass" required="required">
					</div>
					
					<div class="container-login100-form-btn">
                        <input type="submit" class="login100-form-btn" value="Login" name="submit">
					</div>
				</form>
                <?php
                   //check whether submit is clicked
                   if(isset($_POST['submit'])){
                        $AS=$_POST['Adm_no'];
                        $phn=$_POST['PHN'];
                        $pass=$_POST['Pass'];
                        $sql = "select * from students where adm_no=$AS and parents_phone_no=$phn and password='$pass' ";
                        $result = mysqli_query($conn, $sql);
                           //checks number of rows is greater than 0
                       if (mysqli_num_rows($result) > 0) {
                           if($row = mysqli_fetch_assoc($result)) {
                           $_SESSION["adm_no"] =$row["adm_no"];
                           $_SESSION["phn"] =$row["parents_phone_no"];
                           $_SESSION["pass"] =$row["password"];
                           }
                            header("location:http://localhost/parents_module/parents_homepage_profile.php");

                        }
                       else{
                        echo"<p class='inc'><font color=red font face='arial' size='2pt'>Details does not match</font></p>";
                       }
                   }
                ?>
			</div>
		</div>
	</div>
           <footer id="footer">
                <div class="address">
                    <h2>Address</h2>
                    <div class="details">
                    Sree Narayana College<br>
                    SN Puram PO Cherthala<br>
                    Alappuzha, Kerala<br>
                    Pin : 688523<br>
                    snccherthala@gmail.com
                </div>
                </div>
                <div class="social-icons">
                    <h2>Follow Us On</h2>
                    <div class="images">
                        <a href="www.facebook.com"><img src="img/facebook.png" alt="Facebook"></a>
                        <a href="www.youtube.com"><img src="img/youtube.png" alt="Youtube"></a>
                        <a href="www.instagram.com"><img src="img/instagram.png" alt="Instagram"></a>
                    </div>
                </div>
            </footer>
             <p id="bottom-line">Designed & Maintained by Department of Computer Science &#10084;&#65039;</p>

</body>
</html>