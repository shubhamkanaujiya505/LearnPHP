<!-- step 1 session_start();
step 2 $_SESSION[name] = value; // set session name & value
step 3 echo $_session[name]; // get session value -->

<!-- use on login page -->

<!-- delete session  -->

<!-- step 1 session_unset(); // remove all session variables
step 2 session_destroy(); // destroy the session -->


<?php 

session_start();

// $_SESSION['favcolor'] = "orange";
// vlaue can change also 
$_SESSION['favcolor'] = "Green";

echo "session variable is set";


?>