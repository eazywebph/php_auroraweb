<?php
/* Change this line only on the live server. */
set_include_path('/storage/ssd5/850/5249850/public_html/inc_/');

include ('inc_/inc_connect.php');
include ('inc_/inc_session.php');

if ( !empty($_POST["frm_user"]) or !empty($_POST["frm_pass"]) ) {
    
    //echo "Form filled success!<br/>";
    
    // gets the form results for 2 only
    $u_name = $_POST['frm_user'];
    $u_pass = $_POST['frm_pass'];
    
    $qlogin = mysqli_query ($con,"SELECT * FROM users WHERE u_username = '$u_name' AND u_password = '$u_pass' LIMIT 1");
    
    if ($qlogin) {
    
    $get = mysqli_fetch_assoc($qlogin);
        
        // gets the variables from the 2 results
        $name = $get['u_username'];
        $pass = $get['u_password'];
    
        if ( ($u_name==$name) && ($u_pass==$pass) ) {
            //echo "Matched!";
            $_SESSION['u_id'] = $get['u_id'];
            $_SESSION['u_priv'] = $get['u_priv'];
            $_SESSION['u_nick'] = $get['u_nick'];
            $_SESSION['u_last_login'] = $get['u_last_login'];
            $_SESSION['u_username'] = $get['u_username'];
            $_SESSION['u_firstname'] = $get['u_firstname'];
            $_SESSION['u_lastname'] = $get['u_lastname'];
            $_SESSION['u_email'] = $get['u_email'];
            $_SESSION['u_password'] = $get['u_password'];
            header('Location: index.php');
        }
        
        else {
            echo "Username or Password does not match. / Username does not exist.<br/>";
            echo "<a href='login.php'>Try logging-in again.</a>";
        }
        
    }

} 

else {  
    echo "Please enter your username and password"; 
}

//echo "<br/>".$u_name;
//echo "<br/>".$u_pass;



?>