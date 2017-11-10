<?php

if(isset($_POST['signup_submit']))
{
	if(!empty($_POST['signup_submit']))
	{
			$con=mysqli_connect("localhost","root",'Naveen$aini');
			$user_name=$_POST['email'];
			$user_password=$_POST['password'];
			$use_conf_password=$_POST['password2'];
		if($user_password===$user_conf_password)
		{
			echo "helo";
			if(!$con)
			{
			die("Could not connect:".mysqli_connect_error()) ;
			}
		//echo("<p>Database Connected</p>");

			mysqli_select_db($con,"Project") ;
			mysqli_query($con,"INSERT INTO Login(email,passwd) VALUES('$_POST[email]','$_POST[password]')") ;
			mysqli_close($con) ;
		}
			else
			{
				echo "<script>alert('password not match');
					window.location.href='registrationpage.php'; </script>";

				}
	}

}
		

?>
