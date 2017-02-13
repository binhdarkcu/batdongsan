<!-- 
#  ----------------------------------------		#
#  Vinh IT (Tran Quang Vinh It)                 #
#  Mobile  0905246855                           #
#  Contact designwebvn@gmail.com	            #
#  Please don't edit if you use this code       #
#  Website http://designwebvn.com               #
#  ----------------------------------------	    #
 -->
<html>
<head>
	<?php 

	if(!defined("websitebds")){
    die ("<div align='center'><font color='blue' size='5'> Access Denied ! Contact Designwebvn@gmail.com");
}
	?>
	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head><script type="text/javascript" src="<?php echo $rootbds; ?>/images/jscroller2-1.js"></script>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<div align='center'>
<table id="tranquangvinhmenuright" width="228"  border="0" cellpadding="0" cellspacing="0">
   <tr><td background='<?php echo $rootbds; ?>/images/batdongsan_greenmember_15.png' width='228' height='52'></td></tr>
   <tr><td background='<?php echo $rootbds; ?>/images/batdongsan_greenmember_18.png' width='228' height='506' valign='top'>
   	 <div style="overflow: hidden; position: relative; width: 228px; height: 500px;" id="scroller_container" align='left'>
	<div style="position: absolute; left: 0pt; top: -200px; width: 228px;" class="jscroller2_up jscroller2_speed-20 jscroller2_mousemove">
<table class="newsflashcontentpaneopen" >
	<tbody><tr>
		<td colspan="2" valign="top"><div align='left'>&nbsp;&nbsp;<font color="#008000"><strong>ĐÀ NẴNG RENTING <strong></font></p>
	<?php $sqlbdsthue=@mysql_query("select * from tqv_bdsnewsbds where tqvnewsbds_tinhtrang='1' order by  rand() limit 20"); 
	       while($rowbdsthue=@mysql_fetch_assoc($sqlbdsthue)){
	           $tqvnewsbds_tieude=$rowbdsthue['tqvnewsbds_tieude'];
	           $news_headingseo=designwebvntranquangvinh($tqvnewsbds_tieude);
	           $tqvnewsbds_images=$rowbdsthue['tqvnewsbds_images'];
	           $tqvnewsbds_id=$rowbdsthue['tqvnewsbds_id'];
	           $tqv_catebdsid=$rowbdsthue['tqv_catebdsid'];
	          
	       
	       
	?>
	<ul><li><div align='left'><a href='<?php echo $rootbds;?>/tin-nha-dat/<?php echo $tqv_catebdsid; ?>/<?php echo $tqvnewsbds_id; ?>/<?php echo $news_headingseo; ?>.html'  class='designwfdsffeaffs'><?php echo $tqvnewsbds_tieude; ?></a> <p><p><a href='<?php echo $rootbds;?>/tin-nha-dat/<?php echo $tqv_catebdsid; ?>/<?php echo $tqvnewsbds_id; ?>/<?php echo $news_headingseo; ?>.html'> <img src='<?php echo $rootbds; ?>/images/newsbds/<?php echo $tqvnewsbds_images; ?>' border='0' width='170' style='border:#c6c6c6 solid 2px'></a></li></ul> 
	<?php  } ?>	
		</td>
	</tr>
</tbody></table>
    
    </td></tr>
    <tr><td background='<?php echo $rootbds; ?>/images/batdongsan_greenmember_26.png' width='228' height='28'></td></tr>
    <tr><td background='<?php echo $rootbds; ?>/images/batdongsan_greenmember_28.png' width='228' height='55'></td></tr>
    <tr><td background='<?php echo $rootbds; ?>/images/batdongsan_greenmember_29.png' width='228' height='268' valign='top'>
    	<div align='center'>
          <table id="tranquangvinhduan" width="200"  border="0" cellpadding="0" cellspacing="0">
         <tr><td> <?php  include "bdsincludes/tqvprojectbds.php"; ?> </td></tr>
         </table>
          </div>
    	</td></tr>
      <tr><td background='<?php echo $rootbds; ?>/images/batdongsan_greenmember_33.png' width='228' height='19'></td></tr>
     <tr><td background='<?php echo $rootbds; ?>/images/batdongsan_greenmember_34.png' width='228' height='77'></td></tr>
     <tr><td background='<?php echo $rootbds; ?>/images/batdongsan_greenmember_37.png' width='228' height='97' valign='top'>
       
        <div align='center'>
          <table id="tranquangvinhduan" width="220"  border="0" cellpadding="0" cellspacing="0">
         <tr><td height='15'></td></tr>
         <tr><td>  <div align='left'>
      			<a href="ymsgr:sendim?tranquangvinh_lbt"><img border=0 src="tqvonlinebds.php?id=tranquangvinh_lbt"></a> <script type="text/javascript" src="http://download.skype.com/share/skypebuttons/js/skypeCheck.js"></script>
<a href="skype:designwebvn?call"><img src="<?php echo $rootbds; ?>/images/onlineskype.png" style="border: none;" width="95" height="42" /></td></tr>
         <tr><td height=7></td></tr>
             <tr><td ><div align='center'><font color='#000000'> MR DNRN </font></td></tr>
         </table>
          </div>
        </td></tr>
    <tr><td background='<?php echo $rootbds; ?>/images/batdongsan_greenmember_40.png' width='228' height='48'></td></tr>
     <tr><td background='<?php echo $rootbds; ?>/images/batdongsan_greenmember_41.png' width='228' height='172' valign='top'>
     		  <div align='center'>
          <table id="tranquangvinhmenurightcouter" width="180"  border="0" cellpadding="0" cellspacing="0">
          <tr><td height=27><div align='left'>Số người online : <?php include 'bdsincludes/tqvcounterbds.php'; 	 

    $r=@mysql_query("SELECT * FROM tqv_bdsonline");
    $gia_tri=@mysql_num_rows($r); $quangvinhit=$gia_tri*10-2+rand(10,15); 
    echo "<span class='online'>".$quangvinhit;  ?></td></tr>
          
          <tr><td  height=27><div align='left'> Lượt truy cập : <?php include 'bdsincludes/tqvcounter1bds.php'; ?></td></tr>
          
          </table>
    </td></tr>
    <tr><td background='<?php echo $rootbds; ?>/images/batdongsan_greenmember_48.png' width='228' height='33' ></td></tr>
    		  
</table>

</body>
</html>