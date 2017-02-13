<!-- 
#  ----------------------------------------		#
#  Vinh IT (Tran Quang Vinh It)                 #
#  Mobile  0905246855                           #
#  Contact designwebvn@gmail.com	            #
#  Please don't edit if you use this code       #
#  Website http://designwebvn.com               #
#  ----------------------------------------	    #  -->
	<?php 
#################################################
#  ----------------------------------------		#
#  VQTL (Vinh- Quynh- Trang - Luyen)            #
#  Mobile  0905246855	                        #
#  Contact designwebvn@gmail.com	            #
#  Please don't edit if you use this code       #
#  ----------------------------------------	    # 
################################################# 
	if(!defined("websitebds")){
    die ("<div align='center'><font color='blue' size='5'> Access Denied ! Contact Designwebvn@gmail.com");
}
   
	
		   $ctnusername=addslashes($_POST["bdsusername"]); 
		   $ctnmatkhau=md5(md5($_POST["bdsmatkhau"])); 
		   $quangvinhactive=1+0;
	       $sqlkiemtra=@mysql_query("select * from tqv_bdsadmin where tqvadmin_tendn='$ctnusername'");
           $kt=@mysql_num_rows($sqlkiemtra);
              if($kt){
   	       $sqlkiemtra1=@mysql_query("select * from tqv_bdsadmin where tqvadmin_matkhau='$ctnmatkhau' and tqvadmin_active='$quangvinhactive'"); 
   	          $kt1=@mysql_num_rows($sqlkiemtra1);
   	          if($kt1){
   	        $msg="";
   	        $row=@mysql_fetch_assoc($sqlkiemtra1);
   	        $tqvusername=$row["tqvadmin_name"];
   	        session_register("tqvusername");
   	        $tqvadmid=$row["tqvadmin_id"];
   	        $tqvadid=base64_encode($tqvadmid);
   	        session_register("tqvadmid");
   	        $tqvemail=$row["tqvadmin_email"];
   	        session_register("tqvemail"); 
			$tqvcheckloginbds= true;
			session_register("tqvcheckloginbds");
		    $url="index.php?tqvbds=success&member=$tqvadid";
			header("Location: ".$url."");
            ob_end_flush();

	}
		else {
            echo "<script> alert('Sai tên đăng nhập hoặc mật khẩu!') </script>"; 
            
       } 
         }  
       else {
            echo "<script> alert('Sai tên đăng nhập hoặc mật khẩu!') </script>"; 
            
       } 
      	
  
		 

	?>
<form id="form1" name="form1" method="post" action="index.php?tqvbds=checklogin" onsubmit="return check_form(this)">
<table id="tranquangvinhdesignfr" name="tranquangvinhdesigngr" width="200"  border="0" cellpadding="0" cellspacing="0">
     <tr><td height=5 colspan='3'></td></tr>
     <tr><td  colspan='3'><div align='left'> Tên đăng nhập </div></td></tr>
    <tr><td  colspan='3'><input name='bdsusername' type="text" size="25"  class="keyboardInput" class="button21" /></td></tr>
    <tr><td  colspan='3'><div align='left'> Mật khẩu </div></td></tr>
    <tr><td  colspan='3'><input name="bdsmatkhau" type="password"  class="keyboardInput" size="25" class="button21"/></td></tr>   
    <tr><td height=5 colspan='3'></td></tr>
   <tr><td  colspan='3'><div align='center'> <input src="images/batdongsan_green_31.gif" onmouseover="this.src='images/batdongsan_green_31.gif'" onmouseout="this.src='images/batdongsan_green_31.gif'" type="image" width="106" height="37"></td></tr>	               
  
 </table>
</form>