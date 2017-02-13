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



$THANHVIEN["id"]	=	0;
// Đếm số người đang Online
$timexpired = 600; // in seconds
$timeout = time() - $timexpired;
@mysql_query("DELETE FROM `tqv_bdsonline` WHERE `tqvbds_time` < ".$timeout."");
@mysql_query("OPTIMIZE TABLE `tqv_bdsonline`");

if (empty($HTTP_X_FORWARDED_FOR)) $IP_NUMBER = getenv("REMOTE_ADDR");
else $IP_NUMBER = $HTTP_X_FORWARDED_FOR;
$url	=	getenv("QUERY_STRING");

$result =@mysql_query("SELECT * FROM tqv_bdsonline WHERE tqvbds_ip='$IP_NUMBER' and tqvbds_user=".$THANHVIEN["id"]);
$num_rows = @mysql_num_rows($result);
if($num_rows != 0) @mysql_query("UPDATE tqv_bdsonline SET tqvbds_time='".time()."', tqvbds_site='".$url."' WHERE `tqvbds_ip`='$IP_NUMBER' and tqvbds_user=".$THANHVIEN["id"]);
else
{
	$sql	=	"INSERT INTO tqv_bdsonline VALUES ('$IP_NUMBER','".time()."','".$url."','".getenv("HTTP_USER_AGENT")."',".$THANHVIEN["id"].")";
	@mysql_query($sql);
	@mysql_query("UPDATE bien SET gia_tri = gia_tri + 1 WHERE ten = 'bo_dem'");
	
	
}
// Đếm số người đang Online
?>

