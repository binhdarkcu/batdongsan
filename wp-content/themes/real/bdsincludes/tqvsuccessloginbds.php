<?php
session_start();
ob_start(); 
if($_SESSION['tqvcheckloginbds']!=true){
 $url="index.php";
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
$matv=$_SESSION['tqvadmid'];
$tqvadid=base64_encode($matv);
?>
  <table id="tranquangvinhdesignfr" name="tranquangvinhdesigngr" width="190"  border="0" cellpadding="0" cellspacing="0">
     <tr><td  colspan='3' height=25><div align='left'><img src='images/namectnvietnam.png' border='0' width=25 height=25> <font color=#549c13> <?php echo $_SESSION['tqvusername']; ?> </font> </div></td></tr>
    <tr><td  colspan='3'><font color=#549c13>-----------------------------</font></td></tr>
    <tr><td  colspan='3'><div align='left'><img src='images/tqvmembersuccsess.gif' border='0' width=6 height=7> <a href="index.php?tqvbds=managementnews&member=<?php echo $tqvadid; ?>" class='designwfdsffeafffdfsfe'> Quản lý tin tức thuê nhà  </a></td></tr>
    <tr><td  colspan='3'><div align='left'><img src='images/tqvmembersuccsess.gif' border='0' width=6 height=7> <a href="index.php?tqvbds=publichednews&member=<?php echo $tqvadid; ?>" class='designwfdsffeafffdfsfe'> Đăng tin tức mới  </a></td></tr>   
    <tr><td width='120'> <div align='left'><img src='images/tqvmembersuccsess.gif' border='0' width=6 height=7> <a href="index.php?tqvbds=changeaccount&member=<?php echo $tqvadid; ?>" class='designwfdsffeafffdfsfe'> Thông tin cá nhân </a> </td><td width='5'>  | </td><td width='65'> <div align='center'> <a href="index.php?tqvbds=changepass&member=<?php echo $tqvadid; ?>" class='designwfdsffeafffdfsfe'> Mật khẩu </a></td></tr>
   <tr><td  colspan='3'><div align='left'><img src='images/tqvmembersuccsess.gif' border='0' width=6 height=7> <a href="javascript:logout('index.php?tqvbds=logout')" class='designwfdsffeafffdfsfe'> Thoát  </a></div></td></tr>	               
  
 </table> 

<?php		
} ?>