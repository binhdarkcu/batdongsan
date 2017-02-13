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

<table id="tranquangvinhdesignfr" name="tranquangvinhdesigngr" width="200"  border="0" cellpadding="0" cellspacing="0">
     <tr><td height=5></td></tr>
      <?php  
      $sqlstate=@mysql_query("select * from tqv_bdsquaneng where tqv_qhengstatus='1' order by tqv_qhengid asc ");
      while ($rowstate=@mysql_fetch_assoc($sqlstate)){
             $tqv_qhid=$rowstate["tqv_qhengid"];
             $tqv_qhname=$rowstate["tqv_qhengname"];
             echo "<tr><td height=37 valign='bottom'> <div align='left'><img src='images/chamstate.png' height='17' border='0' width='23'><a href='index.php?tqvbds=detailstatesbds&stateid=$tqv_qhid' class='designwfdsffeafffdfs'> $tqv_qhname </a></td></tr>";
             echo "<tr><td height=2> <img src='images/linequanhuyen.png' height='1' border='0' width='190'></td></tr>";
      
      }
      ?>                  
</table>
