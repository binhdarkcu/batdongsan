<?php
session_start();
ob_start(); 
if($_SESSION['tqvcheckloginbds']!=true){
  $url="index.php";
   header("Location: ".$url."");
}
else {
?>
<!-- 
#  ----------------------------------------		#
#  Vinh IT (Tran Quang Vinh It)                 #
#  Mobile  0905246855                           #
#  Contact designwebvn@gmail.com	            #
#  Please don't edit if you use this code       #
#  Website http://designwebvn.com               #
#  ----------------------------------------	    #
 -->	
<body topmargin="0" bottommargin="0">
<?php  
	if(!defined("websitebds")){
    die ("<div align='center'><font color='blue' size='5'> Access Denied ! Contact Designwebvn@gmail.com");
}
            unset($_SESSION['tqvcheckloginbds']);
			unset($_SESSION['tqvusername']);
			unset($_SESSION['tqvemail']);
			unset($_SESSION['tqvadmid']);
			$url="index.php";
			header("Location: ".$url."");

	?>
  
<?php } ?>		


