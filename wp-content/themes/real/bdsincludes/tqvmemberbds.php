   <?php  
   	   if($_SESSION['tqvcheckloginbds']!=true){
   	   echo "<script> alert('Bạn phải đăng ký thành viên mới sử dụng được chức năng này !') </script>";  
   	   $url="$rootbds/thanh-vien/dang-ky.html";
       header("Location: ".$url."");

   	   } 
else {
#  ----------------------------------------		#
#  Vinh IT (Tran Quang Vinh It)                 #
#  Mobile  0905246855                           #
#  Contact designwebvn@gmail.com	            #
#  Please don't edit if you use this code       #
#  Website http://designwebvn.com               #
#  ----------------------------------------	    #
	if(!defined("websitebds")){
    die ("<div align='center'><font color='blue' size='5'> Access Denied ! Contact Designwebvn@gmail.com");
}
	?>
<style type="text/css">
.metatranquangvinhit { 

        width : 485px;
        color: #181818;

        background: #d3edfa;

        padding: 5px 5px 5px 5px;

        font-weight: normal;

        letter-spacing: 0;

	border-top: 1px solid #b6e4fb;

	border-left: 1px solid #b6e4fb;

	border-right: 1px solid #b6e4fb;

       }
.tranquangvinhdesign { 

                font-size: 115%;

                background: #ffffff;

                padding: 10px;

	        border: 1px solid #b6e4fb;

                } 
</style>	
 <table border='0' width='980' name='quangvinhit' cellSpacing=0 cellPadding=0>
    	<tr><td width='229' valign='top'>
    	 
    <?php include"bdsincludes/tqvleftbds.php"; ?>
    	
    	</td><td width='751' valign='top'>
    		<table border='0' width='751' name='tranquangvinhfed' cellSpacing=0 cellPadding=0>
    		<tr><td width='523'>
    			<table border='0' width='523' name='tranquangvinhfeds' cellSpacing=0 cellPadding=0>
    		      <tr><td background='<?php echo $rootbds; ?>/images/batdongsan_greenmember_14.png' width='523' height='50' valign='center'><div align='left'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='<?php echo $rootbds; ?>/images/managementnews.png' border='0' width='20' height='20'><font color='#366e03'> Danh sách thành viên </font></td></tr>
    		      <tr><td background='<?php echo $rootbds; ?>/images/batdongsan_greenmember_17.png' width='523' height='1243' valign='top'>
    		           <div align='center'> 
                      <table border='0' width='485' name='thietkefwebsite' cellSpacing='0' cellPadding='0' class='metatranquangvinhit' height=20>
                      <tr><td width=30><div align='left'><span class='quangvinhdesign'> Số TT </span></td><td width='3'></td><td width='100'><div align='left'><span class='quangvinhdesign'> Họ và tên </span></div></td> <td width='3'></td><td width='100'><div align='left'><span class='quangvinhdesign'> Email </span> </td><td width='5' ></td><td width='100'> <div align='left'><span class='quangvinhdesign'> Mobile </span></td></tr>
    		         </table> 
    <table border='0' width='485' name='thietkefwebsite' cellSpacing='0' cellPadding='0' class='tranquangvinhdesign' >
    		<tr><td valign='top'></td></tr>
    		<?php 
    		$vinh=0+0;
    		$sqlmember=@mysql_query("select * from tqv_bdsadmin where tqvadmin_active='1'");
    	    while($rowmember=@mysql_fetch_assoc($sqlmember)){
    	    	$name=$rowmember['tqvadmin_name'];
    	    	$email=$rowmember['tqvadmin_email'];
    	    	$mobile=$rowmember['tqvadmin_mobile']; 	
    	    	$vinh++;
    	    	echo "<tr><td width=30 height=32><div align='left'><span class='quangvinhdesign'> $vinh </span></td><td width='3'></td><td width='100'><div align='left'><span class='quangvinhdesign'> $name </span></div></td> <td width='3'></td><td width='100'><div align='left'><span class='quangvinhdesign'> $email </span> </td><td width='5' ></td><td width='100'> <div align='left'><span class='quangvinhdesign'> $mobile </span></td></tr>";	
    	    }
    		 ?>
    		</table>
    		</td></tr>
    
    		     <tr><td background='<?php echo $rootbds; ?>/images/batdongsan_greenmember_47.png' width='523' height='62'></td></tr>
    		      </table>
    		</td>  <td width='228' valign='top'>
    		<?php include "bdsincludes/tqvrightbds.php";?>
    		</td></tr>
    		
    		
    		
    		</table>
    		</td></tr> 
    	</table>
    			<?php } ?>