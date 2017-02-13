<!-- 
#  ----------------------------------------		#
#  Vinh IT (Tran Quang Vinh It)                 #
#  Mobile  0905246855                           #
#  Contact designwebvn@gmail.com	            #
#  Please don't edit if you use this code       #
#  Website http://designwebvn.com               #
#  ----------------------------------------	    #  -->
	<?php 

	if(!defined("websitebds")){
    die ("<div align='center'><font color='blue' size='5'> Access Denied ! Contact Designwebvn@gmail.com");
}
	?>
          <?php
            $sqlintro=@mysql_query("select * from tqv_bdsnewsgt where tqvnewsgt_id='5'");
            $rowintro=@mysql_fetch_assoc($sqlintro);
            $tqvnewsgt_heading=$rowintro['tqvnewsgt_heading'];
            $tqvnewsgt_tomtat=$rowintro['tqvnewsgt_tomtat'];
          ?>
  
           	    <table id="tranquangvinhdesignfrf" name="tranquangvinhdesigngrf" width="225"  border="0" cellpadding="0" cellspacing="0">
           	    <tr><td><div align='left'>
           	    <?php echo $tqvnewsgt_heading; ?> </td></tr>
           	   <tr><td height='7'></td></tr>
           	    <tr><td><div align='left'>
           	    <?php echo $tqvnewsgt_tomtat; ?> </td></tr>
           	    <tr><td height='5'></td></tr>
           	    	<tr><td><div align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='<?php echo $rootbds; ?>/gioi-thieu.html' class='designwfdsffeafffdfsfe'> <img src='<?php echo $rootbds; ?>/images/bullet3.png' border='0' width='7' height='10' > Chi tiết </a></td></tr>
           	   </table>