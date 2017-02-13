
	<?php 
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

<table id="tranquangvinhdesignfr" name="tranquangvinhdesigngr" width="200"  border="0" cellpadding="0" cellspacing="0">
     <tr><td height=5></td></tr>
      <?php  
      $sqlstate=@mysql_query("select * from tqv_bdsnews where tqvnews_status='1' and tqvcat_id !=3 order by tqvnews_id desc limit 6 ");
      while ($rowstate=@mysql_fetch_assoc($sqlstate)){
             $tqv_qhname=$rowstate["tqvnews_heading"];
             $news_headingseo=designwebvntranquangvinh($tqv_qhname);
             $tqvnews_anhmh=$rowstate["tqvnews_anhmh"];
             $tqvnews_tomtat=$rowstate["tqvnews_tomtat"];
             $tqvnews_id=$rowstate["tqvnews_id"];
             $tqvcat_id=$rowstate["tqvcat_id"];
            echo "<tr><td height=39 valign='bottom'> <div align='left'><img src='$rootbds/images/bullet3.png' height='9' border='0' width='7' valign='bottom'><a href='$rootbds/chi-tiet-tin/$tqvcat_id/$tqvnews_id/$news_headingseo.html ' class='designwfdsffeafffdfsfe'> $tqv_qhname </a></td></tr>";
            
      
      }
      ?>                  
</table>
