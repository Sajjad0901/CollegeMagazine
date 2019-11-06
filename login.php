<?php

function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}
$Yourname= $_POST['Yourname'];
$Password= $_POST['password'];

  $flag=0;
  $link = mysqli_connect("localhost", "root", "", "test"); 

  if($link === false){ 
  	die("ERROR: Could not connect. " 
  				. mysqli_connect_error()); 
  }
  
  $sql = "SELECT * FROM register"; 
  if($res = mysqli_query($link, $sql)){ 
  	if(mysqli_num_rows($res) > 0){ 
  		 while($row = mysqli_fetch_array($res))
		 { 
 			if($Yourname == $row['email'] && $Password== $row['password'])
 			{	 
 				 $flag=1;
				 header("Location: ../demo9/home.html");
 				 break;
 			}	
  		} 
		header("Location: ../demo9/home.html");
  		mysqli_free_result($res); 
 	 } 
 	else{ 
  		$flag=0;
 	}  
  } 

  if($flag == 1)
  {
 	return 1;
  }
  else
  {
 	return 0;
  }

  mysqli_close($link); 
?> 
