<!-- 
#  ----------------------------------------		#
#  Vinh IT (Tran Quang Vinh It)                 #
#  Mobile  0905246855                           #
#  Contact designwebvn@gmail.com	            #
#  Please don't edit if you use this code       #
#  Website http://designwebvn.com               #
#  ----------------------------------------	    #
 -->
<?php

require_once("class.php");

if ( $_GET["ns"] == "logout" )
{
$_SESSION["member_id"] = 0;
}
if ( ! $_SESSION["member_id"] )
{
	$DIALOOSEWEB->admin->login();
}
else
{
switch ( intval($_GET["ns"]) )
	{
	
		default:
			$DIALOOSEWEB->admin->main();
		break;
	}
}
    
?>