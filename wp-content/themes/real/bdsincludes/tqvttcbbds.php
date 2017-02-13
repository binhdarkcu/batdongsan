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

	if(!defined("websitebds")){
    die ("<div align='center'><font color='blue' size='5'> Access Denied ! Contact Designwebvn@gmail.com");
}
	?>

<table id="tranquangvinhdesignfr" name="tranquangvinhdesigngr" width="210"  border="0" cellpadding="0" cellspacing="0">
     <tr><td height=5 colspan='3'></td></tr>
     <tr><td width='115'><?php 
		    include "bdsincludes/tqvgiavangbds.php";
		   ?> </td> <td width=2> </td> <td width='93'>
		   	   <table width="105"  border="0" cellspacing="1" cellpadding="0" bgcolor="#999999" style="font-size:11px">
               <tr bgcolor="#FFFFFF"><td ><div align='left'> <img src='<?php echo $rootbds; ?>images/ngoaite.png' width=35 height=27 border=0>Tỷ giá </div></td></tr></table>
		   	   <?php 
		       
		       echo"<IFRAME id=3DtabFrame name=3DtabFrame src='$rootbds/bdsincludes/tqvtygiabds.php' frameBorder=0  scrolling=auto marginheight='0' marginwidth='0' width=105 height=48  = bgcolor='#2e5681' allowTransparency></IFRAME>";
		   ?> </td></tr> 
    <tr><td colspan='3' height='7'></td></tr> 
     <tr><td colspan='3'> <?php 
		    include "bdsincludes/tqvweathermainbds.php";
		   ?> </td></tr>                      
</table>
