<?php
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
//storing session variables from earlier page
$Roll_No=  $_SESSION["Roll_No"];
$Course_Name=$_SESSION["Course_Name"];
$Academic_Year=$_SESSION["Academic_Year"];

$sql = "select Student_Name,Attendence_ID,Roll_No,Academic_Year,Course_Name,Month,Year,Total_Working_Days,Total_Working_Hrs,Total_Present_Days,Total_Present_Hrs,Total_Absent_Days,Total_Absent_Hrs,Attendence_Percentage from attendence_upload where Roll_No= $Roll_No AND Academic_Year='$Academic_Year' AND Course_Name='$Course_Name' ";
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
                <td class="menu">
                    <div class="menu_div">
                        <table class="menu_tbl">
                            <tr>
                                <td class="menu_tbl_td" >
                                    <a href="parents_homepage_profile.php">
                                         <img src="img/profile.png" class="profile_img"><br>
                                         <b>PROFILE</b><br>
                                         <h6>Student's Profile</h6>
                                    </a>  
                                 </td>
                                </tr>
                                 <tr>
                                     <td class="menu_tbl_td" id="page_active">
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
                         <h1><?php echo $row["Student_Name"]; ?></h1>
                        <table class="data_tbl">
                            <tr class="data_tbl_tr" id="tr_odd">
                                <td class="data_tbl_td_label">Attendence_ID</td><td class="data_tbl_td_value"><?php echo $row["Attendence_ID"]; ?></td>
                            </tr>
                             <tr class="data_tbl_tr" id="tr_even">
                                <td class="data_tbl_td_label">Roll_No</td><td class="data_tbl_td_value"><?php echo $row["Roll_No"]; ?></td>
                            </tr>
                             <tr class="data_tbl_tr" id="tr_odd">
                                <td class="data_tbl_td_label">Academic_Year</td><td class="data_tbl_td_value"><?php echo $row["Academic_Year"]; ?></td>
                            </tr>
                             <tr class="data_tbl_tr" id="tr_even">
                                <td class="data_tbl_td_label">Course_Name</td><td class="data_tbl_td_value"><?php echo $row["Course_Name"]; ?></td>
                            </tr>
                             <tr class="data_tbl_tr" id="tr_odd">
                                <td class="data_tbl_td_label">Month</td><td class="data_tbl_td_value"><?php echo $row["Month"]; ?></td>
                            </tr>
                             <tr class="data_tbl_tr" id="tr_even">
                                <td class="data_tbl_td_label">Year</td><td class="data_tbl_td_value"><?php echo $row["Year"]; ?></td>
                            </tr>
                             <tr class="data_tbl_tr" id="tr_odd">
                                <td class="data_tbl_td_label">Total_Working_Days</td><td class="data_tbl_td_value"><?php echo $row["Total_Working_Days"]; ?></td>
                            </tr>
                             <tr class="data_tbl_tr" id="tr_even">
                                <td class="data_tbl_td_label">Total_Working_Hrs</td><td class="data_tbl_td_value"><?php echo $row["Total_Working_Hrs"]; ?></td>
                            </tr>
                             <tr class="data_tbl_tr" id="tr_odd">
                                <td class="data_tbl_td_label">Total_Present_Days</td><td class="data_tbl_td_value"><?php echo $row["Total_Present_Days"]; ?></td>
                            </tr>
                             <tr class="data_tbl_tr" id="tr_even">
                                <td class="data_tbl_td_label">Total_Present_Hrs</td><td class="data_tbl_td_value"><?php echo $row["Total_Present_Hrs"]; ?></td>
                            </tr>
                             <tr class="data_tbl_tr" id="tr_odd">
                                <td class="data_tbl_td_label">Total_Absent_Days</td><td class="data_tbl_td_value"><?php echo $row["Total_Absent_Days"]; ?></td>
                            </tr>
                             <tr class="data_tbl_tr" id="tr_even">
                                <td class="data_tbl_td_label">Total_Absent_Hrs</td><td class="data_tbl_td_value"><?php echo $row["Total_Absent_Hrs"]; ?></td>
                            </tr>
                            <tr class="data_tbl_tr" id="tr_odd">
                                <td class="data_tbl_td_label">Attendence_Percentage</td><td class="data_tbl_td_value"><?php echo $row["Attendence_Percentage"]; ?></td>
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
 ?>