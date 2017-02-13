<!-- 
#  ----------------------------------------		#
#  Vinh IT (Tran Quang Vinh It)                 #
#  Mobile  0905246855                           #
#  Contact designwebvn@gmail.com	            #
#  Please don't edit if you use this code       #
#  Website http://designwebvn.com               #
#  ----------------------------------------	    #
 -->
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
			 	echo "<tr><td><img src='../images/tqvheaderbds/$tqvimg_imges' width='980' ></td></tr>";
			
			echo "</table>";
		}
	}
		else {
		 ?>
		<table id="tranquangvinhdesignf" name="tranquangvinhdesignf" width="980"  border="0" cellpadding="0" cellspacing="0">
	<tr><td colspan="10"><img src="images/batdongsan_green_01.png" width="980" height="73" alt=""></td></tr>
	<tr><td colspan="10"><img src="images/batdongsan_green_02.png" width="980" height="32" alt=""></td></tr>
		</table>
		<?php  } ?></td></tr>
	<tr><td colspan="10">
		<table id="tranquangvinhdesignit" name="tranquangvinhdesign" width="980"  border="0" cellpadding="0" cellspacing="0">
		        <tr>
	<td><a href='index.php' onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('r1','','images/batdongsan_green_03.png',1)"><img src='images/batdongsan_green_03.png' border='0' width="100" height="29" alt='Home' class="Tips1" title="Home" id="r1"></a></td>
	<td><a href='http://www.diadiem.com/?st=DaNang' onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('r2','','images/batdongsan_green_041.png',1)" target='_blank'><img src='images/batdongsan_green_04.png' border='0' width="102" height="29" alt='Da Nang Map' class="Tips1" title="Da Nang Map" id="r2"></a></td>
	<td colspan="2"><a href='index.php?tqvbds=tqvkygui' onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('r3','','images/batdongsan_green_051.png',1)"><img src='images/batdongsan_green_05.png' border='0' width="124" height="29" alt='Deposit and register' class="Tips1" title="Deposit and register" id="r3"></a></td>
	<td><a href='index.php?tqvbds=tqvmember' onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('r4','','images/batdongsan_green_061.png',1)"><img src='images/batdongsan_green_06.png' border='0' width="108" height="29" alt='Member' class="Tips1" title="Member" id="r4"></a></td>
	<td><a href='index.php?tqvbds=tqvcontact' onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('r5','','images/batdongsan_green_071.png',1)"><img src='images/batdongsan_green_07.png' border='0' width="103" height="29" alt='Contact' class="Tips1" title="Contact" id="r5"></a></td><td> <a href='index.php?tqvbds=tqvonline' onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('r6','','images/batdongsan_green_081.png',1)"><img src='images/batdongsan_green_08.png' border='0' width="271" height="29" alt='Online TV' class="Tips1" title="Online TV" id="r6"></a></td><td background='images/batdongsan_green_09nen.gif' width='53' height='29' ><div align='right'><a href='<?php echo $rootbdseng; ?>'> <img src='images/england.gif' height='10' width='16'> </a> </td><td><img src="images/batdongsan_green_09.png" width="30" height="29" alt=""></td><td background="images/batdongsan_green_10.png" width="37" height="29"> <div align='right'><a href='<?php echo $rootbds; ?>'> <img src='images/vietnam.gif' height='10' width='16'> </a></td><td><img src="images/batdongsan_green_11.png" width="52" height="29" alt=""></td></tr>
		</table>
		</td></tr>
    <tr><td colspan="10" background='images/batdongsan_green_12.png' width='980' height='23'></td>
    	</tr>
</table>
</body>
</html>