<!--
#  ----------------------------------------		#
#  Vinh IT (Tran Quang Vinh It)                 #
#  Mobile  0905246855                           #
#  Contact designwebvn@gmail.com	            #
#  Please don't edit if you use this code       #
#  Website http://designwebvn.com               #
#  ----------------------------------------	    #
-->
	<link rel="stylesheet" href="<?php echo $rootbds; ?>/images/default.css" type="text/css" />
		<script type="text/javascript" language="javascript" src="<?php echo $rootbds; ?>/images/Library.js"></script>
        <script type="text/javascript" language="javaScript">
			var PAGE_SITE=0;
			var PAGE_FOLDER=100;
			var PAGE_ID=100;
			var DOMESTIC_IP=0;
			setTypingMode(1);
		</script>
		<script type="text/javascript" language="javaScript">checkCookie();</script>
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
	?>
	<table border='0' width='200' name='quangvinhitdesign' cellSpacing=0 cellPadding=0  >
	 <?php  
      $sqlstate=@mysql_query("select * from tqv_bdsnews where tqvnews_status='1' and tqvcat_id =3 order by tqvnews_id desc limit 1 ");
      while ($rowstate=@mysql_fetch_assoc($sqlstate)){
             $tqv_qhname=$rowstate["tqvnews_heading"];
             $news_headingseo=designwebvntranquangvinh($tqv_qhname);
             $tqvnews_anhmh=$rowstate["tqvnews_anhmh"];
             $tqvnews_tomtat=$rowstate["tqvnews_tomtat"];
             $tqvnews_id=$rowstate["tqvnews_id"]; 
             $tqvcat_id=$rowstate["tqvcat_id"]; 
              echo "<tr><td height=39 valign='bottom'> <div align='left'><a href='$rootbds/chi-tiet-tin/$tqvcat_id/$tqvnews_id/$news_headingseo.html' class='designwfdsffeafffdfsfe'> $tqv_qhname </a></td></tr>";
        echo "<tr><td height=10></td></tr>";
           echo "<tr><td><div align='center'><a href='$rootbds/chi-tiet-tin/$tqvcat_id/$tqvnews_id/$news_headingseo.html'><img src='$rootbds/images/newsbds/$tqvnews_anhmh' border='0' style='border:#c6c6c6 solid 2px' width=120 height=90 alt='$tqv_qhname' title='$tqv_qhname'></a></td></tr> ";
            echo "<tr><td height=7></td></tr>";
        echo "<tr><td ><div align='left'> $tqvnews_tomtat</td></tr>"; 
      }
           	   ?>
    
    
                
</table>
