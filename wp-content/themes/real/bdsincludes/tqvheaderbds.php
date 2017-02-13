<!-- 
#  ----------------------------------------		#
#  Vinh IT (Tran Quang Vinh It)                 #
#  Mobile  0905246855                           #
#  Contact designwebvn@gmail.com	            #
#  Please don't edit if you use this code       #
#  Website http://designwebvn.com               #
#  ----------------------------------------	    #  -->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<html>
<head>
	<?php 

	if(!defined("websitebds")){
    die ("<div align='center'><font color='blue' size='5'> Access Denied ! Contact Designwebvn@gmail.com");
}
	?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<table id="tranquangvinhdesign" name="tranquangvinhdesign" width="980"  border="0" cellpadding="0" cellspacing="0">
		<tr><td colspan="10">
		<?php 
		$tt=1+0;
		$sqlheader=@mysql_query("select * from tqv_bdsimageshearder where tqvimg_status='$tt' ");
		$quangvinhit=@mysql_num_rows($sqlheader);
		if($quangvinhit){
			echo"<table id='tranquangvinhdesignfh' name='tranquangvinhdesignfh' width='980'  border='0' cellpadding='0' cellspacing='0'>";
		while($numheader=@mysql_fetch_assoc($sqlheader)){
			 $tqvimg_imges=$numheader['tqvimg_imges'];
			 	echo "<tr><td><img src='$rootbds/images/tqvheaderbds/$tqvimg_imges' width='980' ></td></tr>";
			
			echo "</table>";
		}
	}
		else {
		 ?>
		<table id="tranquangvinhdesignf" name="tranquangvinhdesignf" width="980"  border="0" cellpadding="0" cellspacing="0">
	<tr><td colspan="10"><img src="<?php echo $rootbds; ?>/images/batdongsan_green_01.png" width="980" height="73" alt=""></td></tr>
	<tr><td colspan="10"><img src="<?php echo $rootbds; ?>/images/batdongsan_green_02.png" width="980" height="32" alt=""></td></tr>
		</table>
		<?php  } ?></td></tr>
	
	
	<tr><td colspan="10">
		<table id="tranquangvinhdesignit" name="tranquangvinhdesign" width="980"  border="0" cellpadding="0" cellspacing="0">
		        <tr>
	<td><a href='<?php echo $rootbds; ?>/trang-chu' onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('r1','','<?php echo $rootbds; ?>/images/batdongsan_green_03.png',1)"><img src='<?php echo $rootbds; ?>/images/batdongsan_green_03.png' border='0' width="100" height="29" alt='Trang chủ' class="Tips1" title="Trang chủ" id="r1"></a></td>
	<td><a href='http://www.diadiem.com/?st=DaNang' onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('r2','','<?php echo $rootbds; ?>/images/batdongsan_green_041.png',1)" target='_blank'><img src='<?php echo $rootbds; ?>/images/batdongsan_green_04.png' border='0' width="102" height="29" alt='Bản đồ Đà Nẵng' class="Tips1" title="Bản đồ Đà Nẵng" id="r2"></a></td>
	<td colspan="2"><a href='<?php echo $rootbds; ?>/ky-gui/dang-ky.html' onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('r3','','<?php echo $rootbds; ?>/images/batdongsan_green_051.png',1)"><img src='<?php echo $rootbds; ?>/images/batdongsan_green_05.png' border='0' width="124" height="29" alt='Ký gửi đăng ký' class="Tips1" title="Ký gửi đăng ký" id="r3"></a></td>
	<td><a href='<?php echo $rootbds; ?>/thanh-vien/dang-ky.html' onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('r4','','<?php echo $rootbds; ?>/images/batdongsan_green_061.png',1)"><img src='<?php echo $rootbds; ?>/images/batdongsan_green_06.png' border='0' width="108" height="29" alt='Thành viên' class="Tips1" title="Thành viên" id="r4"></a></td>
	<td><a href='<?php echo $rootbds; ?>/lien-he.html' onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('r5','','<?php echo $rootbds; ?>/images/batdongsan_green_071.gif',1)"><img src='<?php echo $rootbds; ?>/images/batdongsan_green_07.gif' border='0' width="103" height="29" alt='Liên hệ' class="Tips1" title="Liên hệ" id="r5"></a></td><td> <a href='<?php echo $rootbds; ?>/index.php?tqvbds=tqvonline' onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('r6','','<?php echo $rootbds; ?>/images/batdongsan_green_081.png',1)"><img src='<?php echo $rootbds; ?>/images/batdongsan_green_08.png' border='0' width="271" height="29" alt='Truyền Hình Trực Tuyến' class="Tips1" title="Truyền Hình Trực Tuyến" id="r6"></a></td><td background='<?php echo $rootbds; ?>/images/batdongsan_green_09nen.gif' width='53' height='29' ><div align='right'><a href='<?php echo $rootbdseng; ?>'> <img src='<?php echo $rootbds; ?>/images/england.gif' height='10' width='16'> </a> </td><td><img src="<?php echo $rootbds; ?>/images/batdongsan_green_09.png" width="30" height="29" alt=""></td><td background="<?php echo $rootbds; ?>/images/batdongsan_green_10.png" width="37" height="29"> <div align='right'><a href='<?php echo $rootbds; ?>'> <img src='<?php echo $rootbds; ?>/images/vietnam.gif' height='10' width='16'> </a></td><td><img src="<?php echo $rootbds; ?>/images/batdongsan_green_11.png" width="52" height="29" alt=""></td></tr>
		</table>
		</td></tr>
    <tr><td colspan="10" background='<?php echo $rootbds; ?>/images/batdongsan_green_12.png' width='980' height='23'></td>
    	</tr>
</table>
</body>
</html>