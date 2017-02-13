<!-- 
#  ----------------------------------------		#
#  Vinh IT (Tran Quang Vinh It)                 #
#  Mobile  0905246855                           #
#  Contact designwebvn@gmail.com	            #
#  Please don't edit if you use this code       #
#  Website http://designwebvn.com               #
#  ----------------------------------------	    #
 -->
<?
    $webmaster = "binhdarkcu@gmail.com";
    $db_host = "localhost";
    $db_username = "root";
    $db_password = "root";
    $db_name = "batdongsan";
    // Begin config
	$info['db_host'] = "localhost";
	$info['db_name'] = "batdongsan";
	$info['db_username'] = "root";
	$info['db_password'] = "root";
	// End config
    $rootbds="http://localhost/photre1";
    $rootbdseng="http://localhost/photre1/eng";
$conn = @mysql_connect($db_host, $db_username, $db_password) or die(mysql_error());
$db = @mysql_select_db($db_name, $conn) or die(mysql_error());
  
?>
