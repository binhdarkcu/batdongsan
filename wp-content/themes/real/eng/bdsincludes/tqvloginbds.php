<?php
session_start();
ob_start(); 
if($_SESSION['tqvcheckloginbds']==true){
 $url="index.php?tqvbds=success";
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
 <form id="form13579" name="form13579" method="post" action="index.php?tqvbds=checklogin" onsubmit="return check_form(this)">
<table id="tranquangvinhdesignfr" name="tranquangvinhdesigngr" width="200"  border="0" cellpadding="0" cellspacing="0">
     <tr><td height=5 colspan='3'></td></tr>
     <tr><td  colspan='3'><div align='left'> Username </div></td></tr>
    <tr><td  colspan='3'><input name='bdsusername' type="text" size="25"  class="keyboardInput" class="button21" /></td></tr>
    <tr><td  colspan='3'><div align='left'> Password </div></td></tr>
    <tr><td  colspan='3'><input name="bdsmatkhau" type="password"  class="keyboardInput" size="25" class="button21"/></td></tr>   
    <tr><td height=5 colspan='3'></td></tr>
   <tr><td  colspan='3'><div align='center'> <input src="images/batdongsan_green_31.gif" onmouseover="this.src='images/batdongsan_green_31.gif'" onmouseout="this.src='images/batdongsan_green_31.gif'" type="image" width="106" height="37"></td></tr>	               
</table>
</form>
		<?php } ?>