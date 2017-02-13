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
      $sqlstate=@mysql_query("select * from tqv_bdsnewseng where tqvnewseng_status='1' and tqvcateng_id !=3 order by tqvnewseng_id desc limit 6 ");
      while ($rowstate=@mysql_fetch_assoc($sqlstate)){
             $tqv_qhname=$rowstate["tqvnewseng_heading"];
             $tqvnews_anhmh=$rowstate["tqvnewseng_anhmh"];
             $tqvnews_tomtat=$rowstate["tqvnewseng_tomtat"];
             $tqvnews_id=$rowstate["tqvnewseng_id"];
             $tqvcateng_id=$rowstate["tqvcateng_id"];  
            echo "<tr><td height=39 valign='bottom'> <div align='left'><img src='images/bullet3.png' height='9' border='0' width='7' valign='bottom'><a href='index.php?tqvbds=detailnewsbds&cateid=$tqvcateng_id&newsid=$tqvnews_id' class='designwfdsffeafffdfsfe'> $tqv_qhname </a></td></tr>";
            
      
      }
      ?>                  
</table>
