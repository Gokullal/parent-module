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
$adm=$_SESSION["adm_no"];
$phn=$_SESSION["phn"];
$pass=$_SESSION["pass"];
$sql = "select email_id,adm_no,student_name,address,phone,parents_phone_no,dob,candidate_code,academic_year,course_name,club_name,roll_no,status,password from students where adm_no=$adm and parents_phone_no=$phn and password='$pass' ";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    if($row = mysqli_fetch_assoc($result)) {
?>

<html>
    <head>
        <title>Parents Home Page</title>
        <link href="./css/PARENT_HOMEPAGE.CSS" type="text/css" rel="stylesheet">
        <link rel="stylesheet" href="css/page.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <div class="container">
            <table class="container_tbl">
                <tr>
                <td class="menu" id="menu">
                    <div class="menu_div">
                        <table class="menu_tbl">
                            <tr>
                                <td class="menu_tbl_td" id="page_active">
                                    <a href="parents_homepage_profile.php">
                                         <img src="img/profile.png" class="profile_img"><br>
                                         <b>PROFILE</b><br>
                                         <h6>Student's Profile</h6>
                                    </a>  
                                 </td>
                                </tr>
                                 <tr>
                                     <td class="menu_tbl_td">
                                         <a href="parents_homepage_attendance.php">
                                             <img src="img/attendance.png">
                                             <b>ATTENDANCE</b><br>
                                             <h6>Student's Marklist</h6>
                                         </a>    
                                     </td>
                                </tr>
                                 <tr>
                                     <td class="menu_tbl_td">
                                        <a href="parents_homepage_marksheet.php">
                                            <img src="img/marksheet.png"><br>
                                            <b>MARKLIST</b><br>
                                            <h6>Student's Attendance</h6>
                                        </a>
                                     </td>
                                           
                                </tr>
                  
                        </table>
                    </div>
                </td>
                <td class="data">
                    <div class="data_div">
                         <h1><?php echo $row["student_name"]; ?></h1>
                        <table class="data_tbl">
                            <tr class="data_tbl_tr" id="tr_odd">
                                <td class="data_tbl_td_label">
                                     Email ID
                                </td>
                                <td class="data_tbl_td_value">
                                <?php echo $row["email_id"]; ?>
                                </td>
                            </tr>
                             <tr class="data_tbl_tr" id="tr_even">
                                <td class="data_tbl_td_label">
                                    Admission No
                                 </td>
                                 <td class="data_tbl_td_value">
                                     <?php echo $row["adm_no"]; ?>
                                 </td>
                            </tr>
                             <tr class="data_tbl_tr" id="tr_odd">
                                <td class="data_tbl_td_label">
                                    Address
                                 </td>
                                 <td class="data_tbl_td_value">
                                     <?php echo $row["address"]; ?>
                                 </td>
                            </tr>
                             <tr class="data_tbl_tr" id="tr_even">
                                <td class="data_tbl_td_label">
                                    Phone Number
                                 </td>
                                 <td class="data_tbl_td_value">
                                     <?php echo $row["phone"]; ?>
                                 </td>
                            </tr>
                             <tr class="data_tbl_tr" id="tr_odd">
                                <td class="data_tbl_td_label">
                                    Parents Phone Number
                                 </td>
                                 <td class="data_tbl_td_value">
                                     <?php echo $row["parents_phone_no"]; ?>
                                 </td>
                            </tr>
                             <tr class="data_tbl_tr" id="tr_even">
                                <td class="data_tbl_td_label">
                                    Date Of Birth
                                 </td>
                                 <td class="data_tbl_td_value">
                                     <?php echo $row["dob"]; ?>
                                 </td>
                            </tr>
                             <tr class="data_tbl_tr" id="tr_odd">
                                <td class="data_tbl_td_label">
                                    Candidate Code
                                 </td>
                                 <td class="data_tbl_td_value">
                                     <?php echo $row["candidate_code"]; ?>
                                 </td>
                            </tr>
                            <tr class="data_tbl_tr" id="tr_even">
                                <td class="data_tbl_td_label" >
                                    Course Name
                                </td>
                                <td class="data_tbl_td_value">
                                    <?php echo $row["course_name"]; ?>
                                </td>
                            </tr>
                             <tr class="data_tbl_tr" id="tr_odd">
                                <td class="data_tbl_td_label">
                                    Academic Year
                                 </td>
                                 <td class="data_tbl_td_value">
                                     <?php echo $row["academic_year"]; ?>
                                 </td>
                            </tr>

                             <tr class="data_tbl_tr" id="tr_even">
                                <td class="data_tbl_td_label">
                                    Club Name
                                 </td>
                                 <td class="data_tbl_td_value">
                                     <?php echo $row["club_name"]; ?>
                                 </td>
                            </tr>
                             <tr class="data_tbl_tr" id="tr_odd">
                                <td class="data_tbl_td_label">
                                    Roll Number
                                 </td>
                                 <td class="data_tbl_td_value">
                                     <?php echo $row["roll_no"]; ?>
                                 </td>
                            </tr>
                            <tr class="data_tbl_tr" id="tr_even">
                                <td class="data_tbl_td_label">
                                    Status
                                </td>
                                <td class="data_tbl_td_value">
                                    <?php echo $row["status"]; ?>
                                </td>
                            </tr>
                        </table>
                    </div>
                       
                </td>
            </tr>
            </table>
        </div>

        <br>
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
 <?php
  }
} else {
   echo "0 results"; 
}
mysqli_close($conn);
//assigning session variables
$_SESSION["Roll_No"] =$row["roll_no"];
$_SESSION["Academic_Year"] =$row["academic_year"];
$_SESSION["Course_Name"] =$row["course_name"];
 ?>